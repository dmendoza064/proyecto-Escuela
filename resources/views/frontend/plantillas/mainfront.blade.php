
<section class="main container">
 		<div class="row">
 			<section class="post col-md-9">
 				<div class="migasPasm">
 					<ol class="breadcrumb">
 						<li><a href="#">Inicio</a></li>
 						<li><a href="#">Servicio</a> </li>
 						<li class="active">proteccion</li>
 					</ol>
 				</div>
 				@foreach($articulo as $articulos)
					<!-- 
					<article class="post clearfix">
		 				<a href="informe-infonavit.html" class="thumb pull-left">
						@foreach($articulos->imagenes as $imagen)
		 					<img class="img-thumbnail" src="\imagenes\articulos\{{$imagen->nombre}}" >
		 				@endforeach
		 				</a>
		 				<h2 class="post-title">
		 					<a href="informe-infonavit.html">{{$articulos->titulo}}
		 					 </a>
		 				</h2>
		 				<p><span class="post-fecha"> {{ $articulos->created_at->diffForHumans() }} </span></p>
		 				<p><span class="glyphicon glyphicon-list-alt"> Categoria: {{$articulos->categoria->nombre}}
		 				{{$articulos->user->name}}
		 				</span></p>
		 					<p class="post-contenido text-justify">
		 						El Instituto del Fondo Nacional de la Vivienda para los Trabajadores, es una institución mexicana tripartita; es decir que se compone de tres partes, en este caso: gobierno, empresas y trabajadores.
		 					</p>
		 					<div class="contenedor-botones">
		 						<a href="informe-infonavit.html" class="btn btn-primary"> leer más</a>
		 						
		 					</div>
		 					<div class="contenedor-botones">
		 						
		 					</div>
 				    </article><!---->
 				   <!--<div class="row"> -->
 				   
							
								<div class="col-md-4">
									
									<div class="panel panel-default">
									  
									  <div class="panel-body">
									  	<a href="{{ route('frontend.vista.articulo',$articulos->titulo) }}">

									   
									    @foreach($articulos->imagenes as $imagen)
						 					<img class="img-thumbnail" src="\imagenes\articulos\{{$imagen->nombre}}"  alt="100%x180" style="height: 180px;width: 100%;">
						 				@endforeach
						 			</a>
						 				<h2 class="post-title">
						 					<a href="{{ route('frontend.vista.articulo',$articulos->titulo) }}">{{$articulos->titulo}}</a>
						 				</h2>
						 				<hr>
						 				<a href="{{route('frontend.busqueda.CategoriaBusqueda', $articulos->categoria->nombre) }}">
						 					<span class="glyphicon glyphicon-list-alt">  Categoria: {{$articulos->categoria->nombre}}
						 				</a>
									  </div>
									  <div class="panel-footer">
									  	<i class="fa fa-clock-o"></i>{{ $articulos->created_at->diffForHumans() }}
									  </div>
									</div>
									

								</div>
							
						<!--</div>-->

 				@endforeach
 				
 				<nav>
 					<div class="center-block">
 						{!! $articulo->render() !!}
 					</div>
 				</nav>
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
 	<!--cierra de seccion -->