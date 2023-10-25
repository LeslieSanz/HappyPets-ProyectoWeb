const tarjeta = document.querySelector('#tarjeta'),
    btnAbrirFormulario = document.querySelector('#btn-abrir-formulario'),
    formulario = document.querySelector('#formulario-tarjeta'),
    numeroTarjeta = document.querySelector('#tarjeta .numero'),
    nombreTarjeta = document.querySelector('#tarjeta .nombre'),
    logoMarca = document.querySelector('#logo-marca'),
    firma = document.querySelector('#tarjeta .firma p'),
    mesExpiracion = document.querySelector('#tarjeta .mes'),
    yearExpiracion = document.querySelector('#tarjeta .year'),
    ccv = document.querySelector('#tarjeta .ccv');

//Volteamos la tarjeta para mostrar el frente.
const mostrarFrente = () => {
    if(tarjeta.classList.contains('active')){
        tarjeta.classList.remove('active');
    }
}

tarjeta.addEventListener('click', () => {
    tarjeta.classList.toggle('active');
    
});

// * Boton para abrir el formulario
btnAbrirFormulario.addEventListener('click', () => {
    btnAbrirFormulario.classList.toggle('active');
    formulario.classList.toggle('active');
});

// * Función para llenar el mes
for(let i = 1; i <=12; i++){
    let opcion = document.createElement('option');
    opcion.value = i;
    opcion.innerText = i;
    formulario.selectMes.appendChild(opcion);
};

// * Función para llenar el año
const yearActual = new Date().getFullYear();
for(let i = yearActual; i <= yearActual + 8 ; i++){
    let opcion = document.createElement('option');
    opcion.value = i;
    opcion.innerText = i;
    formulario.selectYear.appendChild(opcion);
};

// * Input tarjeta
formulario.inputNumero.addEventListener('keyup',(e) => {
    let valorInput = e.target.value;

    formulario.inputNumero.value = valorInput
    //Elimina espacios en blanco
    .replace(/\s/g, '')
    //Eliminar letras
    .replace(/\D/g, '')
    //Ponemos 4 espacios cada 4 puntos
    .replace(/([0-9]{4})/g, '$1 ')
    //Elimina el ultimo espaciado
    .trim();

    numeroTarjeta.textContent = valorInput;

    if(valorInput == ""){
        numeroTarjeta.textContent = '#### #### #### ####';

        logoMarca.innerHTML = '';
    }

    if(valorInput[0] == 4){
        logoMarca.innerHTML = '';
        const imagen = document.createElement('img');
        imagen.src = '../img/tarjeta/visa.png';
        logoMarca.appendChild(imagen);
    }else if(valorInput[0] == 5){
        logoMarca.innerHTML = '';
        const imagen = document.createElement('img');
        imagen.src = '../img/tarjeta/mastercard.png';
        logoMarca.appendChild(imagen);
    }

    //voltear tarjeta
    mostrarFrente();
});

// * Input nombre de tarjeta
formulario.inputNombre.addEventListener('keyup', (e) => {
    let valorInput = e.target.value;

    formulario.inputNombre.value= valorInput.replace(/[0-9]/g, '');
    nombreTarjeta.textContent = valorInput;
    firma.textContent = valorInput;

    if(valorInput == ''){
        nombreTarjeta.textContent = 'Jhon Doe';
    }

    mostrarFrente();
});

//Select mes
formulario.selectMes.addEventListener('change', (e) => {
    mesExpiracion.textContent = e.target.value;
    mostrarFrente();
});

//Select año
formulario.selectYear.addEventListener('change', (e) => {
    yearExpiracion.textContent = e.target.value.slice(2);
    mostrarFrente();
});

//CCV
formulario.inputCCV.addEventListener('keyup', () =>{
    if(!tarjeta.classList.contains('active')){
        tarjeta.classList.toggle('active');
    }

    formulario.inputCCV = formulario.inputCCV.value
    .replace(/\s/g, '')

    .replace(/\D/g, '');

    ccv. textContent = formulario.inputCCV.value;
});