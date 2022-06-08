<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function marca(){
        //belongsto relacion
        return $this->belongsTo(Marca::class);
    }

    public function categoria(){
        //belongsto relacion
        return $this->belongsTo(Categoria::class);
    }
}
