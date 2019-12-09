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
    <section id="carrusel_imagenes" class="margen_contenedores_indexr1">

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



    <section id="informacion_inmueble" class="my-5">

        <div class="margen_contenedores_indexr1">
            <div class="row">

                <div id="accordion" class="col-8">
                    <div class="container">
                        <div class="col-12 ">

                            <!----------BOTONES---------->

                            <div class="row mb-5 justify-content-between">

                                <div class="ml-1">

                                    <button class="btn boton_detalle_inmueble collapsed" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                        Descripción
                                    </button>

                                </div>

                                <div class="ml-1">

                                    <button class="w_200px btn boton_detalle_inmueble collapsed boton_venta" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                        Características Interiores
                                    </button>

                                </div>

                                <div class="ml-1">

                                    <button class="w_200px btn boton_detalle_inmueble collapsed" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="collapseExample">
                                        Características Exteriores
                                    </button>

                                </div>

                                <div class="ml-1">

                                    <button class="w_200px btn boton_detalle_inmueble collapsed" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseExample">
                                        Características Alrededores
                                    </button>

                                </div>

                                <div class="ml-1">

                                    <button class="btn boton_detalle_inmueble collapsed" type="button" data-toggle="collapse" data-target="#cinco" aria-expanded="false" aria-controls="collapseExample">
                                        Video
                                    </button>

                                </div>


                            </div>

                            <!----------BOTONES---------->

                            <!----------INFORMACION BOTONES---------->


                            <div class="margen_contenedor">

                                <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                    <h2> Descripción </h2>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                </div>

                            </div>

                            <div class="margen_contenedor">
                                <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                    <h2> Características Interiores </h2>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>
                                </div>
                            </div>

                            <div class="margen_contenedor">
                                <div id="tres" class="collapse" aria-labelledby="tres" data-parent="#accordion">

                                    <h2> Características Exteriores </h2>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                </div>
                            </div>

                            <div class="margen_contenedor">
                                <div id="cuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">

                                    <h2> Características Alrededores </h2>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                </div>
                            </div>

                            <div class="margen_contenedor">
                                <div id="cinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">

                                    <h2> Video </h2>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                </div>
                            </div>

                        </div>

                        <!----------INFORMACION BOTONES---------->

                    </div>


                    <div class="mt-5">
                        <h2 class="text-center mb-5"> Ubicación del inmueble </h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4354228861143!2d-74.06821848590987!3d4.694157043022957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9adad974c0d7%3A0x4afb1aa35688bda!2sTv.%2058%20%23106-36%2C%20Bogot%C3%A1!5e0!3m2!1sen!2sco!4v1575653109568!5m2!1sen!2sco" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>


                </div>

                <div class="rounded col-4">

                    <div class="row align-items-center justify-content-center my-3">
                        <div class="">
                            Comparte en:
                        </div>
                        <div class="d-flex ml-3">

                            <a class="icono_fb" target="_blank" href="#">
                                <i class="mr-2 <?php echo $redes_sociales['facebook']['icono'] ?>"></i>
                            </a>

                            <a class="icono_tt" target="_blank" href="#">
                                <i class="mr-2 fab fa-twitter"></i>
                            </a>

                            <a class="icono_w" target="_blank" href="#">
                                <i class="mr-2 <?php echo $datos_contacto['bogota']['whatsapp']['icono'] ?>"></i>
                            </a>

                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <button class="btn boton_ficha"> Descargar Ficha </button>
                    </div>

                    <div class="border-top mt-3 row">

                        <h5 class="text-center col-12 mt-3"> Contáctate con el Asesor </h5>

                        <div class="align-items-center col-12 justify-content-center m-0 mt-3 p-0 row">

                            <div class="col-7 imagen_asesor">
                                <img src="images/no_image.png" alt="">
                            </div>

                            <div class="col-12 parrafos_asesor mt-3">

                                <p> Nombre Asesor </p>
                                <p> 311-000-000 </p>
                                <p> correoasesor@hotmail.com </p>

                            </div>
                        </div>



                        <div class="col-12 mb-3">

                            <input type="text" class="my-2 border codigo_input form-control" id="exampleFormControlInput1" placeholder="Nombre y Apellido">
                            <input type="email" class="my-2 border codigo_input form-control" id="exampleFormControlInput1" placeholder="Correo Electrónico">
                            <input type="number" class="my-2 border codigo_input form-control" id="exampleFormControlInput1" placeholder="Telefono Celular">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensaje" rows="3"></textarea>
                            <div class="ml-3 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1"> Confimo que he leído, entendido y acepto la <a href="POLITICA_DE_PROTECCION_DE_DATOS.pdf" download="POLITICA_DE_PROTECCION_DE_DATOS.pdf">política de tratamiento de datos personales.</a> </label>
                            </div>
                            <div class="row justify-content-center">
                                <button class="col-3 btn boton_ficha"> Enviar </button>
                            </div>
                        </div>

                    </div>


                </div>




            </div>
        </div>
    </section>

    <section id="propiedades_destacadas_imagenes" class="mb-3 margen_contenedores_index">

        <h2 class="my-5 text-center"> Propiedades Similares </h2>

        <div class="card-group">
            <div class="container-fluid aling-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-around row">

                        <div>
                            <a href="detalle_inmueble.php">
                                <div class="my-3 card" style="width: 20rem;">
                                    <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
                                    <p class="tipo_de_renta card-text"> Estado </p>
                                    <p class="precio_inmueble card-text"> $1.500.000 </p>
                                    <div style="margin: 0 1%;" class="card-body">

                                        <h5 class="card-title"> Titulo de propiedad </h5>
                                        <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>

                                        <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                        </ul>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="detalle_inmueble.php">
                                <div class="my-3 card" style="width: 20rem;">
                                    <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
                                    <p class="tipo_de_renta card-text"> Estado </p>
                                    <p class="precio_inmueble card-text"> $1.500.000 </p>
                                    <div style="margin: 0 1%;" class="card-body">

                                        <h5 class="card-title"> Titulo de propiedad </h5>
                                        <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>

                                        <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                        </ul>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="detalle_inmueble.php">
                                <div class="my-3 card" style="width: 20rem;">
                                    <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
                                    <p class="tipo_de_renta card-text"> Estado </p>
                                    <p class="precio_inmueble card-text"> $1.500.000 </p>
                                    <div style="margin: 0 1%;" class="card-body">

                                        <h5 class="card-title"> Titulo de propiedad </h5>
                                        <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>

                                        <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                        </ul>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>









    <section>
        <?php include 'layout/footer.php' ?>
    </section>

    
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

    <?php include 'layout/archivosfooter.php' ?>






</body>

</html>