<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagenes;
class ImagenesController extends Controller
{
    //
    public function index()
    {
    	$imagen = Imagenes::all();
    	$imagen -> each(function ($imagen)
    	{
    		$imagen->Articulo;
    	});
    	//dd($imagen);
    	return view('adminPgi.imagenes.index')->with('imagenes', $imagen);
    }
}
