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

            <div class="ml-3 pr-5 row">
                <i class="mr-2 <?php echo $datos_contacto['bogota']['direccion']['icono'] ?>"> </i>
                <p> Lorem ipsum dolor sit amet, laborum accusamus? </p>
            </div>

            <div class="text-muted">
                <p class=""> Código </p>
            </div>

        </div>

    </section>

    <!-- CARROUSEL IMAGENES -->
    <section id="body_detalles_inmueble" class="my-5">

        <div id="#carrusel_imagenes">
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


            </section>
            <!-- MINIATURAS -->


        </div>

    </section>
    <!-- CARROUSEL IMAGENES -->

    <section id="informacion_inmueble">
        <div class="container">

            <div class="row">

                <div class="col-8">
                    <div class="justify-content-center flex-column row">
                        <div class="flex-row justify-content-center list-group" id="list-tab" role="tablist">

                            <a style="width:15rem" class="list-group-item-action mb-1 mr-1 rounded text-center" id="list-profile-list" data-toggle="list" href="#descripcion" role="tab" aria-controls="home" aria-selected="false"> Descripción </a>

                            <a style="width:15rem" class="list-group-item-action mb-1 mr-1 rounded text-center list-group-item-action rounded" id="list-profile-list" data-toggle="list" href="#video" role="tab" aria-controls="profile" aria-selected="false"> Video </a>

                        </div>

                        <div class="flex-row justify-content-between list-group" id="list-tab" role="tablist" >

                            <a style="" class="col-4 text-center list-group-item-action rounded" id="list-profile-list" data-toggle="list" href="#ci" role="tab" aria-controls="profile" aria-selected="false"> Características Internas </a>

                            <a style="width: 15rem;" class="text-center flex-column list-group-item-action px-0 rounded row" id="list-profile-list" data-toggle="list" href="#ce" role="tab" aria-controls="profile" aria-selected="false"> Características Externas </a>

                            <a style="width: 15rem;" class="text-center list-group-item-action rounded active" id="list-profile-list" data-toggle="list" href="#ca" role="tab" aria-controls="profile" aria-selected="true"> Características Alrededores </a>

                        </div>
                    </div>

                    <!-- ------- SECCION 1 -------------- -->

                    <!-- ------- SECCION 2 -------------- -->

                    <div class="my-5 d-flex justify-content-center tab-content" id="nav-tabContent">

                        <div class="fade tab-pane active show" id="descripcion" role="tabpanel" aria-labelledby="list-profile-list">

                            <p> *DESCRIPCIÓN DEL APARTAMENTO* Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, et? Aspernatur corporis mollitia deserunt earum, fugit ratione eius suscipit a, vero delectus perferendis ullam quo quod velit repellendus aliquid beatae porro reiciendis, officia facere inventore. Velit nihil architecto iste dolorem laborum sequi id laboriosam error expedita atque. Aspernatur, error voluptatem? </p>

                        </div>


                        <div class="fade tab-pane" id="video" role="tabpanel" aria-labelledby="list-profile-list">

                            <iframe width="500px" height="500px" src="https://www.youtube.com/embed/xcJtL7QggTI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div class="fade tab-pane" id="ci" role="tabpanel" aria-labelledby="list-profile-list">

                            CONTENIDO3

                        </div>

                        <div class="fade tab-pane" id="ce" role="tabpanel" aria-labelledby="list-profile-list">

                            CONTENIDO4

                        </div>

                        <div class="fade tab-pane" id="ca" role="tabpanel" aria-labelledby="list-profile-list">

                            CONTENIDO5

                        </div>


                    </div>

                    <!-- ------- SECCION 2 -------------- -->

                </div>

                <div class="col-4">
                    asdasdasdas
                </div>

            </div>

        </div>
    </section>







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