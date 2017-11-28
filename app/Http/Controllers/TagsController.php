<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagsRequest;
use App\Tags;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       /* $tag = Tags::orderBy('id','DESC')->paginate(5);
        return view('adminPgi.tag.index')->with('tag',$tag);
        dd($request->get('nombre'));*/
        $tag = Tags::buscar($request->get('nombre'))->orderBy('id','DESC')->paginate(5);
        
        return view('adminPgi.tag.index')->with('tag',$tag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPgi.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagsRequest $request)
    {
        $tags = new Tags($request->all());
       // dd($tag);
        $tags->save();
        flash("se ha registrado la tag: " . $tags->nombre . " de forma exitosa")->success();

        return redirect()->Route('tags.index');
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
        $tag = Tags::find($id);

        return view('adminPgi.tag.editar')->with('tag',$tag);
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
        $tag = Tags::find($id);
        $tag->fill($request->all());
       
        $tag->save();
        //dd($user);
        //dd($request -> all());
        flash("se ha actualizado " . $tag->nombre . " de forma exitosa")->success();
        return redirect()->Route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags =  Tags::find($id);
        //dd($categoria);
        $tags->delete();

        flash('la categoria: '.$tags->nombre.' fue eliminado exitosamente')->warning();
        return redirect()->Route('tags.index');
    }
}
