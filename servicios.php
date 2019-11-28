<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $page = 'Servicios' ?>
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
    <h1> Servicios </h1>
    <img class="imagen" src="images/banner_servicios.jpg" alt="">
</section>


<section id="nuestros_servicios" class="margen_contenedores_index">

    <h2 class="text-center margin_100px"> Portafolio de Servicios </h2>

    <div id="animacion_servicios" class="animacion_servicios2 d-flex justify-content-around flex-wrap">

        <div class="m-3 d-flex flex-column align-items-center">
            <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['arriendos']?>"> </i> <br>
            <span class="titulo_servicios"><?php echo $texto_servicios ['arriendos']['titulo']?></span>
            <p class="texto_servicios"> <?php echo $texto_servicios ['arriendos']['0'] ?> </p>
            <p class="texto_servicios"> <?php echo $texto_servicios ['arriendos']['1'] ?> </p>
            <p class="texto_servicios"> <?php echo $texto_servicios ['arriendos']['2'] ?> </p>
        </div>

        <div class="m-3 d-flex flex-column align-items-center">
            <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['ventas']?>"> </i> <br>
            <span class="titulo_servicios"><?php echo $texto_servicios ['ventas']['titulo']?></span>
            <p class="texto_servicios"> <?php echo $texto_servicios ['ventas']['parrafos']['0'] ?> </p>
            <p class="texto_servicios"> <?php echo $texto_servicios ['ventas']['parrafos']['1'] ?> </p>
        </div>

        <div class="m-3 d-flex flex-column align-items-center">
            <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['avaluos']?>"> </i> <br>
            <span class="titulo_servicios"> <?php echo $texto_servicios ['avaluos']['titulo']?> </span>
            <p class="texto_servicios"> <?php echo $texto_servicios ['avaluos']['parrafos']['0'] ?> </p>
            <p class="texto_servicios"> <?php echo $texto_servicios ['avaluos']['parrafos']['1'] ?> </p>
        </div>

        <div class="m-3 d-flex flex-column align-items-center">
            <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['asesoria']?>"> </i> <br>
            <span class="titulo_servicios"><?php echo $texto_servicios ['asesoria']['titulo']?></span>
            <p class="texto_servicios"> <?php echo $texto_servicios ['asesoria']['parrafo']?> </p>
        </div>

        <div class="m-3 d-flex flex-column align-items-center">
            <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['corretaje']?>"> </i> <br>
            <span class="titulo_servicios"><?php echo $texto_servicios ['corretaje']['titulo']?></span>
            <p class="texto_servicios"> <?php echo $texto_servicios ['corretaje']['parrafo']?> </p>                
        </div>

        <div class="m-3 d-flex flex-column align-items-center">
            <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['reparaciones']?>"> </i> <br>
            <span class="titulo_servicios"> <?php echo $texto_servicios ['reparaciones']['titulo']?></span>
            <p class="texto_servicios"> <?php echo $texto_servicios ['reparaciones']['parrafo']?> </p>
        </div>

    </div>

</section>

<section id="franja_inmueble" class="margen_contenedores_index">
    <div class="align-items-center d-flex franja justify-content-around my_100px" style="
    border-radius: 24px;
">
        
        <div class="text-light"> <h2> <i>¿Deseas publicar tu inmueble con nosotros?</i> </h2> </div>
        <a href="#" class="text-decoration-none text-white" download="FORMATO DE CONSIGNACION.pdf"> <i> Descargar formulario </i> </a>

    </div>
    
</section>









<section>
    <?php include 'layout/footer.php' ?>
</section>

<?php include 'layout/archivosfooter.php' ?>
    
</body>
</html>