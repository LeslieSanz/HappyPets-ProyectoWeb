function mostrarEconomico() {
    let cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (card.classList.contains('economico')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function mostrarAlimentos() {
    let cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (card.classList.contains('alimentos')) {
            card.style.display = 'block';
            
        } else {
            card.style.display = 'none';
        }
    });
}

function mostrarArticulos() {
    let cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (card.classList.contains('articulos')) {
            card.style.display = 'block';
            
        } else {
            card.style.display = 'none';
        }
    });
}

function mostrarTodos(){
    let cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (card.classList.contains('economico')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'block';
        }
        if (card.classList.contains('alimentos')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'block';
        }
        if (card.classList.contains('articulos')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'block';
        }
    });
}