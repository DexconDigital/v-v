<?php

require 'variables/variables.php';
require 'controllers/inmueblesControllers.php';

?>

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

    <section id="banner" class="align-content-center align-items-center d-flex justify-content-center">
        <div class="align-items-center d-flex flex-column titulos">
            <h1> Inmuebles </h1>
        </div>
        <div id="banner_inmuebles" class="imagen_detalles"></div>
    </section>

    <section id="formulario">
        <div action="" class="margen_contenedores_index">

            <div class="text-center row align-items-center justify-content-center">
                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <input type="number" class="codigo_input form-control" id="codigo_buscar" aria-describedby="emailHelp" placeholder="Código">
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <select class="codigo_input form-control" id="tipo_inmueble_buscar" select default>
                        <option value="0"> Tipo de Inmueble </option>
                    </select>
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <select class="codigo_input form-control" id="tipo_gestion_buscar" select default>
                        <option value="0"> Tipo de Gestión </option>
                    </select>
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <select class="codigo_input form-control" id="ciudad_buscar" select default>
                        <option value="0"> Ciudad </option>
                    </select>
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <select class="codigo_input form-control" id="barrio_buscar" select>
                        <option value="0"> Barrio </option>
                    </select>
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <input type="text" class="codigo_input form-control" id="precio_minimo_buscar" aria-describedby="emailHelp" placeholder="Precio Mínimo">
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <input type="text" class="codigo_input form-control" id="precio_maximo_buscar" aria-describedby="emailHelp" placeholder="Precio Máximo">
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <input type="text" class="codigo_input form-control" id="area_minima_buscar" aria-describedby="emailHelp" placeholder="Área Mínima">
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <input type="text" class="codigo_input form-control" id="area_maxima_buscar" aria-describedby="emailHelp" placeholder="Área Máxima">
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <input type="number" class="codigo_input form-control" id="banios_buscar" aria-describedby="emailHelp" placeholder="Baños">
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <input type="text" class="codigo_input form-control" id="alcobas_buscar" aria-describedby="emailHelp" placeholder="Alcobas">
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <input type="text" class="codigo_input form-control" id="garajes_buscar" aria-describedby="emailHelp" placeholder="Garajes">
                </div>

                <div class="text-center mt-4 w-100 col-12 col-md-3 col-lg-3 col-xl-3">
                    <input class="boton_buscar w-100 btn"  id="buscar" type="button" value="Buscar">
                </div>
            </div>

        </div>
    </section>

    <section id="propiedades_destacadas_imagenes" class="my-5 margen_contenedores_index">


        <div class="card-group">
            <div class="container-fluid aling-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-around row">

                        <!-- propiedades -->
                        <?php
                        if (is_array($api)) {
                            listar_inmuebles($api['Inmuebles']);
                        } else {
                            echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>



    </section>

    <div class="col-12 text-center">
        <?php if (is_array($api)) : ?>
            <ul class="pagination mt-4 align-items-end justify-content-center">
                <?php if ($paginator->getPrevUrl()) : ?>
                    <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                <?php endif; ?>
                <?php foreach ($paginator->getPages() as $page) : ?>
                    <?php if ($page['url']) : ?>
                        <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                            <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                        </li>
                    <?php else : ?>
                        <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php if ($paginator->getNextUrl()) : ?>
                    <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    </div>

    <!-- <section id="selector_paginas" class="my-5 margen_contenedores_index">

        <ul class="justify-content-center p-0 d-flex">
            <a class="text-decoration-none activ" href="#">
                <li class="rounded align-items-center d-flex item_lista justify-content-center">« </li>
            </a>

            <a class="text-decoration-none" href="#">
                <li class="rounded align-items-center d-flex item_lista justify-content-center"> 1 </li>
            </a>

            <a class="text-decoration-none" href="#">
                <li class="rounded align-items-center d-flex item_lista justify-content-center"> 2 </li>
            </a>

            <a class="text-decoration-none" href="#">
                <li class="rounded align-items-center d-flex item_lista justify-content-center"> 3 </li>
            </a>

            <a class="text-decoration-none" href="#">
                <li class="rounded align-items-center d-flex item_lista justify-content-center"> » </li>
            </a>

        </ul>
    </section> -->

    <section>
        <?php include 'layout/footer.php' ?>
    </section>

    <?php include 'layout/archivosfooter.php' ?>
    <script src="conexion_api/buscador.js"></script>

</body>

</html>