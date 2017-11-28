<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prueba extends Controller
{
    public function index()
    {
       // $categorias = Categorias::orderBy('id','DESC')->paginate(5);
        return view('piwik.index');
    }
}
