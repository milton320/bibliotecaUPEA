<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Http\Requests\StoreautorRequest;
use App\Http\Requests\UpdateautorRequest;
use App\Models\categoria;
use App\Models\editorial;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $autor = Autor::all();
        return view('admin.autor.index', compact('autor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.autor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreautorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreautorRequest $request)
    {
        //
        $autor = new autor;
        $autor->nombre = $request->nombre;
        $autor->correo = $request->correo;
        $autor->save();
        return redirect('autores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(autor $autor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateautorRequest  $request
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateautorRequest $request, autor $autor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(autor $autor)
    {
        //
    }
}
