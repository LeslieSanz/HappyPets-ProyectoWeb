


  
//-------------------------------CODIGO PARA CARRUSEL DE CARTAS------------------

var swiper = new Swiper('.swiper-container', {
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev'
	},
	slidesPerView: 'auto',
	spaceBetween: 10,
	// init: false,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},

  
	breakpoints: {
	  620: {
		slidesPerView: 1,
		spaceBetween: 20,
	  },
	  680: {
		slidesPerView: 2,
		spaceBetween: 30,
	  },
	  920: {
		slidesPerView: 3,
		spaceBetween: 40,
	  },
	  1240: {
		slidesPerView: 4,
		spaceBetween: 50,
	  },
	} 
    });


//DIRIGIR BOTON DEL BANNER A SECCION DE FORMULARIO

	document.addEventListener("DOMContentLoaded", function () {
		document.getElementById("BotonBanner").addEventListener("click", function () {
			var seccion = document.getElementById("form");
			seccion.scrollIntoView({ behavior: "smooth"});
		});
	});
	
	
//--------------------------VENTANA EMERGENTE----------------------

	$(document).ready( function(){
		$("#boton1").on("click", function(){
			$("#popup").fadeIn("slow") ;
		});
		$("#boton2").on("click", function(){
			$("#popup").fadeIn("slow") ;
		});

		$("#close").on("click", function(){
			$("#popup").fadeOut("slow") ;
		});
	});





	// Asigna el evento de apertura a los botones 1 al 9
    for (let i = 1; i <= 9; i++) {
        $(`#boton${i}`).on("click", function () {
            abrirPopup(i);
        });
    }
	function abrirPopup(imagenId) {
        // Oculta todas las imágenes
        $(".content-pop div[id^='imagen']").hide();
        // Muestra la imagen correspondiente
        $(`#imagen${imagenId}`).show();
        $("#popup").fadeIn("slow");
    }


	
	


	$(document).ready(function () {
		
		$("#close").on("click", function (event) {
			event.preventDefault();
			var targetSectionId = $(this).data("target");
			var targetSection = $(targetSectionId)[0];
	
			if (targetSection) {
				targetSection.scrollIntoView({
					behavior: "smooth",
					block: "start"
				});
			}
	
			$("#popup").fadeOut("slow");
			$(".overlay").fadeOut("slow");
		});
	});
	

// Obtener el formulario por su id
const formulario = document.getElementById('form');

// Agregar un evento de escucha para el envío del formulario
formulario.addEventListener('submit', function(event) {
  event.preventDefault(); // Evitar el envío predeterminado del formulario

  // Obtener la sección objetivo por su id
  const seccionDestino = document.getElementById('form');

  // Desplazarse hacia la sección objetivo
  seccionDestino.scrollIntoView({ behavior: 'smooth' });
});


//mostrara la parte de otros, en el formulario
function mostrarCampoTexto() {
	var select = document.getElementById("animal");
	var otroTexto = document.getElementById("otro-texto");

	if (select.value === "otro") {
	  otroTexto.style.display = "block"; // Mostrar el campo de entrada de texto
	} else {
	  otroTexto.style.display = "none"; // Ocultar el campo de entrada de texto
	}
  }
