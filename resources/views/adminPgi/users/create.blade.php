@extends('adminPgi.plantillas.main')

@section('titulo', 'Crear Usuarios')

@section('contenido')
	
    
                <form action="{{ route('users.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group has-feedback">
                        <label for="exampleInputName2">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" name="name"  id="name" autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                   

                    <div class="form-group has-feedback">
                     <label for="exampleInputName2">Gmail</label>
                        <input type="email" class="form-control" placeholder="ejemplo@gmail.com" name="email" id="email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <label for="exampleInputName2">contraseña</label>
                        <input type="password" class="form-control" placeholder="************" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    

                     <div class="form-group has-feedback">
                        <select   class="form-control"   name="type" id="type">
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

                

              
@endsection