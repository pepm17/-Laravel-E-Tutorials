@extends('layouts.app')
@section('content')
<!--======================================== Boton ir arriba ========================================-->
<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-lg hidden-md">Lorem</span>
			<span class="hidden-xs hidden-sm">Crear Post</span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<input type="checkbox" id="check">
		<label id="label-menu"for="check" class="icon-menu"><i class="fa fa-bars" aria-hidden="true"style="font-size:25px; "></i>
Menu</label>
	
		<!--======================================== Links de navegación ========================================-->
		<nav class="menu-config">
			<ul>
				<li>Inicio</li>
				<span class="highlight"></span><span class="bar"></span>
				<li>Configuración</li>
				

			</ul>
		</nav>
		
		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>
	<!--======================================== Contenido de la pagina ========================================-->
	
					<!--======================================== lO IDEAL SERÍA QUE AL PRESIONAR EL BOTON CON LA IMAGEN DEL AVION DE PAPEL, LA PAGINA SE REDIRECCIONE A LA TUTORIA(si es estudiante o tutor, y aparezca al menos el texto yo miro como colocar la imagen y el video) ========================================-->
		<form style="width: 800px; height: 600px " action="{{route('post.store')}}" method="POST">
		@csrf
			<input type="text" name="title" placeholder="Título">
  			<textarea name="description" rows="10" cols="50"></textarea>
			<br>
			<div class="icon-bar"> 
				<input type="file" name="myfile" id="imgload" style="display: none;"  />
				<a href="#" id="uploadimg"><i class="fa fa-image"></i></a> 
				<input type="file" name="myfile" id="videoload" accept="video/*" style="display: none;"/>
				<a href="#" id="uploadvideo"><i class="fa fa-video-camera"></i></a>  
			</div>
			<input type="hidden" name="tutorial_id" value="{{$id}}"
			<content class="C">
						<span class="R" style="position: relative;left: 500px;top:-530px; visibility: hidden;"><img class="tkmmwb uQNHvf" id="imgshow" src="" height="200px" width="200px"  aria-hidden="true" jsname="xJzy8c" > <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times-circle"style="font-size:36px;visibility: hidden;"></i></a> </span></content>
						<content class="C"><span class="R"style="position: relative;left: 500px;top:-530px;visibility: hidden;"><video class="tkmmwb uQNHvf" id="videoshow"    width="200px" aria-hidden="true" jsname="xJzy8c" controls >
							<source src="#" type="video/*">
						</video></span></content>
			<input type="submit" value="Enviar" id="btnSendPost">
		</form>
	@endsection