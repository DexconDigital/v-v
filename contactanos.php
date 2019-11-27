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

<section id="Contactanos_body" class="my-5 margen_contenedores_index">

    <h2 class="my-5 a123 text-center"> Contáctanos </h2>

    <div class="container">
        <div class="col-12">
            <div class="row">

                <div class="col-4">
                    <div>
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <i class="<?php echo $datos_contacto ['bogota']['direccion']['icono'] ?>" ></i>
                        <i class="<?php echo $datos_contacto ['bogota']['telefono_fijo']['icono'] ?>" ></i>
                        <i class="<?php echo $datos_contacto ['bogota']['correo']['icono'] ?>" ></i>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section id="mapa" class="">
    <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53502.19146275799!2d-74.12780978056577!3d4.669746378351968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1574885834025!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>

<section>
    <h1></h1>
</section>



<section>
    <?php include 'layout/footer.php' ?>
</section>

<?php include 'layout/archivosfooter.php' ?>


    
</body>
</html>