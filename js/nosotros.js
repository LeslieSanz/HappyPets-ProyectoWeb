window.addEventListener('scroll', function() {
    var historiaSection = document.querySelector('.historia');
    var historiaSectionPosition = historiaSection.getBoundingClientRect();
    var windowHeight = window.innerHeight;
    var timelineElement = document.querySelector('.timeline');
    var containerElements = document.querySelectorAll('.container_timeline');

    if (historiaSectionPosition.top < windowHeight / 2 &&
        historiaSectionPosition.bottom > windowHeight / 2) {
        historiaSection.classList.add('visible');
        timelineElement.classList.add('animate'); 

        containerElements.forEach(function(containerElement) {
                containerElement.classList.add('animate');
        });
        
    } else {
        historiaSection.classList.remove('visible');
        timelineElement.classList.remove('animate'); 
    }
});


