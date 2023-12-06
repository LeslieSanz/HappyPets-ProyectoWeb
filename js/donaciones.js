document.addEventListener('DOMContentLoaded', function() {
    //*funciones para abrir modal yape
    const openModal = document.querySelector('.hero_cta');
    const modal = document.querySelector('.modal');
    const closeModal = document.querySelector('.modal_close');
    
    //*funciones para abrir modal plin
    const openModalPlin = document.querySelector('.abrir_plin');
    const modalPlin = document.querySelector('.modalplin');
    const closeModalPlin = document.querySelector('.modal_closeP');

    //*funciones para abrir modal formulario alimentos
    const openModalAlimentos = document.querySelector('.abrir_alimentos');
    const modalAlimentos = document.querySelector('.modalAlimentos');
    const closeModalAlimentos = document.querySelector('.modal_closeAlimentos');

    //*funciones para abrir modal formulario articulos
    const openModalArticulos = document.querySelector('.abrir_articulos');
    const modalArticulos = document.querySelector('.modalArticulos');
    const closeModalArticulos = document.querySelector('.modal_closeArticulos');



    const formulario = document.querySelector('#formulario-alimentos');
    

    openModal.addEventListener('click', function(e) {
        e.preventDefault();
        modal.classList.add('modal--show');
    });

    closeModal.addEventListener('click', function(e) {
        e.preventDefault();
        modal.classList.remove('modal--show');
    });

    openModalPlin.addEventListener('click', function(e) {
        e.preventDefault();
        modalPlin.classList.add('modalplin--show');
    });

    closeModalPlin.addEventListener('click', function(e) {
        e.preventDefault();
        modalPlin.classList.remove('modalplin--show');
    });

    openModalAlimentos.addEventListener('click', function(e) {
        e.preventDefault();
        modalAlimentos.classList.add('modalAlimentos--show');
    });

    closeModalAlimentos.addEventListener('click', function(e) {
        e.preventDefault();
        modalAlimentos.classList.remove('modalAlimentos--show');
    });

    openModalArticulos.addEventListener('click', function(e) {
        e.preventDefault();
        modalArticulos.classList.add('modalArticulos--show');
    });

    closeModalArticulos.addEventListener('click', function(e) {
        e.preventDefault();
        modalArticulos.classList.remove('modalArticulos--show');
    });

 
    // * Función para llenar el tipo de comida
    if (formulario) {
        // El formulario existe
        const opciones = ["Húmedo", "Seco"];
        
        opciones.forEach(valor => {
        let opcion = document.createElement('option');
        opcion.value = valor.toLowerCase(); 
        opcion.innerText = valor;
        
        if (formulario.selectAlimento) {
            // selectAlimento existe en el formulario
            formulario.selectAlimento.appendChild(opcion);
        } else {
            console.error('selectAlimento no está definido en el formulario.');
        }
        });
    } else {
        console.error('El formulario no está definido.');
    }
    // * Función para llenar el tipo de edad
    if (formulario) {
        // El formulario existe
        const opciones = ["Cachorro", "Jóven", "Adulto", "Mayor"];
        
        opciones.forEach(valor => {
        let opcion = document.createElement('option');
        opcion.value = valor.toLowerCase(); 
        opcion.innerText = valor;
        
        if (formulario.selectEdad) {
            // selectEdad existe en el formulario
            formulario.selectEdad.appendChild(opcion);
        } else {
            console.error('selectEdad no está definido en el formulario.');
        }
        });
    } else {
        console.error('El formulario no está definido.');
    }

    // * Función para llenar las marcas
    if (formulario) {
        // El formulario existe
        const opciones = ["Ricocan/cat", "Mimaskot", "Canbo", "Brit", "Gran Plus", "Dog/cat Chow",
        "Propac", "Pedigree"];
        
        opciones.forEach(valor => {
        let opcion = document.createElement('option');
        opcion.value = valor.toLowerCase(); 
        opcion.innerText = valor;
        
        if (formulario.selectEdad) {
            // selectMarca existe en el formulario
            formulario.selectMarca.appendChild(opcion);
        } else {
            console.error('selectMarca no está definido en el formulario.');
        }
        });
    } else {
        console.error('El formulario no está definido.');
    }
});





