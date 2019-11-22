window.addEventListener('scroll', animarServicios)

function animarServicios(){
    var cajaServicios = document.getElementById('animacion_servicios');
    var tamañoCajaServicios = cajaServicios.getBoundingClientRect().top;
    var radioVistaPantalla = innerHeight/1.8;

    if (tamañoCajaServicios < radioVistaPantalla) {
        cajaServicios.style.animation = 'animacion_servicios 750ms ease-in-out both';
    }
}
