@extends('adminPgi.plantillas.main')
@section('titulo', 'categoria')
@section('contenido')
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Categoria</th>
			<th>Accion</th>
		</thead>
		<tbody>

			@foreach($categorias as $categoria)
				<tr>
					<td>{{ $categoria->id }}</td>
					<td>{{ $categoria->nombre }}</td>
					<td>
						<a href="{{ route('categorias.destroy', $categoria->id) }}" onclick="return confirm('seguro que lo quiere eliminar')" class="btn  btn-danger">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
						<a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>
					</td>
				</tr>
			@endforeach
			
		</tbody>
		
	</table>
{!! $categorias->render() !!}

@endsection