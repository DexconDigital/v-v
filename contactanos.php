<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <?php $page = 'Contáctanos' ?>
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
            <h1> Contáctanos </h1>
        </div>
        <div id="banner_contactanos"class="imagen_detalles"></div>
    </section>

    <section id="Contactanos_body" class=" margen_contenedores_index">



        <div style="margin: 100px 0 100px 0;" class="">

        
            <div class="col-12">
                <div class="row">

                    <div class="col-12 col-lg-8 col-xl-8">

                        <section id="formulario2">
                            <form action="" class="margen_contenedores_index">

                                <div class="text-center row">

                                    <div class="my-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                        <input type="text" class="border codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre completo" required>
                                    </div>

                                    <div class="my-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                        <input type="text" class="border codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico" required>
                                    </div>

                                    <div class="mb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                        <input type="text" class="border codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asunto del mensaje" required>
                                    </div>

                                    <div class="mb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                        <input type="text" class="border codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número de contacto" required>
                                    </div>

                                    <div class="mb-3 col-12 form-group d-flex align-items-start">
                                        <label for="exampleFormControlTextarea1"></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ingresa tu mensaje" rows="3"></textarea>
                                    </div>

                                    <div class="ml-3 form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1"> Confimo que he leído, entendido y acepto la <span class="tratamiento"><a href="POLITICA_DE_PROTECCION_DE_DATOS.pdf" download="POLITICA_DE_PROTECCION_DE_DATOS.pdf"></span>política de tratamiento de datos personales.</a> </label>
                                    </div>


                                    <div class="m-0 justify-content-center justify-content-lg-start justify-content-xl-start col-12 mb-3 row">
                                        <input class="boton_buscar btn" type="button" value="Enviar">
                                    </div>

                                </div>
                            </form>
                        </section>

                    </div>

                    <div class="col-12 col-lg-4 col-xl-4">

                        <!--------- SECCION 1 -------------- --  -->

                        <div class="justify-content-center row">
                            <div class="flex-row list-group" id="list-tab" role="tablist">
                                <a class="text-center my-4 mx-1 btn boton_buscar list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Bogotá</a>
                                <a class="text-center my-4 mx-1 btn boton_buscar list-group-item list-group-item-action " id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Ibagué</a>
                            </div>

                        </div>

                        <!-- ------- SECCION 1 -------------- -->

                        <!-- ------- SECCION 2 -------------- -->

                        <div class="d-flex justify-content-center tab-content" id="nav-tabContent">

                            <div class="fade tab-pane active show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

                                <div class="col-12">
                                    <div class="row">
                                        <ul class="p-0">

                                            <li class="py-2 text-left text-dark">
                                                <i class="color_rojo <?php echo $datos_contacto['bogota']['direccion']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['direccion']['direccion'] ?>
                                            </li>

                                            <li class="py-2 text-left">
                                                <a class="text-dark text-decoration-none" href="tel: <?php echo $datos_contacto['bogota']['telefono_fijo']['link'] ?>"> <i class="color_rojo <?php echo $datos_contacto['bogota']['telefono_fijo']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['telefono_fijo']['imprimir'] ?></a>
                                            </li>

                                            <li class="py-2 text-left text-dark text-decoration-none">
                                                <a class="text-decoration-none text-dark" href="mailto: vyvinmobiliarias@gmail.com"><i class="color_rojo <?php echo $datos_contacto['bogota']['correo']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['correo']['correo'] ?></a>
                                            </li>

                                            <li class="py-2 text-left">
                                                <a class=" text-dark text-decoration-none" href="tel: <?php echo $datos_contacto['bogota']['celular2']['link'] ?>"><i class="color_rojo <?php echo $datos_contacto['bogota']['celular2']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['celular2']['imprimir'] ?></a>
                                            </li>

                                            <li class="py-2 text-left">
                                                <a class=" text-dark text-decoration-none" href="tel: <?php echo $datos_contacto['bogota']['celular']['link'] ?>"><i class="color_rojo <?php echo $datos_contacto['bogota']['celular']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['celular']['imprimir'] ?></a>
                                            </li>

                                            <li class="py-2 text-left">
                                                <a class=" text-dark text-decoration-none" href="tel: <?php echo $datos_contacto['bogota']['whatsapp']['link'] ?>"><i class="color_rojo <?php echo $datos_contacto['bogota']['whatsapp']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['whatsapp']['imprimir'] ?></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div> <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4482482814847!2d-74.06805103769926!3d4.691905941069607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9adad974c0d7%3A0x4afb1aa35688bda!2sTv.%2058%20%23106-36%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1575212870316!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>


                            </div>



                            <div class="fade tab-pane" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

                                <div class="col-12">
                                    <div class="row">
                                        <ul class="p-0">

                                            <li class="py-2 text-left text-dark">
                                                <i class="color_azul <?php echo $datos_contacto['ibague']['direccion']['icono'] ?>"> </i> CR 5 No. 29 – 32 LC 231 COMERCIAL <br> LA QUINTA
                                            </li>

                                            <li class="py-2 text-left">
                                                <a class="text-dark text-decoration-none" href="tel: <?php echo $datos_contacto['ibague']['telefono_fijo']['link'] ?>"> <i class="color_azul <?php echo $datos_contacto['ibague']['telefono_fijo']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['telefono_fijo']['imprimir'] ?></a>
                                            </li>

                                            <li class="py-2 text-left text-dark text-decoration-none">
                                                <a class="text-decoration-none text-dark" href="mailto: vyvinmobiliarias@gmail.com"><i class="color_azul <?php echo $datos_contacto['ibague']['correo']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['correo']['correo'] ?></a>
                                            </li>

                                            <li class="py-2 text-left">
                                                <a class=" text-dark text-decoration-none" href="tel: <?php echo $datos_contacto['ibague']['celular2']['link'] ?>"><i class="color_azul <?php echo $datos_contacto['ibague']['celular2']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['celular2']['imprimir'] ?></a>
                                            </li>

                                            <li class="py-2 text-left">
                                                <a class=" text-dark text-decoration-none" href="tel: <?php echo $datos_contacto['ibague']['celular']['link'] ?>"><i class="color_azul <?php echo $datos_contacto['ibague']['celular']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['celular']['imprimir'] ?></a>
                                            </li>

                                            <li class="py-2 text-left">
                                                <a class=" text-dark text-decoration-none" href="tel: <?php echo $datos_contacto['ibague']['whatsapp']['link'] ?>"><i class="color_azul <?php echo $datos_contacto['ibague']['whatsapp']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['whatsapp']['imprimir'] ?></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.4615853917153!2d-75.22373467078775!3d4.439690499798367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38c4ed1fb630eb%3A0xaaa94d9591fd6b43!2sCra.%205%20%2329-32%2C%20Ibagu%C3%A9%2C%20Tolima!5e0!3m2!1ses!2sco!4v1575210850711!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


                            </div>




                        </div>

                    </div>

                </div>
            </div>


    </section>



    <section>
        <div style="width:100%; height: 100px">

        </div>
    </section>


    <section>
        <?php include 'layout/footer.php' ?>
    </section>

    <?php include 'layout/archivosfooter.php' ?>



</body>

</html>