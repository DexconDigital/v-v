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

    <section id="portafolio_servicios" class="my_100px">

        <div style="z-index:2; position:absolute;" class="container-fluid">

            <h2 style="padding:100px" class="text-light m-0 text-center"> Portafolio de Servicios </h2>

            <div class="col-12 d-flex justify-content-around">

                <div class="text-center col-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m1">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['arriendos'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['arriendos']['titulo'] ?></h4>
                </div>

                <div class="text-center col-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m2">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['ventas'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['ventas']['titulo'] ?></h4>
                </div>

                <div class="text-center col-3 rounded mb-5 hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m3">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['avaluos'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['avaluos']['titulo'] ?></h4>
                </div>

            </div>

            <div class="col-12 d-flex justify-content-around">

                <div class="text-center col-3 rounded hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m4">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['asesoria'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['asesoria']['titulo'] ?></h4>
                </div>

                <div class="text-center col-3 rounded hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m5">
                    <i style="width:60px; height:60px;" class="color_azul <?php echo $iconos_servicios['corretaje'] ?>"></i>
                    <h4 class="mt-3"><?php echo $texto_servicios['corretaje']['titulo'] ?></h4>
                </div>

                <div class="text-center col-3 rounded hover_servicios  bg-light p-5 justify-content-center align-items-center d-flex flex-column" data-toggle="modal" data-target="#m6">
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







    <div style="background-color:#ebede8; position:relative;" class=" p-0">
        <img class="imagenp" src="images/banner_servicios2.jpg" alt="">
        <div style="z-index: 200; position:absolute; bottom:0;" class="align-items-center d-flex franja justify-content-around">
            <img style="margin-left: 100px;" class="imagen" src="images/descarga.png" alt="">
            <div class="color_azul">
                <h2> ¿Deseas publicar tu inmueble con nosotros? </h2>
            </div>
            <a href="#" style="width:200px" class="boton_buscar btn text-decoration-none text-white" download="FORMATO DE CONSIGNACION.pdf"> Descargar formulario </a>

        </div>

    </div>

    <section id="fomulario_aseguradoras" class="margen_contenedores_index">

        <h2 class="margin_100px text-center"> Descargar Formulario de Aseguradoras </h2>

        <div class="text-center container-fluid">
            <div class="row justify-content-center">

                <div class="p-0 mx-3 aseguradoras_div col">
                    <a target="_blank" href="<?php echo $formularios_aseguradoras['0']['ruta'] ?>"> <img src="images/libertador.png" alt=""> </a>
                </div>

                <div class="aseguradoras_div col">
                    <a target="_blank" href="<?php echo $formularios_aseguradoras['2']['ruta'] ?>"> <img src="images/fianzacredito.png" alt=""> </a>
                </div>

                <div style="margin-top: -1%;" class="seguradoras_div col">
                    <div>
                        <a target="_blank" href="<?php echo $formularios_aseguradoras['1']['ruta'] ?>"> <img src="images/afiansa.png" alt=""> </a>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <!-- <section id="blog_body2">

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

    <section id="contador_estadisticas">

        <div class="align-items-center d-flex justify-content-center">
            <div class="c1 container-fluid">
                <div class="col-12 row">

                    <div class="col-3">
                        <h2 class="text-center"> 56 </h2>
                        <p class="text-center"> Total de Inmuebles </p>
                    </div>
                    <div class="col-3">
                        <h2 class="text-center"> 32 </h2>
                        <p class="text-center"> Inmuebles en Arriendo </p>
                    </div>
                    <div class="col-3 text-center">
                        <h2 class="text-center"> 19 </h2>
                        <p class="text-center"> Inmuebles en Venta </p>
                    </div>
                    <div class="col-3 text-center">
                        <h2 class="text-center"> 5 </h2>
                        <p class="text-center"> Inmuebles en Arriendo/Venta </p>
                    </div>

                </div>
            </div>

            <div> <img class="imagen" src="images/banner_estadisticas.jpg"> </div>

        </div>

    </section>


    <section id="nuestros_aliados" class="fondo_gris">

        <h2 style="padding: 50px 0 0 0;" class="text-center"> Nuestros Aliados </h2>

        <div class="d-flex flex-column margen_contenedores_index">
            <div class="d-flex justify-content-around">
                <div class=""> <img style="width:170px;" src="images/libertador.png" alt="..."> </div>
                <div class=""> <img style="width:170px;" src="images/afiansa.png" alt="..."> </div>
                <div class=""> <img style="width:170px;" src="images/fianzacredito.png" alt="..."> </div>
                <div class=""> <img style="width:170px;" src="images/simi.png" alt="..."> </div>
            </div>

            <div class="d-flex justify-content-around">
                <div class=""> <img style="width:170px;" src="images/olx.png" alt="..."> </div>
                <div class=""> <img style="width:170px;" src="images/ciencuadras.png" alt="..."> </div>
                <div class=""> <img style="width:170px;" src="images/mercadolibre.png" alt="..."> </div>
                <div class=""> <img style="width:170px;" src="images/prelegalassist.png" alt="..."> </div>
            </div>
        </div>

    </section>




    <section>

        <?php include 'layout/footer.php' ?>

    </section>

    <?php include 'layout/archivosfooter.php' ?>
    

</body>

</html>