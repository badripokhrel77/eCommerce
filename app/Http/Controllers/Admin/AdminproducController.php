<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class AdminproducController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'=> ' required|string|max:255',
        'image'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price'=> 'required|numeric|min:0',
       ]);

       $imagePath=$request->file('image')->store('product_images','public');

       Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'image'=>$imagePath,
        ]);

        return redirect()->route('product.index')->with('success','Product added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
