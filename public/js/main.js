$(document).ready(function(){
  /***** Mostrar/Ocultar menu mobil *****/
  $(".show-close-menu-m").click(function(){
    var menu=$(".navigation");
    if(menu.css("opacity")=="0"){ 
      menu.addClass("show-navigations");
      $(this).css({ "color":"#FFCA28" });
    }else{ 
      menu.removeClass("show-navigations"); 
      $(this).css({ "color":"#fff" });
    }
  });
	
  /***** Abrir link en una nueva ventana *****/
  $(".open-link-newTab").click(function(e){
 		e.preventDefault();
 		var HrefLink=$(this).attr("href");
 		window.open(HrefLink,'_blank');
  });
  /***** Moverse el la pagina institucion con Scroll *****/
	$('.scroll-navigation-ins ul li').click(function(){
		var seccion=$(this).attr('data-href');
	$('body,html').animate({
	  scrollTop:$(seccion).offset().top-70
	},1000);
	return false; 
	});
  /***** boton ir arriba *****/
  $('.btn-up').click(function(){
    $('body,html').animate({scrollTop:'0px'}, 300);
  });
  /*****Mostrar y ocultar boton ir arriba *****/
  $(window).scroll(function(){
    if($(this).scrollTop() >= 500){
      $('.btn-up').fadeIn();
    }else{
      $('.btn-up').fadeOut();
    }
  });
	/***** Mapa de GoogleMaps del Instituto *****/
	var map;
	function initialize() {
	  var myLatlng = new google.maps.LatLng(13.869727, -88.628943);
	  var mapOptions = {
	    zoom: 16,
	    center: new google.maps.LatLng(13.869727, -88.628943),
	    mapTypeId: google.maps.MapTypeId.HYBRID
	  };
	  map = new google.maps.Map(document.getElementById('mapa-ins'),
	    mapOptions);
	  var marker = new google.maps.Marker({
	    position: myLatlng,
	    map: map,
	    title: 'Instituto Nacional de Sensuntepeque'
	  });
	}

	/***** Mostrar/ocultar mega-menu *****/
  $('.btm-mega-menu').click(function(e){
    e.preventDefault();
 		var megamenu=$(".mega-menu");
 		if(megamenu.css("opacity")=="0"){ 
 			megamenu.addClass("show-mega-menu"); 
 			$('.btm-mega-menu').css({ "color":"#FFA726" });
 		}else{ 
 			megamenu.removeClass("show-mega-menu");
 			$('.btm-mega-menu').css({ "color":"#fff" });
 		}
  });  
	$('.btn-abrir-popup').click(function(){
		
		
		var overlay=$(".overlay"),
			popup=$(".popup");
			
			overlay.addClass('active');
			popup.addClass('active');
			
		
	});
	$('.btn-cerrar-popup').click(function(e){
		
		e.preventDefault();
		var overlay=$(".overlay"),
			popup=$(".popup");
			
			overlay.removeClass('active');
			popup.removeClass('active');
			
		
	});
	$('.btn-crear').click(function(e){
		
		e.preventDefault();
		var overlay=$("#crear_tutoria"),
			popup=$("#crear-tutoria");
			
			overlay.addClass('active');
			popup.addClass('active');
			
		
	});
  $('.onkcGd').click(function(e){
    
    e.preventDefault();
    var overlay=$("#editar_perfil"),
      popup=$("#editar-perfil");
      
      overlay.addClass('active');
      popup.addClass('active');
      
    
  });
  $('.btn-unirse').click(function(e){
    
    e.preventDefault();
    var overlay=$("#unirse_tutoria"),
      popup=$("#unirse-tutoria");
      
      overlay.addClass('active');
      popup.addClass('active');
      
    
  });
	
$('input[type="submit"]').mousedown(function(){
  $(this).css('background', '#2ecc71');
});
$('input[type="submit"]').mouseup(function(){
  $(this).css('background', '#1abc9c');
});

$('#loginform').click(function(){
  $('.login').fadeToggle('slow');
  $(this).toggleClass('green');
});



$(document).mouseup(function (e)
{
    var container = $(".login");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
        $('#loginform').removeClass('green');
    }
});
$('.menu-tutoria input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

        $('input[type="file"]').change(function(e){

            var fileName = e.target.files[0].name;

            alert('The file "' + fileName +  '" has been selected.');

        });
         $("#uploadimg").on('click', function(e){
        e.preventDefault();
        $("#imgload:hidden").trigger('click');
    });
          $("#uploadvideo").on('click', function(e){
        e.preventDefault();
        $("#videoload:hidden").trigger('click');
    });
$("#imgload").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imgshow').attr('src', e.target.result);
                $('#imgshow').css("visibility","visible");

                $('#btn-cerrar-popup').css("visibility","visible");
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
$("#videoload").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#videoshow').attr('src', e.target.result);
                $('#videoshow').css("visibility","visible");
            }
            reader.readAsDataURL(this.files[0]);
        }
    });


});
