<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulos;
use App\Imagenes;
use App\Categorias;
use App\Tags;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {   
        $articulo = Articulos::orderBy('id','DESC')->paginate(5);
        $articulo->each(function($articulo)
        {
            $articulo->categoria;
            $articulo->imagenes;
        });
        return view('frontend.index')
        ->with('articulo',$articulo);
    }

    public function Categoriafornt($nombre)
    {
         $categoria = Categorias::CategoriaBusqueda($nombre)->get()->first();
         $id = $categoria->id;
         $articulo = Articulos::Consulta($id)->paginate(5);
        

        //$articulos = DB::table('articulos')->select('*')->where('categoria_id','=',$categoria->id)->get();
       
        
        $articulo->each(function($articulo)
        {
            $articulo->categoria;
            
            $articulo->imagenes;
        });
       
        return view('frontend.index')
        ->with('articulo',$articulo);
    }

    public function Tagfornt($nombre)
    {
       $tag = Tags::TagBusqueda($nombre)->first();
       $articulos= $tag->articulos()->paginate(4);

       dd($tag);
    }

    public function vistaArticulo($titulo)
    {
        $articulo = Articulos::VistaArticulo($titulo)->get();
        $articulo->each(function($articulo)
        {
            $articulo->categoria;
            //dd($articulo);
            $articulo->user;
            $articulo->imagenes;
            $articulo->tags;
        });
        
        
        return view('frontend.articulo')->with('articulo',$articulo);
    }

}
