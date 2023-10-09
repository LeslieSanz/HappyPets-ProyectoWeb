(function(){
    const sliders = [...document.querySelectorAll('.slider_body')];
    const arrowNext = document.querySelector('#next');
    const arrowBefore = document.querySelector('#before');
    let valor;

    arrowNext.addEventListener('click',()=>changePosition(1));
    arrowBefore.addEventListener('click',()=>changePosition(-1));
    
    function changePosition(change){
        const currentElement = Number(document.querySelector('.slider_body--show').dataset.id);
        
        valor=currentElement;
        valor+=change;

        if(valor == 0 || valor == sliders.length+1){
            valor = valor === 0? sliders.length : 1;
            console.log(sliders.length)
        }

        sliders[currentElement-1].classList.toggle('slider_body--show');
        sliders[valor-1].classList.toggle('slider_body--show');
    }
})()

function popUp(URL){
    window.open(URL,'Nombre de la ventana','width=500,height=500,left=350,top=100,toolbar=yes,titlebar=yes,location=yes');
}