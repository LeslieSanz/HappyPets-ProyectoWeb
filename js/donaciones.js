document.addEventListener('DOMContentLoaded', function() {
    const openModal = document.querySelector('.hero_cta');
    const modal = document.querySelector('.modal');
    const closeModal = document.querySelector('.modal_close');
    const openModalPlin = document.querySelector('.abrir_plin');
    const modalPlin = document.querySelector('.modalplin');
    const closeModalPlin = document.querySelector('.modal_closeP');

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

/*------------------------------------------------------------------------*/