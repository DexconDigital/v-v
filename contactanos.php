<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $page = 'Contactanos' ?>
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

    <section id="imagen_nosotros" class="d-flex justify-content-center align-items-center">
        <h1> Contáctanos </h1>
        <img class="imagen" src="images/banner_contacto.jpg" alt="">
    </section>

    <section id="Contactanos_body" class=" margen_contenedores_index">



        <div class="my_100px container">
            <div class="col-12">
                <div class="row">

                    <div class="col-8">

                        <section id="formulario2">
                            <form action="" class="margen_contenedores_index">

                                <div class="text-center row">

                                    <div class="my-3 col-6">
                                        <input type="text" class="codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre Completo">
                                    </div>

                                    <div class="my-3 col-6">
                                        <input type="text" class="codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electronico">
                                    </div>

                                    <div class="my-3 col-6">
                                        <input type="text" class="codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo del mensaje">
                                    </div>

                                    <div class="my-3 col-6">
                                        <input type="text" class="codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número de contacto">
                                    </div>

                                    <div class="my-3 col-12">
                                        <input type="textarea" style="width:100%; height:100px" class="codigo_input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu mensaje">
                                    </div>


                                    <div class="my-3 col-12">
                                        <input class="boton_buscar btn" type="button" value="Buscar">
                                    </div>

                                </div>
                            </form>
                        </section>

                    </div>

                    <div class="col-4">

                        <!-- ------- SECCION 1 -------------- -->

                        <div class="justify-content-center row">
                            <div class="flex-row list-group" id="list-tab" role="tablist">
                                <a class="text-center m-4 btn boton_buscar2 list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Bogotá</a>
                                <a class="text-center m-4 btn boton_buscar2 list-group-item list-group-item-action " id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Ibagué</a>
                            </div>

                        </div>

                        <!-- ------- SECCION 1 -------------- -->

                        <!-- ------- SECCION 2 -------------- -->

                        <div class="tab-content" id="nav-tabContent">

                            <div class="fade  tab-pane active show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

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

                            </div>



                            <div class="fade tab-pane" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

                                <ul class="p-0">

                                    <li class="py-2 text-left text-dark">
                                        <i class="color_azul <?php echo $datos_contacto['ibague']['direccion']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['direccion']['direccion'] ?>
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

                    </div>
                </div>
            </div>

    </section>

    <section id="mapa" class="">
        <iframe style="margin-bottom: -7px; padding: 0; width: 100%; height: 300px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53502.19146275799!2d-74.12780978056577!3d4.669746378351968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1574885834025!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>


    <section>







        <section>
            <?php include 'layout/footer.php' ?>
        </section>

        <?php include 'layout/archivosfooter.php' ?>



</body>

</html>