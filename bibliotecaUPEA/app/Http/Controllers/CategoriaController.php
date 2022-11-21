<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Http\Requests\StorecategoriaRequest;
use App\Http\Requests\UpdatecategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoria = categoria::all();
        return view('admin.categoria.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoriaRequest $request)
    {
        //
        $categoria = new categoria;
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect('categoria');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria $categoria)
    {
        return view('admin.categoria.editar', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoriaRequest  $request
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoriaRequest $request, categoria $categoria)
    {
        //
        $validated = $request->validated();
        $categoria->update($request->all());
        return redirect('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria $categoria)
    {
        //
    }
}
