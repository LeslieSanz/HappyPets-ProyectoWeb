document.addEventListener('DOMContentLoaded', function () {
    // Llama a la función para obtener los datos cuando la página se carga
    getData();

    // Función para obtener datos desde el servidor
    function getData() {
        // Realiza una petición AJAX a adminControlador.php
        fetch('../../controlador/adminControlador.php')
            .then(response => response.json())
            .then(data => {
                // Actualiza los números en la página con los datos obtenidos
                document.getElementById('totalUsuarios').textContent = data.totalUsuarios;
                document.getElementById('peluditosAdopcion').textContent = data.peluditosAdopcion;
                document.getElementById('peluditosReportados').textContent = data.peluditosReportados;
            })
            .catch(error => console.error('Error al obtener datos:', error));
    }

    // Puedes agregar un temporizador o eventos para actualizar los datos periódicamente
    // setInterval(getData, 5000); // Actualiza cada 5 segundos, por ejemplo
});
