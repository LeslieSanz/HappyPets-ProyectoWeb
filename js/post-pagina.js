function borrarTexto() {
    document.getElementById('comentario').value = '';
}

function restaurarTexto() {
    if (document.getElementById('comentario').value == '') {
        document.getElementById('comentario').value = 'Escribe un comentario';
    }
}
function agregarComentario() {
    var comentario = document.getElementById('comentario').value;

    // Validar el comentario si es necesario

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var comentariosDiv = document.getElementById('comentarios');
            comentariosDiv.innerHTML += this.responseText;
            document.getElementById('comentario').value = ''; // Limpiar el textarea
        }
    };
    xhttp.open("POST", "InsertarComentario.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("comentario=" + comentario);
}
function obtenerFechaActual() {
    var fecha = new Date();
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1; // Los meses comienzan en 0
    var año = fecha.getFullYear();
    return `${dia}/${mes}/${año}`;
}