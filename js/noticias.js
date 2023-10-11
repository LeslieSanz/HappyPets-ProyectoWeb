//filtros
$(document).ready(function(){
    $('.Elemento-filtro').click(function(){
        const value = $(this).attr('data-filter');
        if(value=='todos'){
            $('.post-box').show('1000');
        }
        else{
            $('.post-box').not('.' + value).hide('1000');
            $('.post-box').filter('.' + value).show('1000');
        }
    });

    //activar el sombreado al seleccionar los filtros
    $(".Elemento-filtro").click(function(){
        $(this).addClass("filtro-activo").siblings().removeClass("filtro-activo");
    })
}); 


//contador de likes(corazón)
const heartIcon = document.querySelector(".boton-like .icono-corazon");
const likesAmountLabel = document.querySelector(".boton-like .contador-like");

let likesAmount = 7;

heartIcon.addEventListener("click", () => {
  heartIcon.classList.toggle("liked");
  if (heartIcon.classList.contains("liked")) {
    likesAmount++;
  } else {
    likesAmount--;
  }

  likesAmountLabel.innerHTML = likesAmount;
});


function agregarComentario() {
    var nombre = "Dominith Peña" //Nombre fijo
    var comentario = document.getElementById('comentario').value;
  
    var comentariosDiv = document.getElementById('comentarios');
    var nuevoComentario = document.createElement('div');
    nuevoComentario.innerHTML = '<strong>' + nombre + ':</strong> ' + comentario;
    comentariosDiv.appendChild(nuevoComentario);
  
    // Limpiar campos después de enviar
    document.getElementById('comentario').value = '';
  }

  function borrarTexto() {
    var comentario = document.getElementById('comentario');
    if (comentario.value == "Escribe un comentario") {
      comentario.value = "";
    }
  }
  function restaurarTexto() {
    var comentario = document.getElementById('comentario');
    if (comentario.value == "") {
      comentario.value = "Escribe un comentario";
    }
  }


