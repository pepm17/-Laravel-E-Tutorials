@extends('layouts.app')
@section('content')
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-lg hidden-md">Lorem</span>
			<span class="hidden-xs hidden-sm">E-tutorials</span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="{{route('/')}}">Inicio</a></li>
				
			</ul>
		</nav>
		
		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>
	<!--======================================== Contenido de la pagina ========================================-->
	 <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE USUARIO</h2>
            </section>
         <!---   <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
            </section>--->
        </section>

  <div class="tab-content">
    <div id="user_info" class="tab-pane fade in active">
	<form action="{{route('register')}}" class="form_contact" method="POST">
	@csrf
       <label for="names">Nombres *</label>
        <input type="text" id="name" name="name">
        <label for="phone">Identificación*</label>
        <input type="text" id="phone" name="identification">
		<select id="inputState" class="form-control" name="isTutor">
			<option selected></option>
			<option value="1">Tutor</option>
			<option value="0">Estudiante</option>
		</select>
        <label for="email">Correo electronico *</label>
		<input type="text" id="email" name="email">
		<label for="text">Password *</label>
		<input type="password" id="password" name="password" name="password">
		<label for="text">Confirmed password *</label>
		<input type="password" id="password" name="password_confirmation">
		<input type="submit" value="Registrarse" id="btnSend"> 
		</form>
	</div>
	</div>
    </section>
				<!--======================================== Navegacion fija lateral derecha ========================================-->
				
			
	<!--======================================== Pie de pagina ========================================-->
	
<!--======================================== API de GOOGLE Maps ========================================-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
@endsection