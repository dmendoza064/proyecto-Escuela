@extends('adminPgi.plantillas.main')

@section('titulo', 'Articulos')

@section('contenido')
		
     
            <!-- /.box-header -->
            <div class="box-body pad">
                {!! Form::open(['route' =>'Articulo.store', 'method' => 'POST', 'files' => true]) !!}

            <div class="from-group">
                {!! Form::label('title', 'titulo') !!}

                {!! Form::text('titulo',null,['class' =>  'form-control','placeholder' => 'titulo']) !!}
            </div>
            <div class="from-group has-feedback">
                {!! Form::label('categorias_id', 'Categoria') !!}
                
                    {!! Form::select('categoria_id', $categoria, null,['class' => 'form-control sel-catecoria','placeholder' => 'Selecciona']) !!}

                
                
            </div>
             <!-- <div class="from-group">
                <tex
                tarea id="editor1" name="editor1" rows="10" cols="80" >
                                 Escribe           
                    </textarea>
            </div>-->
            <div class="from-group">
                {!! Form::label('contenido', 'contenido del articulo') !!}

                {!! Form::textarea('contenido',null,['class' => 'form-control textarea','placeholder' => 'contenido']) !!}
                

                @ckeditor('contenido', ['height' => 500])
            
                
            </div>
            <div class="from-group has-feedback">

                {!! Form::label('tags', 'Tags') !!}
                
                    {!! Form::select('tags[]', $tags, null,['class' => 'form-control sel-tag','multiple']) !!}
                
                
            </div>
            <div class="from-group">
                {!! Form::label('ima', 'Imagen') !!}

                {!! Form::file('ima') !!}
            </div>
            <div class="from-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat">agregar</button>
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