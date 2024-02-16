<?php

namespace App\Http\Controllers\Api;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Twilio\Rest\Client;
use App\Models\PhoneVerification;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    protected function register(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }else{
            $user=User::where('phone_number', $request->phone_number)->first();
            if(!$user){
                $token = env("TWILIO_AUTH_TOKEN");
                $twilio_sid = env("TWILIO_SID");
                $twilio_verify_sid = env("TWILIO_VERIFY_SID");
                $twilio = new Client($twilio_sid, $token);
                $twilio->verify->v2->services($twilio_verify_sid)
                    ->verifications
                    ->create($request->phone_number, "sms");
               
                User::create([
                    'name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'password' => Hash::make($request->password),
                ]);
                return response([
                    'message' => 'Your phone number to sent OTP',
                ]);
            }
            else{
                return response([
                'message' => 'Already registered!',
            ]);
            } 
        }
        
        
        
    }


    protected function verify(Request $request)
    {
        $data = Validator::make($request->all(),[
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'numeric'],
        ]);
        if ($data->fails()) {
            return response()->json(['errors' => $data->errors()], 422);
        }
        else{
            try {
            $user = User::where('phone_number', $request->phone_number)->first();
        if($user){
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_sid = getenv("TWILIO_SID");
            $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
            $twilio = new Client($twilio_sid, $token);

            
                $verification = $twilio->verify->v2->services($twilio_verify_sid)
                    ->verificationChecks
                    ->create([
                        'code' =>  $request->verification_code,
                        'to' =>  $request->phone_number
                    ]);
                if ($verification->valid) {
                    if ($user) {
                        $user->update(['isVerified' => true]);
                        $token = $user->createToken('auth_token')->plainTextToken;
                        Auth::login($user);

                        return response([
                            'token' => $token,
                            'data' => $user,
                            'message' => 'Register verified successfully',
                        ], 200);
                    }

                }
                return response([
                    'phone_number' =>  $request->phone_number,
                    'error' => 'Invalid verification code entered!'
                ]);
            
        }
        else{
            return response([
            'message' => 'Phone number Incorrect!',
        ]);
        }
        } catch (RestException $e) {

                // Handle Twilio exception here
                return response([
                    'phone_number' =>  $request->phone_number,
                    'error' => 'Twilio error: ' . $e->getMessage()
                ]);
            }
    }
    }

   

    protected function generate(Request $request)
    {   
        try {
            $request->validate([
                'phone_number' => 'required',
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $e->errors(),
            ], 400);
        }
        // Validation passes, proceed with the rest of the code
        $user = User::where('phone_number', $request->phone_number)->first();

        if ($user) {
            $userOtp = PhoneVerification::where('phone_number', $user->phone_number)->latest()->first();
            $now = now();

            if ($userOtp && $now->isBefore($userOtp->expire_at)) {
                 return response([
                    'status'=>200,
                    'user_phone' => $user->phone_number,
                    'message' => 'OTP has been already sent to your Mobile Number'
                ]);
            }

            try {
                PhoneVerification::create([
                    'user_id' => $user->id,
                    'phone_number' => $user->phone_number,
                    'verification_code' => rand(100000, 999999),
                    'expire_at' => $now->addMinutes(2),
                ]);

                $token = getenv("TWILIO_AUTH_TOKEN");
                $twilio_sid = getenv("TWILIO_SID");
                $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
                $twilio = new Client($twilio_sid, $token);

                $verification = $twilio->verify->v2->services($twilio_verify_sid)
                    ->verifications
                    ->create($request->phone_number, "sms");

                // Check for Twilio API errors
                if ($verification->status !== 'pending') {
                    throw new \Exception('Twilio API error: ' . $verification->status);
                }

                return response([
                    'user_phone' => $user->phone_number,
                    'message' => 'OTP has been sent to your Mobile Number'
                ]);
            } catch (\Exception $e) {
                return response(['error' => $e->getMessage()], 500); // Internal Server Error
            }

        } else {
            return response([
                'message' => 'Please register first!'
            ], 400); // You might want to use an appropriate HTTP status code for this response
        }
    }



    public function generateOTP($phone_number)
    {
        $user = User::where('phone_number', $phone_number)->first();

        if ($user) {
            $userOtp = PhoneVerification::where('phone_number', $user->phone_number)->latest()->first();
            $now = now();

            if ($userOtp && $now->isBefore($userOtp->expire_at)) {
                return $userOtp;
            }

            return PhoneVerification::create([
                'user_id' => $user->id,
                'phone_number' => $user->phone_number,
                'verification_code' => rand(100000, 999999),
                'expire_at' => $now->addMinutes(2),
            ]);
        } else {
            return response([
                'message' => 'Please register first!'
            ], 400); // You might want to use an appropriate HTTP status code for this response
        }
    }

    // public function verifyOTP(Request $request)
    // {
    //     $data = Validator::make($request->all(),[
    //         'verification_code' => ['required', 'numeric'],
    //         'phone_number' => ['required', 'numeric'],
    //     ]);
    //     if ($data->fails()) {
    //         return response()->json(['errors' => $data->errors()], 422);
    //     }

    //     $userOtp = PhoneVerification::where('phone_number', $data['phone_number'])
    //         ->latest()
    //         ->first();
    //     $now = now();

        
    //     $user = User::where('phone_number', $data['phone_number'])->first();

    //     if ($user) {
    //         if (!$userOtp) {
    //         return response([
    //             'message'=>'Your OTP is Not Correct',
    //         ]);
    //         } elseif ($now->isAfter($userOtp->expire_at)) {
    //             return response([
    //                 'message'=>'Your OTP is Expired',
    //             ]);
    //         }else
    //         {
    //         $token = getenv("TWILIO_AUTH_TOKEN");
    //         $twilio_sid = getenv("TWILIO_SID");
    //         $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");

    //         $twilio = new Client($twilio_sid, $token);
    //         $verification = $twilio->verify->v2->services($twilio_verify_sid)
    //                     ->verificationChecks
    //                     ->create([
    //                         'code' => $data['verification_code'],
    //                         'to' => $data['phone_number'],
    //                     ]);
    //         $user->update(['isVerified' => true]);
    //         // Update verification status or any necessary user data
    //         $userOtp->update(['expire_at' => now()]);
    //         $token = $user->createToken('auth_token')->plainTextToken;

    //         /* Authenticate user */
    //         Auth::login($user);

    //                 return response([
    //                 'token' => $token,
    //                 'data' => $user,
    //                 'message' => 'Phone verified successfully',
    //             ], 200);  
    //             }
    //   }

        
    // }


