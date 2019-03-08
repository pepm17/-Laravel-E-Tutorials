@extends('layouts.app')
@section('content')
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-lg hidden-md">Lorem</span>
			<span class="hidden-xs hidden-sm">{{auth()->user()->name}}</span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="{{Auth::logout()}}">Inicio</a></li>
				<li><a href="institucion.html">Institución</a></li>
				<li><a href="secretaria.html">Secretaría</a></li>
				<li><a href="bachilleratos.html">Bachilleratos</a></li>
				<li><a href="galeria.html">Galería</a></li>
				<li><a href="#" class="btm-mega-menu">Más &nbsp;<i class="fa fa-caret-down"></i></a></li>
			</ul>
		</nav>
		<!--======================================== Mega menu ========================================-->
		<div class="full-reset mega-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<span class="full-reset titles">Recursos educativos</span>
						<ul class="list-unstyled full-reset">
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-search"></i>&nbsp; Buscar en GOOGLE</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-graduation-cap"></i>&nbsp; Plataforma (MOODLE)</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="full-reset titles">Enlaces importantes</span>
						<ul class="list-unstyled full-reset">
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-university"></i>&nbsp; MINED</a></li>
							<li><a href="#!"><i class="fa fa-paw"></i>&nbsp; ARA-MACAO</a></li>
							<li><a href="#!"><i class="fa fa-globe"></i>&nbsp; JOVENES A.T.T</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-flask"></i>&nbsp; UNIVERSIDADES</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-gavel"></i>&nbsp; GOBIERNO</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="full-reset titles">Archivos</span>
						<ul class="list-unstyled full-reset">
							<li><a href="#!"><i class="fa fa-star-o"></i>&nbsp; Promociones INS</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-file-text-o"></i>&nbsp; Const. de conducta</a></li>
							<li><a href="#!"><i class="fa fa-download"></i>&nbsp; Descargas</a></li>
						</ul>
					</div>
				</div>
			</div>
			<i class="fa fa-times-circle btm-mega-menu close-mega-menu fa-2x"></i>
		</div>

		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>
	<!--======================================== Contenido de la pagina ========================================-->
	<section class="full-reset section-gallery-ins">
	
		<!--======================================== Eventos del 2013 ========================================-->
		<article class="container">
			<h2 class="text-center"><i class="fa fa-calendar-o"></i> &nbsp; Tutoriales</h2>
			<div class="row">
				<!--======================================== Evento 1========================================-->
				@foreach($tutorials as $tutorial)
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="tile-gallery">
								<img src="assets/gallery/default.png" alt="Default">
								<p class="text-center"><strong>{{$tutorial->name}}</strong></p>
								<span class="text-center"><strong><small>{{$tutorial->tutor->name}}</small></strong></span>
								<div class="divider-general"></div>
								<a href="#!">
									<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
								</a>
							</div>
						</div>
				@endforeach
			</div>
		</article>
		<div class="divider-general"></div>
		
		<!--======================================== Fotos de la institucion ========================================-->
		<article class="container">
			<h2 class="text-center"><i class="fa fa-picture-o"></i> &nbsp; Fotos Instalaciones</h2>
			<div class="row">
				<!--======================================== Evento 1========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 2 ========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 3 ========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
			</div>
		</article>
	</section>
	<!--======================================== Pie de pagina ========================================-->
	<footer class="full-reset footer">
		<div class="full-reset" style="padding: 15px 0;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Visitenos en</h4>
						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Contactenos</h4>
						<p class="text-center">Tele-Fax: +(000)0000-0000 <br>Correo Electrónico: correo@hotmail.com</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles subtitles-footer">Siguenos en</h4>
						<ul class="list-unstyled links-footer">
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-facebook"></i> &nbsp; Facebook</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-twitter"></i> &nbsp; Twitter</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-google-plus"></i> &nbsp; Google+</a></li>
						</ul>
					</div>
					<div class="col-xs-12">
						<div class="full-reset footer-copyright"><i class="fa fa-copyright"></i> 2016 Carlos Alfaro</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
@endsection