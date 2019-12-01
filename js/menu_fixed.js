$(document).ready(function(){
    var altura = $('#logo_y_navbar').offset().top;
    $(window).on('scroll', function (){
        if ($(window).scrollTop() > altura ) {
            $('#logo_y_navbar').addClass('logo_y_navbar2');
        } else {
            $('#logo_y_navbar').removeClass('logo_y_navbar2');
        }
    })
    
})