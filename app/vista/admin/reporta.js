//eliminar un animal adopta sin recargar la pagina
function animalEliminar(codigo){
    console.log("Botón 'Eliminar' clickeado");
    $.ajax({
        url:"../../controlador/reporteControlador.php",
        method:"post",
        data:{record:codigo},
        success:function(data){
        // console.log(data); linea de prueba para imprimir el error de sql
        alert('Animal eliminado exitosamente');
        location.reload();
        console.log("Botón 'Eliminar' clickeado");
        }
    });
}