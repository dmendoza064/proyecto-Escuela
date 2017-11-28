@extends('adminPgi.plantillas.main')

@section('titulo', 'Editar Articulos'.$articulo->titulo)

@section('contenido')

     
            <!-- /.box-header -->
            <div class="box-body pad">
                {!! Form::open(['route' =>['Articulo.update',$articulo->id], 'method' => 'POST', 'files' => true]) !!}
                <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


            <div class="from-group">
                {!! Form::label('title', 'titulo') !!}

                {!! Form::text('titulo',$articulo->titulo,['class' =>  'form-control','placeholder' => 'titulo']) !!}
            </div>
            <div class="from-group has-feedback">
                {!! Form::label('categoria_id', 'Categoria') !!}
                
                    {!! Form::select('categoria_id', $categoria, $articulo->categoria->id,['class' => 'form-control sel-catecoria','placeholder' => 'Selecciona']) !!}
                
                
            </div>
             <!-- <div class="from-group">
                <tex
                tarea id="editor1" name="editor1" rows="10" cols="80" >
                                 Escribe           
                    </textarea>
            </div>-->
            <div class="from-group">
                {!! Form::label('contenido', 'contenido del articulo') !!}

                {!! Form::textarea('contenido',$articulo->contenido,['class' => 'form-control textarea','placeholder' => 'contenido']) !!}
                

                @ckeditor('contenido', ['height' => 500])
            
                
            </div>
            <div class="from-group has-feedback">

                {!! Form::label('tags', 'Tags') !!}
                
                    {!! Form::select('tags[]', $tags, $arreglo,['class' => 'form-control sel-tag','multiple', 'required']) !!}
                
                
            </div>
            <!--<div class="from-group">
                {!! Form::label('ima', 'Imagen') !!}

                {!! Form::file('ima') !!}
            </div>-->
            <div class="from-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Editar Articulo</button>
            </div>
            {!! Form::close() !!}
              
            </div>
          
@endsection
@section('js')
    <script >
        $('.sel-tag').chosen({
            placeholder_text_multiple:"Selecciona Tag",
            search_contains: true,
            no_results_text: " no se encontro: "
        });
        $('.sel-catecoria').chosen({
            placeholder_text_single: "selecciona Categoria"
        });

        $('.texto-de-area').trumbowyg();

    </script>
@endsection