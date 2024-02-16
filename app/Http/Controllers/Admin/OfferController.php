<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entriesPerPage = request('entries', 5);
        $search = request('search');
        $offers = Offer::query();

        if ($search) {
            $offers->where('offer_code', 'LIKE', '%' . $search . '%');
        }

        $offers = $offers->paginate($entriesPerPage);
        return view('admin.pages.offers.index', compact('offers', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = new Offer;
        $image= $request->file;
        $imagename = time(). '.' . $image->getClientOriginalExtension();
        $request->file->move('offerImage', $imagename);

        $offer->offer_image=$imagename;
        $offer->offer_code= $request->offer_code;
        $offer->offer_discount_percent = $request->offer_discount_percent;

        $offer->save();

        return redirect()->route('superadmin.offers.list')->with('successmessage', 'Bhandara Offer Added Successfully ');
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
        $offer = Offer::find($id);
        return view('admin.pages.offers.edit', compact('offer'));
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
        $offer = Offer::find($id);
        $image= $request->file;

        if($image){

            $imagename = time(). '.' . $image->getClientOriginalExtension();
            $request->file->move('offerImage', $imagename);
            $offer->offer_image=$imagename;
        }

        $offer->offer_code= $request->offer_code;
        $offer->offer_discount_percent= $request->offer_discount_percent;

        $offer->save();

        return redirect()->route('superadmin.offers.list')->with('updatemessage', 'Bhandara Offer Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer= Offer::find($id)->delete();
        return redirect()->route('superadmin.offers.list')->with('deletemessage', 'Bhandara Offer Deleted Successfully ');
    }
}
