function mostrarGatos() {
    let cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (card.classList.contains('gato')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function mostrarPerros() {
    let cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (card.classList.contains('perro')) {
            card.style.display = 'block';
            
        } else {
            card.style.display = 'none';
        }
    });
}

function mostrarTodos(){
    let cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (card.classList.contains('perro')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'block';
        }
        if (card.classList.contains('gato')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'block';
        }
    });
}