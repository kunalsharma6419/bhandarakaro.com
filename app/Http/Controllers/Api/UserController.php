<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Temple;
use App\Models\Location;
use App\Models\ContactUs;
use App\Models\Faq;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use DB;

class UserController extends Controller
{
    public function location(Request $request)
{   
    $data = Validator::make($request->all(), [
        'l_pincode' => ['required', 'numeric'],
    ], [
        'l_pincode.required' => 'The Location pincode field is required',
    ]);

    if ($data->fails()) {
        return response()->json(['errors' => $data->errors()], 422);
    } else {
        if ($request->l_pincode) {
            $locat = Location::where('l_pincode', $request->l_pincode)->first();
        } else {
            $locat = Temple::where('pincode', $request->pincode)->first();
        }

        if ($locat) {
            $location = Location::with('temple')->find($locat->id);

            if ($location) {
                $image_url = $location->image
                    ? env('APP_URL') . '/locationImage/' . $location->image
                    : null;

                return response([
                    'status' => 200,
                    'location' => [
                        
                        'image_url' => $image_url,
                    'data'=>$location,
                ],
                ]);
            } else {
                return response([
                    'status' => 200,
                    'message' => 'There is no temple in the location of this pincode!!',
                ]);
            }
        } else {
            return response([
                'status' => 200,
                'message' => 'No location found for the provided pincode.',
            ]);
        }
    }
}


    public function templeShow()
    {
        $temples = DB::table('temples')
            ->join('locations', 'temples.pin_id', '=', 'locations.id')
            ->select('temples.*', 'locations.*', 'locations.image as location_image')
            ->get();

        if (count($temples) > 0) {
            $templesWithImageUrls = $temples->map(function ($temple) {
                return [
                   
                    'image' => $temple->location_image
                        ? env('APP_URL') . '/locationImage/' . $temple->location_image
                        : null,
                    
                    'data'=>$temple,
                ];
            });

            return response([
                'status' => 200,
                'temples' => $templesWithImageUrls,
            ]);
        } else {
            return response([
                'status' => 200,
                'message' => 'Data not found!!',
            ]);
        }
    }


    public function contactus(Request $request)
    {
        $data=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'message'=>'required',
        ]);
         if ($data->fails()) {
            return response()->json(['errors' => $data->errors()], 422);
        }
        else{
            if($request->all()){
                ContactUs::create($request->all());
                return response([
                    'message'=>'contatus added successfully!!',
                    'status'=>200,
                ]);
            }else{
                return response([
                    'status'=>'error something',
                ]);
            }
        }
    }

    public function faq(Request $request)
    {   
        $faq=Faq::get();
        if(count($faq)>0){
            return response([
                'faq_data'=>$faq,
                'status'=>200,
            ]);
        }else{
            return response([
                'status'=>'error something',
            ]);
        }
    }

    
    public function myProfileUpdat(Request $request)
    { 
        $update_profile=User::where('id',$request->id)->update(['name'=>$request->name,'email'=>$request->email,'phone_number'=>$request->phone_number]);
        
        if($update_profile){
            return response([
                'messege'=>'My profile updated successfulyy!!!!',
                'status'=>200,
            ]);
        }else{
            return response([
                'status'=>'error something',
            ]);
        }
    }
}
