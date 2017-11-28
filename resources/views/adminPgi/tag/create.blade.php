@extends('adminPgi.plantillas.main')

@section('titulo', 'Crear Tags')

@section('contenido')
		<form action="{{ route('tags.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group has-feedback">
                        <label for="exampleInputName2">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre de Tag" name="nombre"  id="nombre" autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                   <!-- /.col -->
                        <div class="col-xs-5 col-xs-push-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">agregar</button>
                        </div><!-- /.col -->
                    </div>
                </form> 
@endsection