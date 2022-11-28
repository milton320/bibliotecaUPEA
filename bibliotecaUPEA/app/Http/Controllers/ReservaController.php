<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Http\Requests\StoreReservaRequest;
use App\Http\Requests\UpdateReservaRequest;
use App\Models\libro;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reserva = DB::table('reservas')
        ->join('users', 'reservas.usuario_id', '=', 'users.id') 
        ->join('libros', 'reservas.libro_id', '=', 'libros.id') 
        ->get();
        return view('admin.reservas.index',compact('reserva'));
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
        return view('admin.reservas.create', compact('libro'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservaRequest $request)
    {
        //
        self::libroUpdate($request->libro_id);
        $reserva = new Reserva;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->fecha_entrega = $request->fecha_entrega;
        $reserva->estado = $request->estado;
        $reserva->condicion_libro = $request->condicion_libro;
        $reserva->usuario_id = $request->usuario_id;
        $reserva->libro_id = $request->libro_id;
        $reserva->save();
        return redirect('reservas');
        
    }
    public function libroUpdate($id){  
        
        $users = DB::table('libros')
        ->select('cantidad_disponible')
        ->where('id', $id)
        ->groupBy('cantidad_disponible')
        ->get();
        foreach($users as $item){
            $resulta = $item;
        }
        

        DB::table('libros')
        ->where('id', $id)
        ->update(['cantidad_disponible' => $resulta->cantidad_disponible + 1]);
            
        
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservaRequest  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReservaRequest $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
