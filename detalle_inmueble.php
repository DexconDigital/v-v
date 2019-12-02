<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $page = 'Detalle de inmueble' ?>
    <?php include 'variables/variables.php' ?>
    <?php include 'layout/archivosheader.php' ?>
    <link rel="stylesheet" href="css/carousel.tamanos.css">
    <title>
        <?php echo $page . ' | ' . $nombre_inmobiliaria; ?>
    </title>
</head>

<body>

    <section>
        <?php include 'layout/header.php' ?>
    </section>

    <section id="imagen_nosotros" class="margin_top_93px d-flex justify-content-center align-items-center">
        <h1> Detalle de Inmueble </h1>
        <img class="imagen" src="images/banner_inmuebles.jpg" alt="">
    </section>

    <section id="header_detalles_inmueble" class="mb-0 margen_contenedores_indexr">

        <div class="row">

            <div class="col-6">
                <h5 class="font-weight-bold"> Tipo de Inmueble en Tipo de Gestión </p>
            </div>

            <div class="col-6">
                <h5 class="font-weight-bold color_azul text-right"> $PRECIO$ </h5>
            </div>

        </div>

        <div class="row">

            <div class="col-4 row m-0">
                <i class="mr-2 <?php echo $datos_contacto['bogota']['direccion']['icono'] ?>"> </i>
                <p> Lorem ipsum dolor sit amet, laborum accusamus? </p>
            </div>

            <div class="col-2">
                <p> Código </p>
            </div>

        </div>

    </section>

<!-- CARROUSEL IMAGENES -->
    <section id="body_detalles_inmueble" class="mt-0 margen_contenedores_indexr">
        <div>
            <!-- IMAGENES PRINCIPALES -->
            <section class="mt-3" id="slide-detalle">

                <div class="contenedor-img">
                    <img src="images/slide_1.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/banner_servicios2.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/slide_2.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/slide_3.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/banner_servicios2.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/banner_servicios2.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/banner_servicios2.jpg" alt="">
                </div>

            </section>
            <!-- IMAGENES PRINCIPALES -->

            <!-- MINIATURAS -->
            <section class="vertical-center-4 slider" id="miniaturas">

                <div class="contenedor-img">
                    <img src="images/slide_1.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/banner_servicios2.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/slide_2.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/slide_3.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/banner_servicios2.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/banner_servicios2.jpg" alt="">
                </div>

                <div class="contenedor-img">
                    <img src="images/banner_servicios2.jpg" alt="">
                </div>

            </section>
            <!-- MINIATURAS -->


        </div>

    </section>
<!-- CARROUSEL IMAGENES -->














    <section>
        <?php include 'layout/footer.php' ?>
    </section>

    <?php include 'layout/archivosfooter.php' ?>

    <script src="js/slick.min.js"></script>


    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>



</body>

</html>