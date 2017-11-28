@extends('adminPgi.plantillas.main')

@section('titulo', 'Editar Usuarios')

@section('contenido')
	
    
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group has-feedback">
                        <label for="exampleInputName2">Nombre</label>
                        <input type="text" class="form-control"  name="name"  id="name" value="{{ $user->name}} " /> 
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                   

                    <div class="form-group has-feedback">
                    <label for="exampleInputName2">Gmail</label>
                        <input type="email" class="form-control"  name="email" id="email" value="{{ $user->email }}" /> 
                        <span class="glyphicon glyphicon-envelope form-control-feedback"> </span>
                    </div>
                    
                    <div class="form-group has-feedback">
                        <select   class="form-control"  name="type">
  								<option selected="" value="">selecciona opcion</option>
  								<option value="admin">Administrador</option>
  								<option value="mamber">miembro</option>
  								
						</select>
                    </div> 
                    
                    
                    <div class="row">
                        <div class="col-xs-1">
                            <label>
                                <div class="checkbox_register icheck">
                                    <label>
                                        <input type="checkbox" name="terms">
                                    </label>
                                </div>
                            </label>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Agregar</button>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4 col-xs-push-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">agregar</button>
                        </div><!-- /.col -->
                    </div>
                </form> 
              <!--  {!! Form::open(['route' => ['users.update',$user->id], 'method' => 'PUT']) !!}

                <div class="form-group has-feedback">
                    {!! Form::label('name','nombre') !!}
                    {!! Form::text('name', $user->name,['class'=>'form-control','placeholder'=>'nombre','required']) !!}
                </div>
                <div class="form-group has-feedback">
                    {!! Form::label('name','nombre') !!}
                    {!! Form::text('name', $user->email,['class'=>'form-control','placeholder'=>'nombre','required']) !!}
                </div>
                
                        <div class="form-group has-feedback">
                        {!! Form::select('type',[''=>'selecciona','member'=>'Miembro','admin'=>'administrador']) !!}
                        
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::submit('Registrar',['class'=> 'btn btn-primary']) !!}
                    </div>
                
                       
                {!! Form::close() !!}-->

                

              
@endsection