function borrarTexto() {
    document.getElementById('comentario').value = '';
}

function restaurarTexto() {
    if (document.getElementById('comentario').value == '') {
        document.getElementById('comentario').value = 'Escribe un comentario';
    }
}
function agregarComentario() {
    // Obtener el valor del comentario del textarea
    var comentario = document.getElementById('comentario').value;
    var fecha = obtenerFechaActual(); // Obtener la fecha actual 

    // Validar el comentario si es necesario

    // Crear una nueva XMLHttpRequest para hacer una solicitud al servidor
    var xhttp = new XMLHttpRequest();
    // Definir una función que se ejecutará cada vez que cambie el estado de la solicitud
    xhttp.onreadystatechange = function() {
        // Verificar si la solicitud se completó y si el estado es "OK" (200)
        if (this.readyState === 4 && this.status === 200) {
            // Obtener el elemento con el ID 'comentarios'
            var comentariosDiv = document.getElementById('comentarios');
            // Agregar el contenido de la respuesta al elemento 'comentarios'
            comentariosDiv.innerHTML += this.responseText;
            document.getElementById('comentario').value = ''; // Limpiar el textarea
        }
    };
    // Configurar la solicitud
    xhttp.open("POST", "../modelo/Comentario.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // Establecer el tipo de contenido de la solicitud
    xhttp.send("comentario=" + comentario + "&fecha=" + fecha);     // Enviar la solicitud con los datos del comentario y la fecha
} 
function obtenerFechaActual() {
    var fecha = new Date();
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1; // Los meses comienzan en 0
    var año = fecha.getFullYear();
    return `${dia}/${mes}/${año}`;
}