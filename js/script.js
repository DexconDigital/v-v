$('#carousel').owlCarousel({
    loop:true,
    margin:10,
    atoplay: 100,
    autoplayHoverPause: false,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});