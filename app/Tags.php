<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    protected $table ="tags";

    protected $fillable = ['nombre'];

    public function articulos()
    {
    	return $this->belongsToMany('App\Articulos')->withTimestamps();
    }
    public function scopeBuscar($query, $nombre)
    {
    	/*dd("nombre: ". $nombre);*/
    	if($nombre != "")
    	{

    	 $query->where('nombre','LIKE' ,"%$nombre%");
    	}

    }
    public function scopeTagBusqueda($query,$nombre)
    {
        return $query->where('nombre', '=',$nombre);
    }
     public function scopeConsultaTags()
    {
        
    }
}
