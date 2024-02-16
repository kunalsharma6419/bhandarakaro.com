<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        return view('admin.pages.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location = new Location;
        $image= $request->file;
        $imagename = time(). '.' . $image->getClientOriginalExtension();
        $request->file->move('locationImage', $imagename);

        $location->location_image=$imagename;
        $location->state= $request->state;
        $location->city= $request->city;
        $location->l_pincode= $request->l_pincode;

        $location->save();

        return redirect()->route('superadmin.locations.list')->with('successmessage', 'Bhandara Location Added Successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
        return view('admin.pages.locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = Location::find($id);
        $image= $request->file;

        if($image){

            $imagename = time(). '.' . $image->getClientOriginalExtension();
            $request->file->move('locationImage', $imagename);
            $location->location_image=$imagename;
        }

        $location->state= $request->state;
        $location->city= $request->city;
        $location->l_pincode= $request->l_pincode;

        $location->save();

        return redirect()->route('superadmin.locations.list')->with('updatemessage', 'Bhandara Location Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location= Location::find($id)->delete();
        return redirect()->route('superadmin.locations.list')->with('deletemessage', 'Bhandara Location Deleted Successfully ');
    }
}
