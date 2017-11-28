@extends('adminPgi.plantillas.main')

@section('titulo', 'Listado de Usuarios')

@section('contenido')

	<a href="{{ url('admin/users/create')}}" class="btn btn-info">Registrar un usuario</a>
	<table class="table table-striped">
		<thead>
			<th>id</th>
			<th>nombre</th>
			<th>Correo</th>
			<th>tipo</th>
			<th>Accion</th>
		</thead>
		@foreach ($users as $user )
				<tr>
					<td>{{ $user->id}}</td>
					<td>{{ $user->name}}</td>
					<td>{{ $user->email}}</td>
					<td>
						@if($user->type == "admin")
							<span class="label label-danger">{{ $user->type}}</span>
						@else
							<span class="label label-primary">{{ $user->type}}</span>
						@endif
						</td>
					<td>
						
						<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('seguro que lo quiere eliminar')" class="btn  btn-danger">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
						<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
							<span class="glyphicon glyphicon-pencil"></span>
						</a></td>
				</tr>
		@endforeach
	</table>
	{!! $users->render() !!}

@endsection