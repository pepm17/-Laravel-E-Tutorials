@extends('layouts.app')
@section('content')
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div id="regbar">
    <div id="navthing">
        <a href="#" id="loginform" style="color:black;">Añadir tutoria<i class="fa fa-plus-circle" aria-hidden="true" style="font-size:36px; "></i>
</a> 
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
           	
           <ul class="full-reset list-unstyled">
				<li><a href="#" class="btn-unirse">Unirse a tutoria</a></li>
		
			</ul>
				</fieldset>
        </div>
      </div>
    </div>
    </div>
  </div>
		<input type="checkbox" id="check">
		<label id="label-menu"for="check" class="icon-menu"><i class="fa fa-bars" aria-hidden="true"style="font-size:25px; "></i>
Menu</label>
	
		<!--======================================== Links de navegación ========================================-->
		<nav class="menu-config">
			<ul>
				<li href="">Cerrar Sesion</li>
				<span class="highlight"></span><span class="bar"></span>
				<li>Configuración</li>
				

			</ul>
		</nav>
		<div class="overlay" id="crear_tutoria">
			<div class="popup" id="crear-tutoria">
				<div class="container">
			<div class="row">
		
			
				
				<h4>Crear clase</h4>
				<form class="menu-tutoria">
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Nombre de la clase(obligatorio)</label>
  </div>
  <div class="group">
    <input type="email"><span class="highlight"></span><span class="bar"></span>
    <label>Asunto</label>
  </div>
  <button type="button" class="button buttonBlue">Crear
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times-circle"style="font-size:36px;"></i></a>
			
			
		</div>
		</div>
	</div>
</div>
<div class="overlay" id="unirse_tutoria">
			<div class="popup" id="unirse-tutoria">
				<div class="container">
			<div class="row">
		
			
				
				<h4>Unirse a la clase</h4>
				<h5>pídele a tu profesor el código de la tutoría</h5>
				<form class="menu-tutoria">
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Codigo de la tutoría</label>
  </div>
  
  <button type="button" class="button buttonBlue">Unirse
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times-circle"style="font-size:36px;"></i></a>
			
			
		</div>
		</div>
	</div>
</div>
		<!--========================================SI ES ESTUDIANTE SOLO PUEDE UNIRSE A UNA TUTORIA CON UN CODIGO QUE GENERE ALEATORIAMENTE EL PROGRAMA ========================================-->
		
		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>
	<!--======================================== Contenido de la pagina ========================================-->
	<section class="full-reset section-gallery-ins">
		<!--======================================== Eventos del 2013 ========================================-->
		<article class="container">
			<h2 class="text-center"><i class="fa fa-calendar-o"></i> &nbsp; Eventos Año 2013</h2>
			<div class="row">
			<!--======================================== Aquí sería con lo del foreach que por cada tutoría se agregue y que en el tag a que dice ver fotos, que al presionar ahí lo envie a su respectiva tutoria dependiendo si es estudiante o tutor========================================-->
			@foreach($tutorials as $tutorial)
			
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="tile-gallery">
								<img src="/assets/gallery/default.png" alt="Default">
								<p class="text-center"><strong>{{$tutorial->name}}</strong></p>
								<span class="text-center"><strong><small>{{$tutorial->tutor->name}}</small></strong></span>
								<div class="divider-general"></div>
								<a href="{{route('tutorial.show', [$tutorial->id])}}">
									<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
								</a>
							</div>
						</div>
					
				@endforeach
		
			</div>
		</article>
		<div class="divider-general"></div>
		@endsection