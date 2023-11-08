


  
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

	$(document).ready(function () {
		// Función para centrar verticalmente las flechas de navegación
		function centerSwiperNavigation() {
			var sectionAnimales = $(".section-animales");
			var prevButton = $(".swiper-button-prev");
			var nextButton = $(".swiper-button-next");
	
			// Calcula la posición vertical central de la sección
			var sectionTop = sectionAnimales.offset().top;
			var sectionHeight = sectionAnimales.height();
			var centerY = sectionTop + sectionHeight / 2;
	
			// Establece la posición vertical de las flechas en el centro
			prevButton.css("top", centerY - prevButton.height() / 2);
			nextButton.css("top", centerY - nextButton.height() / 2);
		}
	
		// Llama a la función cuando se carga la página y cuando cambia el tamaño de la ventana
		centerSwiperNavigation();
		$(window).on("resize", centerSwiperNavigation);
	});
	
	
	
	
	
	
//--------------------------VENTANA EMERGENTE----------------------

$(document).ready(function () {
	

    $(document).on("click", ".animal-button", function () {

		// Obtén el valor del atributo "data-foto" del botón en el que se hizo clic
		var foto = $(this).data("foto");
		// La variable "foto" almacena el valor del atributo "data-foto" del botón en el que se hizo clic.

		console.log(foto);
	
		$.ajax({
            url: "../controlador/reporteControlador.php",
            type: "POST",
            data: { foto: foto },
            dataType: "json", // Esperamos una respuesta JSON
            success: function (response) {
                // Asigna los datos a los elementos del modal
                $("#imagen").attr("src", '/HappyPets-ProyectoWeb/uploads/' + response.foto);
                
				//asigna el distrito
				$("#distrito").text( "Dirección encontrado: " + response.direccion + ", " + response.distrito);
				$("#referencia").text( "Referencia de la dirección: " + response.referencia);
				$("#info_adicional").html("Información del animal encontrado:<br>" + response.info_adicional);

                // Abre el modal
                $("#popup").modal("show");
            },
            error: function () {
                console.error("Error en la solicitud AJAX.");
            }
        });
		
    });

    $("#close").on("click", function () {

        $("#popup").fadeOut("slow");
    });

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


//borra el texto de los input en el formulario
function borrarTexto(input) {
	if (input.value === input.getAttribute("value")) {
	  input.value = ""; // Borra el texto si es igual al valor original
	}
  }
  
  function restaurarTexto(input) {
	if (input.value === "") {
	  input.value = input.getAttribute("value"); // Restaura el valor original si el campo está vacío
	}
  }


  function cambiarColor(input) {
	if (input.value !== "") {
	  input.style.color = "black"; // Cambia el color a azul cuando se ingresa texto
	} else {
	  input.style.color = "#7c7b7b"; // Restaura el color original cuando el campo está vacío
	}
  }


  

  function mostrarImagen() {
	const botonFile = document.getElementById('boton-file');
	const imagenPrevia = document.getElementById('imagen-previa');
	const nombreArchivo = document.getElementById('nombre-archivo').querySelector('span');
  
	const archivo = botonFile.files[0];
  
	if (archivo) {
	  const lector = new FileReader();
  
	  lector.onload = function (e) {
		imagenPrevia.src = e.target.result;
	  };
  
	  lector.readAsDataURL(archivo);
  
	  nombreArchivo.textContent = archivo.name;
	  document.getElementById('previsualizacion').style.display = 'block';
	} else {
	  document.getElementById('previsualizacion').style.display = 'none';
	}
  }
