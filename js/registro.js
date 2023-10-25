document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    form.onsubmit = function(event) {
        var password = document.getElementById('password').value;
        var repassword = document.getElementById('repassword').value;

        if (password !== repassword) {
            alert('Las contraseñas no coinciden');
            event.preventDefault(); // Evita que el formulario se envíe
        }
    };
});
