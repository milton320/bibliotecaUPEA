<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;

    protected $fillable=[
        'titulo',
        'cantidad_disponible',
        'estado_libro',
        'fecha_edicion',
        'descripcion',
        'formato',
        'imagen_pdf',
        'observaciones',
        'categoria_id',
        'autor_id',
        'usuario_id',
    ];

    public function usuario(){
        return $this->belongsTo(User::class);
    }
    public function categoria(){
        return $this->belongsTo(categoria::class);
    }
    public function autor(){
        return $this->belongsTo(autor::class);
    }
    public function editorial(){
        return $this->belongsTo(editorial::class);
    }
    public function reservas(){
        return $this->hasMany(Reserva::class);
    }
    public function prestamos(){
        return $this->hasMany(prestamo::class);
    }
}
