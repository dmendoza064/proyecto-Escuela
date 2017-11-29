<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Articulos extends Model
{
    
    
    protected $table ="articulos";

    protected $fillable = ['titulo','contenido','slug','user_id','categoria_id'];
    
    

    public function categoria()
    {
        return $this->belongsTo('App\Categorias');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function imagenes()
    {
    	return $this->hasMany('App\Imagenes');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tags');
    }

    public function scopeBuscar($query,$titulo)
        {
            if ($query != "") {
                
                $query->where('titulo','LIKE',"%$titulo%");
            }
        }
    public function scopeConsulta($query,$id)
    {
            $query->where('categoria_id','=',$id);
    }
    public function scopeVistaArticulo($query,$titulo)
    {
        $query->where('titulo','=',$titulo);
    }
   
    
}
