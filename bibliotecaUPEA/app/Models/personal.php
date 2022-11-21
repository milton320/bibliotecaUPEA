<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory;

    public function usuario(){
        return $this->hasOne(User::class);
    }
}
