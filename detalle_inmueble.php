<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $page = 'Inmuebles' ?>
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

    <section id="imagen_nosotros" class="margin_top_93px d-flex justify-content-center align-items-center">
        <h1> Inmuebles </h1>
        <img class="imagen" src="images/banner_inmuebles.jpg" alt="">
    </section>













    <section>
        <?php include 'layout/footer.php' ?>
    </section>

    <?php include 'layout/archivosfooter.php' ?>

</body>

</html>