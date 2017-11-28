<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriasRequest;
use App\Categorias;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::orderBy('id','DESC')->paginate(5);
        return view('adminPgi.categorias.index')->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPgi.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriasRequest $request)
    {
        $categoria = new Categorias($request->all());
        $categoria->save();
        flash("se ha registrado la categoria: " . $categoria->nombre . " de forma exitosa")->success();

        return redirect()->Route('categorias.index');
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
        $categoria = Categorias::find($id);

        return view('adminPgi.categorias.editar')->with('categoria',$categoria);
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
        $categoria = Categorias::find($id);
        $categoria->nombre = $request->nombre;
       
        $categoria->save();
        //dd($user);
        //dd($request -> all());
        flash("se ha actualizado " . $categoria->nombre . " de forma exitosa")->success();
        return redirect()->Route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria =  Categorias::find($id);
        //dd($categoria);
        $categoria->delete();

        flash('la categoria: '.$categoria->nombre.' fue eliminado exitosamente')->warning();
        return redirect()->Route('categorias.index');
    }
}
