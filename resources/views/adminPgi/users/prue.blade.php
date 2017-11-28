@extends('adminPgi.plantillas.main')

@section('contenido')
			
			{!! Form::open(['url' => 'admin/users', 'method' => 'POST']) !!}

				<div class="form-group has-feedback">
					{!! Form::label('name','nombre') !!}
					
				</div>
				
                        <div class="form-group has-feedback">
                        {!! Form::select('type',[''=>'selecciona','member'=>'Miembro','admin'=>'administrador']) !!}
                        
                    </div>
                
                       
                {!! Form::close() !!}
			
@endsection