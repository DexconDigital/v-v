<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $page = 'Nosotros' ?>
    <?php include 'variables/variables.php' ?>
    <?php include 'layout/archivosheader.php' ?>
    <title>
        <?php echo $page . ' | ' . $nombre_inmobiliaria; ?>
    </title>
</head>

<body>

    <section>
        <?php include 'layout/header.php' ?>
    </section>


    <section id="banner" class="align-content-center align-items-center d-flex justify-content-center">
        <div class="align-items-center d-flex flex-column titulos">
            <h1> Sobre Nosotros </h1>
        </div>
        <div id="banner_nosotros" class="imagen_detalles"></div>
    </section>

    <section style="margin: 0 5%;" id="nosotros" class="py-5 align-items-center justify-content-around">

        <div class="conainer-fluid">
            <div class="col-12">
                <div class="row align-items-center">

                    <div class="col-1"> </div>

                    <div class="col-sm-12 col-md-4">
                        <img src="images/logo.png" alt="">
                    </div>

                    <div class="col-1">

                    </div>

                    <div class="col-sm-12 col-md-6 px-4 text-center">
                        <h2 class="after_nosotros color_azul my-5"> <?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?> </h2>
                        <p> <?php echo $texto_quienes_somos['quienes_somos']['parrafos']['0'] ?> </p>
                        <p> <?php echo $texto_quienes_somos['quienes_somos']['parrafos']['1'] ?> </p>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section style="margin: 0 5%;" id="mision_vision" class="py-5 d-flex justify-content-around">

        <div class="container-fluid">
            <div class="col-12">
                <div class="row">

                    <div class="col-6 px-4 text-center">
                        <h2 class="after_nosotrosm color_azul mb-5"> <?php echo $texto_quienes_somos['mision']['titulo'] ?> </h2>
                        <p> <?php echo $texto_quienes_somos['mision']['parrafos']['0'] ?> </p>
                        <p> <?php echo $texto_quienes_somos['mision']['parrafos']['1'] ?> </p>
                        <p> <?php echo $texto_quienes_somos['mision']['parrafos']['2'] ?> </p>
                    </div>

                    <div class="col-6 px-4 text-center">
                        <h2 class="after_nosotrosv color_azul mb-5"> <?php echo $texto_quienes_somos['mision']['vision']['titulo'] ?> </h2>
                        <p> <?php echo $texto_quienes_somos['mision']['vision']['parrafo'] ?> </p>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!--     <section id="contador_estadisticas">

        <div class="align-items-center d-flex justify-content-center">
            <div class="c1 container-fluid">
                <div class="col-12 row" id="contador">

                    <div class="col-3">
                        <h2 id="counter-propertys" class="text-center">  </h2>
                        <p class="text-center"> Total de Inmuebles </p>
                    </div>
                    <div class="col-3">
                        <h2 id="counter-rent" class="text-center">  </h2>
                        <p class="text-center"> Inmuebles en Arriendo </p>
                    </div>
                    <div class="col-3 text-center">
                        <h2 id="counter-sale" class="text-center">  </h2>
                        <p class="text-center"> Inmuebles en Venta </p>
                    </div>
                    <div class="col-3 text-center">
                        <h2 id="counter-sale-rent" class="text-center">  </h2>
                        <p class="text-center"> Inmuebles en Arriendo/Venta </p>
                    </div>

                </div>
            </div>

            <div> <img class="imagen" src="images/banner_estadisticas.jpg"> </div>

        </div>

    </section> -->

    <section style="padding-bottom:100px;" id="valores_corporativos">

        <h2 style="padding: 100px 0;" class="color_azul text-center"> Valores Corporativos </h2>

        <div style="margin: 0 5%;">
            <div class="col-12 justify-content-around d-flex">
                <div style="width: 18rem;" class="mx-3 fondo_valores rounded d-flex flex-column p-2 m-0 align-items-center text-center">
                    <div class="my-2">
                        <h4 class="align-items-center d-flex"> <i class="color_azul fa fa-handshake"> </i>
                            <div class="ml-2 color_rojo"> <?php echo $texto_quienes_somos['mision']['valores']['parrafos']['0']['titulo'] ?></div>
                        </h4>
                    </div>
                    <div class="my-2">
                        <p class="text-center"> <?php echo $texto_quienes_somos['mision']['valores']['parrafos']['0']['parrafo'] ?></p>
                    </div>

                </div>

                <div style="width: 18rem;" class="mx-3 fondo_valores rounded d-flex flex-column p-2 m-0 align-items-center text-center">
                    <div class="my-2">
                        <h4 class="align-items-center d-flex"> <i class="color_azul fa fa-link"> </i>
                            <div class="ml-2 color_rojo"> <?php echo $texto_quienes_somos['mision']['valores']['parrafos']['1']['titulo'] ?></div>
                        </h4>
                    </div>
                    <div class="my-2">
                        <p class="text-center"> <?php echo $texto_quienes_somos['mision']['valores']['parrafos']['1']['parrafo'] ?></p>
                    </div>

                </div>

                <div style="width: 18rem;" class="mx-3 fondo_valores rounded d-flex flex-column p-2 m-0 align-items-center text-center">
                    <div class="my-2">
                        <h4 class="align-items-center d-flex"> <i class="color_azul fa fa-users"> </i>
                            <div class="ml-2 color_rojo"> <?php echo $texto_quienes_somos['mision']['valores']['parrafos']['2']['titulo'] ?></div>
                        </h4>
                    </div>
                    <div class="my-2">
                        <p class="text-center"> <?php echo $texto_quienes_somos['mision']['valores']['parrafos']['2']['parrafo'] ?></p>
                    </div>

                </div>

                <div style="width: 18rem;" class="mx-3 fondo_valores rounded d-flex flex-column p-2 m-0 align-items-center text-center">
                    <div class="my-2">
                        <h4 class="align-items-center d-flex"> <i class="color_azul fa fa-check-circle"> </i>
                            <div class="ml-2 color_rojo"> <?php echo $texto_quienes_somos['mision']['valores']['parrafos']['3']['titulo'] ?></div>
                        </h4>
                    </div>
                    <div class="my-2">
                        <p class="text-center"> <?php echo $texto_quienes_somos['mision']['valores']['parrafos']['3']['parrafo'] ?></p>
                    </div>

                </div>
            </div>
        </div>



    </section>

    <section>
        <?php include 'layout/footer.php' ?>
    </section>

    <?php include 'layout/archivosfooter.php' ?>

    <script src="js/countUp.min.js"></script>
    <script src="js/counter-propertys.js"></script>

</body>

</html>