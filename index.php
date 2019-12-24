<?php

require 'controllers/indexController.php';
require 'variables/variables.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $page = 'Inicio' ?>
    <?php include 'layout/archivosheader.php' ?>
    <title>
        <?php echo $page . ' | ' . $nombre_inmobiliaria; ?>
    </title>


</head>

<body>

    <section>
        <?php include 'layout/header.php' ?>
    </section>

    <section id="imagenes_principales">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide_3.jpg" class="d-block w-100" alt="Imagen carrusel principal">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="animacion1 text-uppercase"> Bienvenido a nuestro sitio web </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide_2.jpg" class="d-block w-100" alt="Imagen carrusel principal">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="animacion2 text-uppercase"> El mejor lugar para encontrar tu Inmueble Ideal </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide_1.jpg" class="d-block w-100" alt="Imagen carrusel principal">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="animacion3 text-uppercase"> V&V Tu mejor opción en finca raíz </h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="boton_imagen_siguiente carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="boton_imagen_siguiente carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="formulario">
        <?php include 'layout/buscador.php' ?>
    </section>

    <section id="propiedades_destacadas_imagenes" class="margen_contenedores_index">

        <h2 class="my_100px text-center"> Propiedades Destacadas </h2>

        <div class="card-group">
            <div class="container-fluid aling-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-around row">

                        <?php
                        if (is_array($api)) {
                            inmuebles_destacados($api);
                        } else {
                            echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="portafolio_servicios" class="">

        <div style="z-index:300" class="container-fluid">

            <h2 style="padding:100px" class="text-light m-0 text-center"> Portafolio de Servicios </h2>

            <div class="col-12 d-flex flex-wrap justify-content-around">

                <div class="text-center col-12 col-lg-3 col-xl-3 col-md-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m1">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['arriendos'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['arriendos']['titulo'] ?></h4>
                </div>

                <div class="text-center col-12 col-lg-3 col-xl-3 col-md-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m2">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['ventas'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['ventas']['titulo'] ?></h4>
                </div>

                <div class="text-center col-12 col-lg-3 col-xl-3 col-md-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m3">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['avaluos'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['avaluos']['titulo'] ?></h4>
                </div>

            </div>

            <div class="col-12 d-flex flex-wrap justify-content-around">

                <div class="text-center col-12 col-lg-3 col-xl-3 col-md-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m4">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['asesoria'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['asesoria']['titulo'] ?></h4>
                </div>

                <div class="text-center col-12 col-lg-3 col-xl-3 col-md-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m5">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['corretaje'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['corretaje']['titulo'] ?></h4>
                </div>

                <div class="text-center col-12 col-lg-3 col-xl-3 col-md-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m6">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['reparaciones'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['reparaciones']['titulo'] ?></h4>
                </div>

            </div>



        </div>


    </section>

    <section id="modal_servicios">
        <!------------ MODAL ARRIENDOS ------------>

        <div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="1Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="margin-top: 130px;" class="modal-content">

                    <div class="modal-header">
                        <h5 class="color_rojo modal-title" id="1Title"> <?php echo $texto_servicios['arriendos']['titulo'] ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <p> <?php echo $texto_servicios['arriendos']['0'] ?> </p>
                        <p> <?php echo $texto_servicios['arriendos']['1'] ?> </p>
                        <p> <?php echo $texto_servicios['arriendos']['2'] ?> </p>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="boton_buscar btn" data-dismiss="modal"> Cerrar </button>
                    </div>

                </div>
            </div>
        </div>

        <!------------ MODAL ARRIENDOS ------------>

        <!------------ MODAL VENTAS ------------>

        <div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="margin-top: 130px;" class="modal-content">

                    <div class="modal-header">
                        <h5 class="color_rojo modal-title" id="exampleModalCenterTitle"><?php echo $texto_servicios['ventas']['titulo'] ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p> <?php echo $texto_servicios['ventas']['parrafos']['0'] ?> </p>
                        <p> <?php echo $texto_servicios['ventas']['parrafos']['1'] ?> </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn boton_buscar" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

        <!------------ MODAL VENTAS ------------>

        <!------------ MODAL 3 ------------>

        <div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="margin-top: 130px;" class="modal-content">

                    <div class="modal-header">
                        <h5 class="color_rojo modal-title" id="exampleModalCenterTitle"><?php echo $texto_servicios['avaluos']['titulo'] ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p> <?php echo $texto_servicios['avaluos']['parrafos']['0'] ?> </p>
                        <p> <?php echo $texto_servicios['avaluos']['parrafos']['1'] ?> </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn boton_buscar" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

        <!------------ MODAL 3 ------------>

        <!------------ MODAL 4 ------------>

        <div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="margin-top: 130px;" class="modal-content">

                    <div class="modal-header">
                        <h5 class="color_rojo modal-title" id="exampleModalCenterTitle"><?php echo $texto_servicios['asesoria']['titulo'] ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p> <?php echo $texto_servicios['asesoria']['parrafos'] ?> </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn boton_buscar" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

        <!------------ MODAL 4 ------------>

        <!------------ MODAL 5 ------------>

        <div class="modal fade" id="m5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="margin-top: 130px;" class="modal-content">

                    <div class="modal-header">
                        <h5 class="color_rojo modal-title" id="exampleModalCenterTitle"><?php echo $texto_servicios['corretaje']['titulo'] ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p> <?php echo $texto_servicios['ventas']['parrafos']['0'] ?> </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn boton_buscar" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

        <!------------ MODAL 5 ------------>

        <!------------ MODAL 6 ------------>

        <div class="modal fade" id="m6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="margin-top: 130px;" class="modal-content">

                    <div class="modal-header">
                        <h5 class="color_rojo modal-title" id="exampleModalCenterTitle"><?php echo $texto_servicios['reparaciones']['titulo'] ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p> <?php echo $texto_servicios['reparaciones']['parrafos'] ?> </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn boton_buscar" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

        <!------------ MODAL 6 ------------>


    </section>



    <div class="container">
        <div class="margen_contenedores_index">
            <div class="row align-items-center justify-content-around py-5">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                    <img class="imagen" src="images/descarga.png" alt="">
                    <div class="color_azul">
                        <h2 style="margin: 10px 0; font-size:20px;"> ¿Deseas publicar tu inmueble con nosotros? </h2>
                    </div>
                    <a target="_blank" href="FORMATO_DE_CONSIGNACION.pdf" style="width:200px" class="boton_buscar btn text-decoration-none text-white"> Descargar formulario </a>
                </div>
                <div class="mt-2 mt-xl-0 mt-lg-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                    <img class="imagen" src="images/icono_pdf.png" alt="">
                    <div class="color_azul">
                        <h2 style="margin: 10px 0; font-size:20px;"> Descargar Formulario de Aseguradoras </h2>
                        <div>

                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                        <a target="_blank" href="<?php echo $formularios_aseguradoras['0']['ruta'] ?>" style="width:200px" class="boton_buscar mt-1 mr-1 btn text-decoration-none text-white"> El Libertador </a>

                        <a target="_blank" href="<?php echo $formularios_aseguradoras['2']['ruta'] ?>" style="width:200px" class="boton_buscar mt-1 mr-1 btn text-decoration-none text-white"> Fianzacredito </a>

                        <a target="_blank" href="<?php echo $formularios_aseguradoras['1']['ruta'] ?>" style="width:200px" class="boton_buscar mt-1 mr-1 btn text-decoration-none text-white"> Afiansa </a>
                    </div>
                </div>
            </div>
        </div>
    </div class="containe">





    <!--     <section id="blog_body2">

        <div class="col-12">

            <h2 style="margin-bottom: 100px" class="text-center"> Últimas Noticias </h2>

            <div class="d-flex justify-content-around margen_contenedores_index row">

                <div>
                    <div class="card_hover card_hover card" style="width: 20rem;">
                        <img src="images/no_image.png" class="card-img-top" alt="...">

                        <div style="margin: 0 1%;" class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="color_azul card-title"> Nombre de Blog </h5>
                            </a>
                            <p class="color_rojo"> 27/11/2019 </p>
                            <p class="card-text"> *Carta de presentacón*... </p>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum porro cumque dolor magnam, pariatur ex. Quis ad voluptate vero commodi! </p>
                            <a href="#" class="boton_ver_mas"> Leer más... </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card_hover card" style="width: 20rem;">
                        <img src="images/no_image.png" class="card-img-top" alt="...">

                        <div style="margin: 0 1%;" class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="color_azul card-title"> Nombre de Blog </h5>
                            </a>
                            <p class="color_rojo"> 27/11/2019 </p>
                            <p class="card-text"> *Carta de presentacón*... </p>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum porro cumque dolor magnam, pariatur ex. Quis ad voluptate vero commodi! </p>
                            <a href="#" class="boton_ver_mas"> Leer más... </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card_hover card" style="width: 20rem;">
                        <img src="images/no_image.png" class="card-img-top" alt="...">

                        <div style="margin: 0 1%;" class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="color_azul card-title"> Nombre de Blog </h5>
                            </a>
                            <p class="color_rojo"> 27/11/2019 </p>
                            <p class="card-text"> *Carta de presentacón*... </p>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum porro cumque dolor magnam, pariatur ex. Quis ad voluptate vero commodi! </p>
                            <a href="#" class="boton_ver_mas"> Leer más... </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section> -->




    <section id="nuestros_aliados" class="fondo_gris">

        <h2 style="padding: 50px 0 0 0;" class="text-center"> Nuestros Aliados </h2>

        <div class="d-flex flex-column margen_contenedores_index">
            <div class="col-12 d-flex justify-content-around">
                <div class=""> <img style="width:100%;" src="images/libertador.png" alt="..."> </div>
                <div class=""> <img style="width:100%;" src="images/afiansa.png" alt="..."> </div>
                <div class=""> <img style="width:100%;" src="images/fianzacredito.png" alt="..."> </div>
                <div class=""> <img style="width:100%;" src="images/simi.png" alt="..."> </div>
            </div>

            <div class="col-12 d-flex justify-content-around">
                <div class=""> <img style="width:100%;" src="images/olx.png" alt="..."> </div>
                <div class=""> <img style="width:100%;" src="images/ciencuadras.png" alt="..."> </div>
                <div class=""> <img style="width:100%;" src="images/mercadolibre.png" alt="..."> </div>
                <div class=""> <img style="width:100%;" src="images/prelegalassist.png" alt="..."> </div>
            </div>
        </div>

    </section>




    <section>

        <?php include 'layout/footer.php' ?>

    </section>

    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/swiper.min.js"> </script>
    <script src="js/all.js"> </script>
    <script src="js/sripts.js"> </script>
    <script src="js/animacion_mostrar_botones.js"> </script>

    <!--  CONEXION API -->
    <script src="conexion_api/token_api.js"></script>
    <script src="conexion_api/validadores.js"></script>
    

    <script src="js/countUp.min.js"></script>
    <script src="js/counter-propertys.js"></script>
    <script src="js/jquery.min.js"> </script>
    <script src="conexion_api/buscador2.js"></script>


</body>

</html>