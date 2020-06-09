@extends('layouts.app')
@section('content')
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-lg hidden-md">Lorem</span>
			<span class="hidden-xs hidden-sm">E-TUTORIALS</span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="{{route('register')}}">Register</a></li>
			</ul>
		</nav>
		<!--======================================== Mega menu ========================================-->
	
		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<div class="container">
			<div class="row">
			<div class="col-xs-12 col-sm-6 ">
			
				<h3>E-tutorials</h3>
				<h4>Inicia sesion con tu cuenta</h4>
				<form action="{{route('login')}}" method="POST">
				@csrf
					<div class="contenedor-inputs">
						<input type="email" placeholder="Email" name="email">
						<input type="password" placeholder="Contraseña" name="password">
					</div>
					<input type="submit" class="btn-submit" value="Suscribirse">
					 <p class="forgot"><a href="#">Forgot Password?</a></p>
				</form>
			</div>
			<div class="col-xs-12 col-sm-6" >
					<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times-circle"style="font-size:36px;"></i>&nbsp;
</a>
			<h3>Bievenido a<br>E-tutorials!</h3>
			<figure class="Logo-Ins-Index">
				<img src="assets/img/Tutorias.png" alt="Logo" class="img-responsive">
			</figure>
		</div>
		</div>
		</div>
	</div>
</div>
		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>
	<!--======================================== Logo & Lema ========================================-->
	
	<section class="full-reset font-cover" style="background-image: url(assets/img/font-index.jpg);">
		<div class="full-reset boton " style="height: 100%; background-color: rgba(255,255,255,.6); padding: 180px 0;">
			<div class="row">
			<h1 class="text-center titles">Gestiona la enseñanza y el aprendizaje con E-tutorials.

</h1>
<div class="col-sm-4">
			<p class="lead">E-tutorials ayuda a los estudiantes y maestros a organizar tareas, fomentar la colaboración y fomentar una mejor comunicación
			</p>
		</div>
			
			
		</div>
		<button id="btn-abrir-popup" class="btn-abrir-popup">IR AL AULA</button>
		</div>
	</section>
	<div class="divider-general"></div>
	
	
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