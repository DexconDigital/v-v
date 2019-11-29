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
                        <a class="text-center m-4 btn boton_buscar2 list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" >Bogotá</a>
                        <a class="text-center m-4 btn boton_buscar2 list-group-item list-group-item-action " id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile" >Ibagué</a>
                        </div>

                    </div>

                    <!-- ------- SECCION 1 -------------- -->

                    <!-- ------- SECCION 2 -------------- -->

                        <div class="tab-content" id="nav-tabContent">

                            <div class="fade  tab-pane active show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

                                <div class="my-5 d-flex justify-content-center">
                                    <div class="text-center col-4"><i class="<?php echo $datos_contacto ['bogota']['direccion']['icono'] ?>" > </i> <p class="text-center"> Dirección Bogotá </p></div>
                                    <div class="text-center col-4"><i class="<?php echo $datos_contacto ['bogota']['telefono_fijo']['icono'] ?>" ></i> <p class="text-center"> Telefono Bogotá </p> </div>
                                    <div class="text-center col-4"><i class="<?php echo $datos_contacto ['bogota']['correo']['icono'] ?>" ></i> <p class="text-center"> Correo Bogotá </p> </div>
                                </div>

                            </div>
                            
                                
                            
                            <div class="fade tab-pane" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

                                <div class="my-5 d-flex justify-content-center">
                                    <div class="text-center col-4"><i class="<?php echo $datos_contacto ['bogota']['direccion']['icono'] ?>" > </i> <p class="text-center"> Dirección Ibagué </p></div>
                                    <div class="text-center col-4"><i class="<?php echo $datos_contacto ['bogota']['telefono_fijo']['icono'] ?>" ></i> <p class="text-center"> Telefono Ibagué </p> </div>
                                    <div class="text-center col-4"><i class="<?php echo $datos_contacto ['bogota']['correo']['icono'] ?>" ></i> <p class="text-center"> Correo Ibagué </p> </div>
                                </div>


                            </div>
                                    </div>

                                </div>
                            </div>
    </div>

</section>

<section id="mapa" class="">
    <iframe style="width: 100%; height: 300px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53502.19146275799!2d-74.12780978056577!3d4.669746378351968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1574885834025!5m2!1ses!2sco"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>


<section>







<section>
    <?php include 'layout/footer.php' ?>
</section>

<?php include 'layout/archivosfooter.php' ?>


    
</body>
</html>