public function verifyOTP(Request $request)
{
    $validator = Validator::make($request->all(), [
        'verification_code' => 'required|string|min:6|max:6',
        'phone_number' => [
            'required',
            'exists:users,phone_number',
            function ($attribute, $value, $fail) {
                $userOtp = PhoneVerification::where('phone_number', $value)
                    ->latest()
                    ->first();

                if (!$userOtp || now()->isAfter($userOtp->expire_at)) {
                    $fail("The $attribute is invalid or has expired.");
                }
            },
        ],
    ], [
        'verification_code.required' => 'Verification code is required.',
        'verification_code.string' => 'Verification code must be a string.',
        'verification_code.min' => 'Verification code must be at least 6 characters.',
        'verification_code.max' => 'Verification code must not exceed 6 characters.',
        'phone_number.required' => 'Phone number is required.',
        'phone_number.exists' => 'Phone number not found or already verified.',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'error' => $validator->errors()->first(),
        ], 400);
    }

    $token = getenv("TWILIO_AUTH_TOKEN");
    $twilio_sid = getenv("TWILIO_SID");
    $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");

    $twilio = new Client($twilio_sid, $token);
    $verification = $twilio->verify->v2->services($twilio_verify_sid)
                    ->verificationChecks
                    ->create([
                        'code' => $request->input('verification_code'),
                        'to' => $request->input('phone_number'),
                    ]);

    if ($verification->status === 'approved') {
        $user = User::where('phone_number', $request->input('phone_number'))->first();

        if ($user) {
            $user->update(['isVerified' => true]);
            PhoneVerification::where('phone_number', $request->input('phone_number'))->update(['expire_at' => now()]);
            $token = $user->createToken('auth_token')->plainTextToken;

            /* Authenticate user */
            Auth::login($user);

            return response()->json([
                'token' => $token,
                'data' => $user,
                'message' => 'Phone verified successfully.',
            ], 200);
        }
    }

    // If verification status is not approved or user not found
    return response()->json([
        'error' => 'Incorrect verification code.',
    ], 400);
}


   protected function userGet(Request $request)
{   
    
    try {
        $data = $request->user();

        if ($data) {
            return response([
                'data' => $data,
                'message' => 'Login successfully',
            ]);
        } else {
            return response([
                'message' => 'You are not logged in.',
            ]);
        }
    } catch (\Illuminate\Auth\AuthenticationException $e) {
        return response([
            'message' => 'Please login first!',
        ], 401); // You can use an appropriate HTTP status code, like 401 (Unauthorized)
    }
}

   protected function logout(Request $request)
    {
        
        $data=Auth::user()->tokens()->delete();
        if($data){
            return response([          
            'message'=>'logout successfully',
        ]);
        }else{
            return response([          
            'message'=>'You are not login',
        ]);
        }
        
    }
    
}
