<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pc;
use App\Models\Product;
use Illuminate\Http\Request;

class PcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $pcs = Pc::all();
        return view('admin.pc.index', compact('pcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.pc.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'model' => 'required',
            'speed' => 'required',
            'ram' => 'required',
            'hd' => 'required',
            'cd' => 'required',
            'price' => 'required'
        ]);
        Pc::create($request->all());
        return redirect()->route('pc.index')->with('success', 'Pc type was created');
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
        $pc = Pc::find($id);
        $models = Product::query()->select('model')->get();
        return view('admin.pc.edit', compact('pc', 'models'));
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
            'code' => 'required',
            'model' => 'required',
            'speed' => 'required',
            'ram' => 'required',
            'hd' => 'required',
            'cd' => 'required',
            'price' => 'required'
        ]);
        $pc = Pc::find($id);
        $pc->update($request->all());
        return redirect()->route('pc.index')->with('success', 'Pc type was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $pc = Pc::find($id);
        $pc->delete();
        return redirect()->route('pc.index')->with('Pc was deleted');
    }
}