function mostrarEconomico() {
    let sections = document.querySelectorAll('.section-economico');
    sections.forEach(section => {
        section.style.display = 'block';
    });

    let sectionsToHide = document.querySelectorAll('.section-alimentos, .section-articulos');
    sectionsToHide.forEach(section => {
        section.style.display = 'none';
    });
}

function mostrarAlimentos() {
    let sections = document.querySelectorAll('.section-alimentos');
    sections.forEach(section => {
        section.style.display = 'block';
    });

    let sectionsToHide = document.querySelectorAll('.section-economico, .section-articulos');
    sectionsToHide.forEach(section => {
        section.style.display = 'none';
    });
}

function mostrarArticulos() {
    let sections = document.querySelectorAll('.section-articulos');
    sections.forEach(section => {
        section.style.display = 'block';
    });

    let sectionsToHide = document.querySelectorAll('.section-economico, .section-alimentos');
    sectionsToHide.forEach(section => {
        section.style.display = 'none';
    });
}

function mostrarTodos() {
    let sections = document.querySelectorAll('.section-economico, .section-alimentos, .section-articulos');
    sections.forEach(section => {
        section.style.display = 'block';
    });
}

/*Funciones formulario alimento*/

/*Restricciones */
const formulario = document.querySelector('#formulario-alimentos');

/*Restricción de numeros en el nombre */
formulario.inputNombre.addEventListener('keyup', (e) => {
    let valorInput = e.target.value;

    formulario.inputNombre.value= valorInput.replace(/[0-9]/g, '');

});
/* restricción de letras en el número y espaciado cada 3 números*/
formulario.inputNumero.addEventListener('keyup',(e) => {
    let valorInput = e.target.value;

    formulario.inputNumero.value = valorInput
    //Elimina espacios en blanco
    .replace(/\s/g, '')
    //Eliminar letras
    .replace(/\D/g, '')
    //Ponemos 3 espacios cada 3 puntos
    .replace(/([0-9]{3})/g, '$1 ')
    //Elimina el ultimo espaciado
    .trim();
});

/* Restricción de letras en peso */
formulario.inputPeso.addEventListener('keyup',(e) => {
    let valorInput = e.target.value;

    formulario.inputPeso.value = valorInput
    //Elimina espacios en blanco
    .replace(/\s/g, '')
    //Eliminar letras
    .replace(/\D/g, '')
    //Elimina el ultimo espaciado
    .trim();
});

/*Funciones formulario articulos/

/*Restricciones */
const formularioArticulo = document.querySelector('#formulario-articulos');

/*Restricción de numeros en el nombre */
formularioArticulo.inputNombre2.addEventListener('keyup', (e) => {
    let valorInput = e.target.value;

    formularioArticulo.inputNombre2.value= valorInput.replace(/[0-9]/g, '');

});
/* restricción de letras en el número y espaciado cada 3 números*/
formularioArticulo.inputNumero2.addEventListener('keyup',(e) => {
    let valorInput = e.target.value;

    formularioArticulo.inputNumero2.value = valorInput
    //Elimina espacios en blanco
    .replace(/\s/g, '')
    //Eliminar letras
    .replace(/\D/g, '')
    //Ponemos 3 espacios cada 3 puntos
    .replace(/([0-9]{3})/g, '$1 ')
    //Elimina el ultimo espaciado
    .trim();
});

/* Restricción de letras en peso */
formularioArticulo.inputTipoArticulo.addEventListener('keyup',(e) => {
    let valorInput = e.target.value;

    formularioArticulo.inputTipoArticulo.value = valorInput
    //Elimina espacios en blanco
    .replace(/\s/g, '')
    //Eliminar letras
    .replace(/[0-9]/g, '')
    //Elimina el ultimo espaciado
    .trim();
});

/*------------------------------------------------------------------------*/