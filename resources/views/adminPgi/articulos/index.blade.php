@extends('adminPgi.plantillas.main')
@section('titulo', 'Articulo')
@section('contenido')

 <table class="table table-striped">
 	
 	<thead>
	 	<th>ID</th>
	 	<th>Titulo</th>
	 	<th>Categoria</th>
	 	<th>Usuario</th>
	 	<th>Acciones</th>
 	</thead>
 	<tbody>
 		@foreach($articulos as $articulo)
			<tr>
				<td>
					{{$articulo -> id}}
				</td>
				<td> {{$articulo -> titulo}}</td>
				<td> {{$articulo -> categoria -> nombre}}</td>
				<td> {{$articulo -> user -> name}}</td>
				<td> <a href="{{ route('Articulo.destroy', $articulo->id) }}" onclick="return confirm('seguro que lo quiere eliminar')" class="btn  btn-danger">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
						<a href="{{ route('Articulo.edit', $articulo->id) }}" class="btn btn-warning">
							<span class="glyphicon glyphicon-pencil"></span>
						</a></td>
			</tr>
 		@endforeach
 	</tbody>
 	
 </table>
 {!! $articulos->render() !!}
	


@endsection