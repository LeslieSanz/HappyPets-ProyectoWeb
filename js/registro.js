const pass = document.getElementById("password");
const repass = document.getElementById("repassword");
const icon = document.querySelector(".bx");

icon.addEventListener("click", e => {
    if(pass.type == "password"){
        pass.type = "text";
        icon.classList.remove('bx-show-alt')
        icon.classList.add('bx-hide')
    } else {
        pass.type = "password";
        icon.classList.add('bx-show-alt')
        icon.classList.remove('bx-hide')
    }
    if(repass.type == "password"){
        repass.type = "text";
        icon.classList.remove('bx-show-alt')
        icon.classList.add('bx-hide')
    } else {
        repass.type = "password";
        icon.classList.add('bx-show-alt')
        icon.classList.remove('bx-hide')
    }
})

function mostrar () {
    var tipo = document.getElementById("password");
    if(tipo.type == 'password') {
    tipo.type = 'text';
    }else {
    tipo.type = 'password';
    }
    }
