@extends('adminPgi.plantillas.main')

@section('titulo', 'Editar tags')

@section('contenido')

		<form action="{{ route('tags.update', $tag->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group has-feedback">
                        <label for="exampleInputName2">Nombre</label>
                        <input type="text" class="form-control"  name="nombre"  id="nombre" value="{{ $tag->nombre}} " /> 
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                     <div class="col-xs-4 col-xs-push-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">agregar</button>
                        </div><!-- /.col -->
                    </div>
                </form> 


@endsection