<?php

namespace App\Http\Controllers;

use App\Models\libro;
use App\Http\Requests\StorelibroRequest;
use App\Http\Requests\UpdatelibroRequest;
use App\Models\autor;
use App\Models\categoria;
use App\Models\editorial;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libro = libro::all();

        return view('admin.libros.index', compact('libro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoria = categoria::all();
        $editorial = editorial::all();
        $autor = autor::all();
        return view('admin.libros.create', compact('categoria','editorial', 'autor'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelibroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelibroRequest $request)
    {
        //
        $libro = new libro;
        $libro->titulo = $request->titulo;
        $libro->cantidad_disponible = $request->cantidad_disponible;
        $libro->fecha_edicion = $request->fecha_edicion;
        $libro->descripcion = $request->descripcion;
        $libro->formato = $request->formato;
        $libro->observaciones = $request->observaciones;
        $libro->categoria_id = $request->categoria_id;
        $libro->autor_id = $request->autor_id;
        $libro->editorial_id = $request->editorial_id;
        $libro->usuario_id = $request->usuario_id;
        
        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen')->store('libros');
            $libro->imagen_pdf = $imagen;
        
        }
        $libro->save();
        return redirect('libro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelibroRequest  $request
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelibroRequest $request, libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(libro $libro)
    {
        //
    }
}
