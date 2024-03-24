<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Products::all();
        return view('layouts.customer.product.create', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $add = Products::create($request->all());
        if ($add) {
            return redirect()->route("products.index");
        }
        return back();
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
    public function edit(Products $product)
    {
        $record = $product;
        $records = Products::all();

        return view('layouts.customer.product.edit', compact('records', 'record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $upd = $product->update($request->all());
        if ($upd) {
            return redirect()->route("products.index");
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $del = $product->delete();

        if ($del) {
            return redirect()->route("products.index");
        }
        return back();
    }
}
