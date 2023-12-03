//eliminar un comentario sin recargar la pagina
function comentarioEliminar(codigo){
    console.log("Botón 'Eliminar' clickeado");
    $.ajax({
        url:"../../controlador/comentarioControlador.php",
        method:"post",
        data:{record:codigo},
        success:function(data){
        // console.log(data); linea de prueba para imprimir el error de sql
        alert('Comentario eliminado exitosamente');
        location.reload();
        console.log("Botón 'Eliminar' clickeado");
        }
    });
}