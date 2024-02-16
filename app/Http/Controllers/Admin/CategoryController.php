<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $image= $request->file;
        $imagename = time(). '.' . $image->getClientOriginalExtension();
        $request->file->move('categoryImage', $imagename);

        $category->category_image=$imagename;
        $category->category_name= $request->category_name;

        $category->save();

        return redirect()->route('superadmin.categories.list')->with('successmessage', 'Bhandara Category Added Successfully ');
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
        $category = Category::find($id);
        return view('admin.pages.categories.edit', compact('category'));
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
        $category = Category::find($id);
        $image= $request->file;

        if($image){

            $imagename = time(). '.' . $image->getClientOriginalExtension();
            $request->file->move('categoryImage', $imagename);
            $category->category_image=$imagename;
        }

        $category->category_name= $request->category_name;

        $category->save();

        return redirect()->route('superadmin.categories.list')->with('updatemessage', 'Bhandara Category Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id)->delete();
        return redirect()->route('superadmin.categories.list')->with('deletemessage', 'Bhandara Category Deleted Successfully ');
    }
}
