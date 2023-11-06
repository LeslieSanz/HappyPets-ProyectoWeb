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

/*------------------------------------------------------------------------*/
const abrir = document.getElementById('abrir');
const contenedor_pop_yape = document.getElementById('contenedor_pop_yape');
const cerrar = document.getElementById('cerrar');

abrir.addEventListener('click', () => {
    contenedor_pop_yape.classList.add('show');
});

cerrar.addEventListener('click', () => {
    contenedor_pop_yape.classList.remove('show');
});