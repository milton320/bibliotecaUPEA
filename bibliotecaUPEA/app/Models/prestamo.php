<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    use HasFactory;

    protected $fillable=[
        'fecha_prestamo',
        'fecha_devolucion',
        'observaciones',
        'condicion',
        'tipo',
        'libro_id',
        'usuario_id',

    ];

    public function usuario(){
        return $this->belongsTo(User::class, 'usuario_id');
    }
    public function libro(){
        return $this->belongsTo(libro::class, 'libro_id');
    }
}