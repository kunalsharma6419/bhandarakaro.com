<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Offer;
use App\Models\FoodProduct;
use Illuminate\Support\Facades\Storage;


class FoodProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entriesPerPage = request('entries', 10);
        $search = request('search');
        $foodproducts = FoodProduct::with('category', 'offer');

        if ($search) {
            $foodproducts->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%')
                    ->orWhere('ingredient', 'LIKE', '%' . $search . '%');
            });
        }

        $foodproducts = $foodproducts->paginate($entriesPerPage);
        return view('admin.pages.foodproducts.index', compact('foodproducts', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); // Fetch categories to populate dropdown
        $offers = Offer::all();
        return view('admin.pages.foodproducts.create', compact('categories', 'offers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and store a new food product
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust mime types and max size as needed
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'ingredient' => 'nullable|string',
            'tags.*' => 'nullable|string',
            'is_deal' => 'required|boolean',
            'offer_id' => 'required|exists:offers,id',
        ]);

        // Upload multiple images if provided
        $uploadedImages = [];
        if ($request->hasFile('images')) {
            $imageName = time();
            foreach ($request->file('images') as $image) {
                $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $uniqueName = $originalName . '_' . time() . '.' . $image->getClientOriginalExtension();

                // Move the image to the desired location
                $image->move('foodproductImage', $uniqueName);

                $uploadedImages[] = $uniqueName;
            }
        }

        FoodProduct::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $uploadedImages,
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'ingredient' => $request->input('ingredient'),
            'tags' => $request->input('tags'),
            // 'tags' => implode(',', $request->input('tags')),
            'is_deal' => $request->input('is_deal'),
            'offer_id' => $request->input('offer_id'),
        ]);

        return redirect()->route('superadmin.foodproducts.list')->with('successmessage', 'Bhandara Food Item Added Successfully ');
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
        // Find the FoodProduct by ID
        $foodProduct = FoodProduct::findOrFail($id);
        $categories = Category::all(); // Fetch categories to populate dropdown
        $offers = Offer::all();
        return view('admin.pages.foodproducts.edit', compact('foodProduct','categories', 'offers'));
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
        // Validate the update request
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'ingredient' => 'nullable|string',
            'tags.*' => 'nullable|string',
            'is_deal' => 'required|boolean',
            'offer_id' => 'required|exists:offers,id',
        ]);

        // Find the FoodProduct by ID
        $foodProduct = FoodProduct::findOrFail($id);

        // Upload and update images if provided
        $uploadedImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $uniqueName = $originalName . '_' . time() . '.' . $image->getClientOriginalExtension();

                // Move the image to the desired location
                $image->move('foodproductImage', $uniqueName);

                $uploadedImages[] = $uniqueName;
            }

            // Delete old images if needed, and update with new ones
            // Uncomment the next line if you want to delete old images
            $this->deleteOldImages($foodProduct->image);
            $foodProduct->image = $uploadedImages;
        }

        // Update the FoodProduct with new data
        $foodProduct->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'ingredient' => $request->input('ingredient'),
            'tags' => $request->input('tags'),
            'is_deal' => $request->input('is_deal'),
            'offer_id' => $request->input('offer_id'),
        ]);

        return redirect()->route('superadmin.foodproducts.list')->with('updatemessage', 'Bhandara Food Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodProduct= FoodProduct::find($id)->delete();
        return redirect()->route('superadmin.foodproducts.list')->with('deletemessage', 'Bhandara Food Item Deleted Successfully ');
    }

    protected function deleteOldImages($images)
    {
        foreach ($images as $image) {
            // Delete the old images from the storage
            // Assuming 'foodproductImage' is your disk name, adjust it based on your actual disk name
            Storage::disk('foodproductImage')->delete($image);
        }
    }

}
