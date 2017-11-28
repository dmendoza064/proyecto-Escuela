@extends('adminPgi.plantillas.main')
@section('titulo', 'Imagenes')
@section('contenido')

	<div class="row">
		@foreach($imagenes as $imagen)
			<div class="col-md-4">
				
				<div class="panel panel-default">
				  
				  <div class="panel-body">
				    <img src="\imagenes\articulos\{{$imagen->nombre}}" alt="100%x180" style="height: 180px;width: 100%;" class="img-responsive">
				  </div>
				  <div class="panel-footer">
				  	{{ $imagen->Articulos->titulo}}
				  </div>
				</div>
				

			</div>
		@endforeach
	</div>

	


@endsection