
//eliminar un animal adopta sin recargar la pagina
function animalEliminar(codigo){
    $.ajax({
        url:"../../controlador/eliminar.php",
        method:"post",
        data:{record:codigo},
        success:function(data){
            alert('Animal eliminado existosamente');
            
        }
    });
}