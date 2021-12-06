<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Maker;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $makers = Maker::all();
        return view('admin.maker.index', compact('makers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.maker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        Maker::create($request->all());

        return redirect()->route('maker.index')->with('success', 'Maker was created');
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
        $maker = Maker::find($id);
        return view('admin.maker.edit', compact('maker'));
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
            'title' => 'required'
        ]);
        $maker = Maker::find($id);
        $maker->update($request->all());
        return redirect()->route('maker.index')->with('success', 'Maker was update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $maker = Maker::find($id);
        $maker->delete();
        return redirect()->route('maker.index')->with('success', 'Maker was delete');
    }
}
