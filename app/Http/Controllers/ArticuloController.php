<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Tags;
use App\Articulos;
use App\Imagenes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\ArticleRequest;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articulos = Articulos::buscar($request->get('titulo'))->orderBy('id','DESC')->paginate(5);
        //dd($articulos->all());
        $articulos->each(function($articulos)
        {
            $articulos->categorias;
            $articulos->user;

        });
        
        return view('adminPgi.articulos.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categorias::orderBy('nombre','ASC')->pluck('nombre','id');
        
        $tags = Tags::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('adminPgi.articulos.create')->with('categoria',$categoria) ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //dd($request->categoria_id);
        //dd($request->tags);
        if ($request->hasFile('ima')) 
        {
            # code
            //manupulacion de imagenes 
           $file = $request->file('ima');
          //$url = $request->path();
          $nombre = 'PGI_'. time() . '' .$file->getClientOriginalName();
          $path1 = public_path().'\imagenes\articulos';
          $file->move($path1,$nombre);
          //dd($path1."/".$nombre);

            

           
           //el metodo store crea una carpeta temporal donde seguradan las fotos con un nombre en especial
           //$path = $request->ima->store('Articulos');
           
        }
          else
          {
            dd('no hay imagen');
          }
            

           

             
           
          //guardar el articulo
            $arti = new  Articulos($request->all());

            $arti-> user_id = Auth::user()->id;
            $arti->categoria_id = $request->categoria_id;
           
           $arti->save();

            $arti->tags()->sync($request->tags);


            //guardar imagen
            $imagen = new Imagenes();
            $imagen-> nombre = $nombre;
            $imagen->articulos()->associate($arti);
            $imagen->save();



            flash("se ha registrado el articulo: " . $arti->titulo . " de forma exitosa")->success();

            return redirect()->route('Articulo.index');
 


     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulos = Articulos::find($id);
        $categorias = Categorias::orderBy('nombre','ASC')->pluck('nombre','id');
        $tags = Tags::orderBy('nombre','ASC')->pluck('nombre','id');
        $arreglo_tag = $articulos->tags->pluck('id')->ToArray();
        //dd($arreglo_tag);
        return view('adminPgi.articulos.Editar')->with('Editar') 
                ->with('tags',$tags) 
                -> with('categoria', $categorias)
                ->with('articulo',$articulos)
                ->with('arreglo',$arreglo_tag);



        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $articulo = Articulos::find($id);
        $articulo -> fill($request->all());
        $articulo->save();

        $articulo->tags()->sync($request->tags);

        flash("se ha Editado el articulo: " . $articulo->titulo . " de forma exitosa")->success();
        
        return redirect()->route('Articulo.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulos::find($id);
        //dd($articulo->all());
        $articulo->delete();

        flash('El Articulo '.$articulo->titulo.' fue eliminado exitosamente')->warning();
        return redirect()->Route('Articulo.index');

    }
}
