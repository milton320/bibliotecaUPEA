<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;

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
}
