@extends('adminPgi.plantillas.main')

@section('titulo', 'Crear categoria')
@section('contenido')

	
   <!-- {!! Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!}
        
        <div class="from-group has-feedback">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control' ,'placeholder' => 'Nombre de categoria','required']) !!}
        </div>

        <div class="from-group has-feedback">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

        </div>

    {!! Form::close() !!} -->
                <form action="{{ route('categorias.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <label for="exampleInputName2">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre de categoria" name="nombre"  id="nombre" autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                   
                        <!-- /.col -->
                        <div class="col-xs-5 col-xs-push-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">agregar</button>
                        </div><!-- /.col -->
                    </div>
                </form> 

              
@endsection