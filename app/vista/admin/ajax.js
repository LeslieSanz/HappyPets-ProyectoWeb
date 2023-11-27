
//eliminar un animal adopta sin recargar la pagina
function animalEliminar(codigo){
    $.ajax({
        url:"../../controlador/animalControlador.php",
        method:"post",
        data:{record:codigo},
        success:function(data){
        // console.log(data); linea de prueba para imprimir el error de sql
        alert('Animal eliminado exitosamente');
        location.reload();
        }
    });
}


