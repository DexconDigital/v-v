/* document.getElementById("b_bogota").addEventListener("click", mostrar_pb);
document.getElementById("b_ibague").addEventListener("click", mostrar_pi);


function mostrar_pb() {
    mostrar_animacionb ();
}

function mostrar_pi() {
    mostrar_animacioni();
}

function mostrar_animacionb () {
    var bogota = document.getElementById("p_bogota");
    bogota.style.animation = "animacion_parrafo_bogota 500ms ease-in-out both";
}    
    
function ocultar_animacionb() {
    var bogota = document.getElementById("p_bogota");
    bogota.style.animation = "animacion_parrafo_bogota2 500ms ease-in-out both";
}

function mostrar_animacioni () {
    var ibague = document.getElementById("p_ibague");
    ibague.style.animation = "animacion_parrafo_bogota 500ms ease-in-out both";
}    
    
function ocultar_animacioni() {
    var ibague = document.getElementById("p_ibague");
    ibague.style.animation = "animacion_parrafo_bogota1 500ms ease-in-out both";
} */

$(function(){
    $('.carousel-caption').carousel({
        interval: 1000
    });
});



