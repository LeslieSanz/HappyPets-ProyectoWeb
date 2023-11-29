function validar(){
    var nombre = document.getElementsByName("nombre")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var telefono = document.getElementsByName("telefono")[0].value;
    var asunto = document.getElementsByName("asunto")[0].value;
    var mensaje = document.getElementById("mensaje").value;

    var camposFaltantes = [];

    if (nombre === "") {
        camposFaltantes.push("Nombre");
    }

    if (email === "") {
        camposFaltantes.push("Correo electrónico");
    }

    if (!validarEmail(email)) {
        camposFaltantes.push("Correo electrónico (formato inválido)");
    }

    if (!validarTelefono(telefono)) {
        camposFaltantes.push("Número de celular (formato inválido)");
    }

    if (asunto === "") {
        camposFaltantes.push("Asunto/Motivo");
    }

    if (mensaje === "") {
        camposFaltantes.push("Mensaje");
    }

    if (camposFaltantes.length > 0) {
        // Campos obligatorios no completados
        var mensajeError = "Por favor, complete los siguientes campos:\n";
        mensajeError += camposFaltantes.join(",\n");
        
        Swal.fire({
            title: "Error",
            text: mensajeError,
            icon: "error"
        });
        
        return false; // Evitar que el formulario se envíe
    }

    // Si todas las validaciones son exitosas, se mostrará la alerta de éxito
    Swal.fire({
        title: "Mensaje enviado",
        text: "Pronto le responderemos",
        icon: "success",
         timer: 1500,
    });
    return true; // El formulario se enviará si todas las validaciones son exitosas
}

function validarTelefono(telefono) {
    // Expresión regular para un número de teléfono que consiste en 9 dígitos
    var regexTelefono = /^[0-9]{9}$/;
    return regexTelefono.test(telefono);
}
function validarEmail(email) {
    // Expresión regular para validar el formato básico de un correo electrónico
    var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regexEmail.test(email);

}
