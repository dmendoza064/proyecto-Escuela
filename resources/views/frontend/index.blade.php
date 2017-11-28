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
@include('frontend.plantillas.mainfront')
  <!--cierra de seccion -->
  <!-- inicio de pie de pagina-->
 @include('frontend.plantillas.piedePagina')

 @section('script')
  @include('frontend.plantillas.scripts')
@show
  
</body>
</html>