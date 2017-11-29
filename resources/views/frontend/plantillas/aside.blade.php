

	<div class="panel panel-info">
	  <div class="panel-heading">
	    <h3 class="panel-title">Categoria</h3>
	  </div>
	  <div class="panel-body">
	  	@foreach($categorias as $categoria)
	    <a href="{{ route('frontend.busqueda.CategoriaBusqueda', $categoria->nombre) }}" class="list-group-item ">{{$categoria->nombre}}<span class="badge"><!----></span></a> 
	    @endforeach
				 			
	  </div>
	</div>

<!--
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">Tags</h3>
	  </div>
	  <div class="panel-body">
	    
				 			@foreach($tags as $tag)
						    <a href="{{ route('frontend.busqueda.TagBusqueda', $tag->nombre) }}" class="list-group-item ">{{$tag->nombre}}<span class="badge"></span></a> 
						    @endforeach
	  </div>
	</div>
-->