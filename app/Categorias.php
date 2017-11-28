<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    protected $table ="categorias";

    protected $fillable = ['nombre'];

    public function articulo()
    {
    	return $this->hasMany('App\Articulos');
    }

    public function scopeCategoriaBusqueda($query,$nombre)
    {
    	return $query->where('nombre', '=',$nombre);
    }
}
 