@extends('adminPgi.plantillas.main')
@section('titulo', 'Tags')
@section('contenido')
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Tags</th>
			<th>Accion</th>
		</thead>
		<tbody>

			@foreach($tag as $t)
				<tr>
					<td>{{ $t->id }}</td>
					<td>{{ $t->nombre }}</td>
					<td>
						<a href="{{ route('tags.destroy',$t->id) }}" onclick="return confirm('seguro que lo quiere eliminar')" class="btn  btn-danger">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
						<a href="{{ route('tags.edit',$t->id) }}" class="btn btn-warning">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>
					</td>
				</tr>
			@endforeach
			
		</tbody>
		
	</table>
{!! $tag->render() !!}

@endsection