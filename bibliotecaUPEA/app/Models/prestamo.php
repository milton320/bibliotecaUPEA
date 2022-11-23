<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    use HasFactory;

    protected $table="prestamos";
    public function usuario(){
        return $this->belongsTo(User::class, 'usuario_id');
    }
}