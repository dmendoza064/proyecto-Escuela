<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    //
    protected $table ="imagenes";

    protected $fillable = ['nombre','articulos_id'];

    public function Articulos()
    {
        return $this->belongsTo('App\Articulos');
    }
}
