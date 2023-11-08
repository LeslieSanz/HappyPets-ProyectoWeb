console.log(data);
//eliminar un animal adopta sin recargar la pagina
function animalEliminar(codigo){
    $.ajax({
        url:"../../controlador/animalControlador.php",
        method:"post",
        data:{record:codigo},
        success:function(data){
            alert('Animal eliminado existosamente');
            
        }
    });
}