//filtros
$(document).ready(function(){
    $('.Elemento-filtro').click(function(){
        const value = $(this).attr('data-filter')
        if(value=='todos'){
            $('.post-box').show('1000')
        }
        else{
            $('.post-box').not('.' + value).hide('1000')
            $('.post-box').filter('.' + value).show('1000')
        }
    });
}); 