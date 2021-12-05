<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $product_types = ProductType::all();
        return view('admin.product_type.index', compact('product_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.product_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
        ]);
        ProductType::create($request->all());
        return redirect()->route('product_type.index')->with('success', 'Project type was created');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $product_type = ProductType::find($id);
        return view('admin.product_type.edit', compact('product_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
        ]);
        $product_type = ProductType::find($id);
        $product_type->update($request->all());
        return redirect()->route('product_type.index')->with('success', 'Project type was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $product_type = ProductType::find($id);
        $product_type->delete();
        return redirect()->route('product_type.index')->with('success', 'Project type was updated');
    }
}
