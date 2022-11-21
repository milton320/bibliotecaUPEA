<?php

namespace App\Http\Controllers;

use App\Models\editorial;
use App\Http\Requests\StoreeditorialRequest;
use App\Http\Requests\UpdateeditorialRequest;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $editorial = editorial::all();
        return view('admin.editorial.index', compact('editorial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreeditorialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreeditorialRequest $request)
    {
        //
        $editorial = new editorial;
        $editorial->nombre = $request->nombre;
        $editorial->direccion = $request->direccion;
        $editorial->pais = $request->pais;
        $editorial->telefono = $request->telefono;
        $editorial->save();
        return redirect('editorial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit(editorial $editorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeditorialRequest  $request
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateeditorialRequest $request, editorial $editorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(editorial $editorial)
    {
        //
    }
}
