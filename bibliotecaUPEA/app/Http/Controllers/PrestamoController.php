<?php

namespace App\Http\Controllers;

use App\Models\prestamo;
use App\Http\Requests\StoreprestamoRequest;
use App\Http\Requests\UpdateprestamoRequest;
use App\Models\libro;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestamo = prestamo::all();
        return view('admin.prestamos.index', compact('prestamo')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $libro = libro::all();
        return view('admin.prestamos.create', compact('libro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprestamoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprestamoRequest $request)
    {
        //
        
        $prestamo = new prestamo;
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->fecha_devolucion = $request->fecha_devolucion;
        $prestamo->cantidad = $request->cantidad;
        $prestamo->observaciones = $request->observaciones;
        $prestamo->condicion = $request->condicion;
        $prestamo->tipo = $request->tipo;
        $prestamo->libro_id = $request->libro_id;
        $prestamo->usuario_id = $request->usuario_id;
        $prestamo->save();
        return redirect('libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(prestamo $prestamo)
    {
        //
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprestamoRequest  $request
     * @param  \App\Models\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprestamoRequest $request, prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestamo $prestamo)
    {
        //
    }
}
