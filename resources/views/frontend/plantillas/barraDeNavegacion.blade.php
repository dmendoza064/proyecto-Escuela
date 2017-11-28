<section>
	<nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion1">
					<span class="sr-only"> desplegar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{ route('frontend.index') }}" class="navbar-brand">PGI</a>
			</div>
			<!-- inicia menu -->
			<div class="collapse navbar-collapse" id="navegacion1">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('frontend.index') }}">Inicio</a></li>
					<li>
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">Servicio <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="proteccion.html">Protecion</a></li>
							<li><a href="regular.html">Regular</a></li>
							<li><a href="#">Protecion consumidor</a></li>
							<li><a href="publicidad.html">publicidad</a></li>
							<li><a href="#">estadisticas</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">simuladores <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Bancarios</a></li>
							<li><a href="#">Fovisste</a></li>
							<li><a href="#">Infonavit</a></li>
							
						</ul>

					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">asesorias <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Juridicas</a></li>
							<li><a href="#">tramite</a></li>
							<li><a href="#">credito</a></li>
							
						</ul>
					</li>
					<li><a href="#">Curso Certidicados</a></li>
				</ul>
				<form action="" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</form>
				
			</div>
		</div>
	</nav>
</section>