@extends('layouts.app')
@section('content')
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-lg hidden-md">Lorem</span>
			<span class="hidden-xs hidden-sm">E-tutorial</span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="index.html">Inicio</a></li>
				
			</ul>
		</nav>
		
		<!--======================================== Boton menu mobil ========================================-->
		
	</header>
	<!--======================================== contenido de la pagina ========================================-->
	<section class="full-reset" style="background-color: #fff; padding: 20px 0;">
		<div class="container">
			<div class="row">
				
				<section class="col-xs-12 col-sm-8 col-md-9 info-section-ins">
					<div class="confi" style="background-image: url(assets/img/8CA.jpg);" >
					
		<h2 class="a">{{$tutorial->name}}</h2><h3 class="b" aria-hidden="true">Foto de perfil</h3>
		<div role="button" class="U"  jsshadow="" jsname="hppyvb" aria-label="Cambiar la foto de perfil" aria-disabled="false" tabindex="0">
		<div class="V" jsname="ksKsZd">
			
		</div>
		<div class="Z">
			
		</div>
		<content class="C">
			<span class="R"><img class="tkmmwb uQNHvf" src="https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/s32-fbw=1/photo.jpg" height="32px" width="32px" aria-hidden="true" jsname="xJzy8c">Cambiar</span></content>
		</div>
		</div>
		<br></br>

		@foreach($posts as $post)
		<div class="confi">	<!--======================================== Este es el div que debe modificarse por el contenido del post al usuario tener al menos un post  ========================================-->
						
		
		<h2 class="a">{{$post->title}}</h2><h3 class="b" aria-hidden="true">{{$post->description}}</h3>
		<h4 class="c" aria-hidden="true">{{$post->user->name}}</h4>
		<div role="button" class="U"  jsshadow="" jsname="hppyvb" aria-label="Cambiar la foto de perfil" aria-disabled="false" tabindex="0">
		<div class="V" jsname="ksKsZd">
			
		</div>
		<div class="Z">
		
		</div>
		</div>
			</div>
			@endforeach
			<a href="{{route('post.create')}}" value="Compartir publicación" id="btnSendPublicación">Compartir publicación</a> <a value="Crear test" id="btnSendTest">Crear test</a>	
</section>
</section>	
@endsection