@extends('adminPgi.articulo')
@section('titulo', 'Imagenes')
@section('contenido')

	<section class="main container">
 		<div class="row">
 			<section class="post col-md-9">
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 			</section>
 			<section>
				 <aside class="col-md-3 hidden-xs hidden-sm">
				 		@include('frontend.plantillas.aside')

						<h4>publiidad</h4>
				 		<a href="#" class="list-group-item">
				 			<h4 class="list-group-item-heading"> inicia hacia tu seguridad</h4>
				 			<p class="list-group-item-heading"> Cuando una actividad que es común a todos, que no cesa y de la cual depende nuestro bienestar y seguridad; ella es “el mantenimiento y conservación”</p>
				 		</a> 			
		 		</aside>
 	        </section>
 		</div>
 	</section>

	


@endsection