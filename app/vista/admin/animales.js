
//eliminar un animal adopta sin recargar la pagina
function animalEliminar(codigo){
    console.log("Botón 'Eliminar' clickeado");
    $.ajax({
        url:"../../controlador/animalControlador.php",
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

//--------------------------VENTANA EMERGENTE----------------------

$(document).ready(function () {
        
    const modal = document.querySelector('.modalEditar');

    $(document).on("click", ".boton-editar", function () {
    

        // Obtén el valor del atributo "data-foto" del botón en el que se hizo clic
        var codigo = $(this).data("codigo");
        // La variable "foto" almacena el valor del atributo "data-foto" del botón en el que se hizo clic.

        console.log(codigo);
    
        $.ajax({
            url: "../../controlador/animalControlador.php",
            type: "POST",
            data: { codigo: codigo },
            dataType: "json", // Esperamos una respuesta JSON
            success: function (response) {
                // Asigna los datos a los elementos del modal
                $("#imagen").attr("src", '/HappyPets-ProyectoWeb/uploads/' + response.foto);
                console.log("Valor de response.nombre:", response.nombre)
                $("#nombre-editar").val(response.nombre);
                $("#especie-editar").val(response.especie);
                $("#sexo-editar").val(response.sexo);
                $("#edad-editar").val(response.edad);
                $("#tamano-editar").val(response.tamano);
                $("#caracteristicas-editar").val(response.caracteristicas);
                $("#razon-editar").val(response.razon);
                $("#codigo-secreto").val(response.cod_aniAdo);

            modal.classList.add('modalEditar--show');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
                console.log("Detalles de la solicitud AJAX:", jqXHR);
            }
        });
        
    });

    $("#close").on("click", function () {

        modal.classList.remove('modalEditar--show');
    });

});