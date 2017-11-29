<!DOCTYPE html>
<html lang="es">
<!--head -->
@section('headfront')
 @include('frontend.plantillas.headfront')
@show
<body>
<header class="jumbotron ">
  <div class=" row  ">
    
      <div class="col-md-4 center-block quitarFloat ">
       <div class="portada1  ">
        <img src="\imagenes\fotos\BUENO 1 NEGRO.png " class=" estiloImagen text-center" alt="Responsive image"  >
       </div>
      <!-- <div class=" ">
        
          <h1 class="grande">PLATAFORMA DE GARANTIA INMOBILIARIA</h1>
          <h2 class=" ">Lo mas importante para nostos eres tú... ¡No estas solo!</h2>
       </div> -->
       </div>
    
    </div>

</header>
<!-- slider-->
@include('frontend.plantillas.slide')
<!-- fin del slider -->
<!-- barra de navegacion-->
@include('frontend.plantillas.barraDeNavegacion')
<!-- se cierra barra de navegacion -->


  <!-- main -->
  <section>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-9">
  				<article class="post clearfix">
  					@foreach($articulo as $articulos)
		 				<h2 class="titlt-front left">{{ $articulos->titulo }} </h2>
		 				
		 					<div class="post-contenido text-justify">{!! $articulos->contenido !!}</div>
		 			@endforeach
		 			<h3>Comentarios</h3>
		 			<div id="disqus_thread"></div>
						<script>

						/**
						*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://pgi-1.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
  				</article>
  			</div>
  			<div class="col-md-3">
  				@include('frontend.plantillas.aside')

						<h4>publiidad</h4>
				 		<a href="#" class="list-group-item">
				 			<h4 class="list-group-item-heading"> inicia hacia tu seguridad</h4>
				 			<p class="list-group-item-heading"> Cuando una actividad que es común a todos, que no cesa y de la cual depende nuestro bienestar y seguridad; ella es “el mantenimiento y conservación”</p>
				 		</a>
  			</div>
  		</div>
  	</div>
  </section>
<!--<section class="main container">
 		<div class="row">
 			<section class="post col-md-9">
 				
 			</section>
 			<section>
				 <aside class="col-md-3 hidden-xs hidden-sm">
				 		 			
		 		</aside>
 	        </section>
 		</div>
 	</section>-->
@yield('contenido')
  <!--cierra de seccion -->
  <!-- inicio de pie de pagina-->
 @include('frontend.plantillas.piedePagina')

 @section('script')
  @include('frontend.plantillas.scripts')
@show
  
</body>
</html>