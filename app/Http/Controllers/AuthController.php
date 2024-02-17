<?php

namespace App\Http\Controllers;

use Twilio\Exceptions\RestException;
use App\Models\PhoneVerification;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;
use App\Models\User; // Assuming your User model is located in the App\Models namespace
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'numeric', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        /* Get credentials from .env */
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        // dd($twilio);
        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($data['phone_number'], "sms");
        User::create([
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('user.verify')->with(['phone_number' => $data['phone_number']]);
    }



     protected function verify(Request $request)
    {
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'string'],
        ]);

        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");

        $twilio = new Client($twilio_sid, $token);

        try {
            $verification = $twilio->verify->v2->services($twilio_verify_sid)
                ->verificationChecks
                ->create([
                    'code' => $data['verification_code'],
                    'to' => $data['phone_number']
                ]);

            if ($verification->valid) {
                $user = User::where('phone_number', $data['phone_number'])->first();

                if ($user) {
                    $user->update(['isVerified' => true]);

                    /* Authenticate user */
                    Auth::login($user);

                    return redirect()->route('redirect')->with(['message' => 'Phone number verified']);
                }
            }

            return back()->with([
                'phone_number' => $data['phone_number'],
                'error' => 'Invalid verification code entered!'
            ]);
        } catch (RestException $e) {
            // Handle Twilio exception here
            return back()->with([
                'phone_number' => $data['phone_number'],
                'error' => 'Twilio error: ' . $e->getMessage()
            ]);
        }
    }



    public function showMobileNumberForm()
    {
        return view('mobile.auth.login');
    }

    protected function generate(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|exists:users,phone_number'
        ]);

        $userOtp = $this->generateOTP($request->phone_number);
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($request->phone_number, "sms");

        return redirect()->route('user.login.verifyotp',['user_phone' => $userOtp->phone_number])
            ->with('success', 'OTP has beeen sent on your Mobile Number');
    }

    public function generateOTP($phone_number)
    {
        $user = User::where('phone_number', $phone_number)->first();
        $userOtp = PhoneVerification::where('phone_number', $user->phone_number)->latest()->first();

        $now = now();
        if($userOtp && $now->isBefore($userOtp->expire_at)) {
            return $userOtp;
        }

        return PhoneVerification::create([
            'user_id' => $user->id,
            'phone_number' => $user->phone_number,
            'verification_code' => rand(100000, 999999),
            'expire_at' => $now->addMinutes(2),
        ]);
    }

    public function verification($user_phone)
    {
        return view('mobile.auth.signverify')->with(['user_phone' => $user_phone]);
    }


    // public function verifyOTP(Request $request)
    // {
    //     $data = $request->validate([
    //         'verification_code' => 'required',
    //         'phone_number' => 'required|exists:users,phone_number'
    //     ]);

    //     $userOtp = PhoneVerification::where('phone_number', $data['phone_number'])->where('verification_code', $data['verification_code'])->latest()->first();
    //     // dd($userOtp);
    //     $now = now();

    //     if(!$userOtp) {
    //         return redirect()->back()->with('error', 'Your OTP is Not Correct');
    //     } elseif ($userOtp && $now->isAfter($userOtp->expire_at)) {
    //         return redirect()->back()->with('error', 'Your OTP is Expired');
    //     }

    //     // $user = User::whereId($request->user_phone)->first();
    //     $user = User::where('phone_number', $data['user_phone'])->first();
    //     // dd($user);

    //     if ($user) {
    //         // $user->update(['isVerified' => true]);
    //         $userOtp->update([
    //             'expire_at' => now()
    //         ]);

    //         /* Authenticate user */
    //         Auth::login($user);

    //         return redirect()->route('dashboard')->with(['message' => 'Phone number verified']);
    //     }


    //     return redirect()->route('user.login')->with(['error' => 'Your OTP is not Correct']);

    // }
    public function verifyOTP(Request $request)
    {
        $data = $request->validate([
            'verification_code' => 'required',
            'phone_number' => 'required|exists:users,phone_number'
        ]);
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");

        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
                    ->verificationChecks
                    ->create([
                        'code' => $data['verification_code'],
                        'to' => $data['phone_number'],
                    ]);
        $userOtp = PhoneVerification::where('phone_number', $data['phone_number'])
            ->latest()
            ->first();
        $now = now();

        if (!$userOtp) {
            return redirect()->back()->with('error', 'Your OTP is Not Correct');
        } elseif ($now->isAfter($userOtp->expire_at)) {
            return redirect()->back()->with('error', 'Your OTP is Expired');
        }

        $user = User::where('phone_number', $data['phone_number'])->first();

        if ($user) {
            $user->update(['isVerified' => true]);
            // Update verification status or any necessary user data
            $userOtp->update(['expire_at' => now()]);

            /* Authenticate user */
            Auth::login($user);

            return redirect()->route('redirect')->with(['message' => 'Phone number verified']);
        }

        return redirect()->route('user.login')->with(['error' => 'Your OTP is not Correct']);
    }


    public function destroy(Request $request)
    {
        // Auth::guard(config('fortify.guard', 'web'))->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();
        Auth::user()->tokens()->delete();

        return redirect('/');
    }

}
