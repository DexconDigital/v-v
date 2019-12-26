<?php

require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $page = 'Detalle de inmueble' ?>
    <?php include 'variables/variables.php' ?>
    <?php include 'layout/archivosheader.php' ?>
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/carousel.tamanos.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <style>
        #map {
            height: 350px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>

    <title>
        <?php echo $page . ' | ' . $nombre_inmobiliaria; ?>
    </title>

    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>
</head>

<body>

    <section>
        <?php include 'layout/header.php' ?>
    </section>

    <section id="banner" class="align-content-center align-items-center d-flex justify-content-center">
        <div class="text-center align-items-center d-flex flex-column titulos">
            <h1> Detalle de Inmueble </h1>
        </div>
        <div id="banner_detalle_inmueble" class="imagen_detalles"></div>
    </section>


    <section id="informacion_inmueble" class="my-5">

        <div class="margen_contenedores_indexr1">
            <div class="row">

                <div id="accordion" class="m-0 p-0 col-12 col-md-7 col-lg-8 col-l-8">
                    <div class="container">
                        <div class="col-12 ">

                            <section id="header_detalles_inmueble" class="mt-4 mb-0">

                                <div class="row">

                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="font-weight-bold"> <?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?> </p>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="font-weight-bold color_azul text-left text-md-right text-lg-right text-xl-right"> PRECIO:
                                            <?php if ($r['Gestion'] == 'Arriendo') {
                                                echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                            } else if ($r['Gestion'] == 'Venta') {
                                                echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                            } else {
                                                echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                            }
                                            ?>
                                            </p>
                                        </h5>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="ml-3 pr-5 row">
                                        <i class="mr-2 <?php echo $datos_contacto['bogota']['direccion']['icono'] ?>"> </i>
                                        <p> <?php echo $r['barrio'] . ', ' . $r['ciudad'] ?></p>
                                    </div>

                                    <div class="text-muted">
                                        <p class="ml-3 ml-md-0 ml-lg-0 ml-xl-0  "> Código: <span> <?php echo $co; ?></span> </p>
                                    </div>



                                </div>

                                <?php echo
                                    '<ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-start">
                                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> ' . $r['AreaConstruida'] . 'm<sup>2</span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> ' . $r['banos'] . ' </span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> ' . $r['alcobas'] . ' </span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2">' . $r['garaje'] . ' </span> </li>
                                    </ul>' ?>

                            </section>

                            <!-- CARROUSEL IMAGENES -->
                            <section id="carrusel_imagenes" class="mb-3">

                                <div>
                                    <!-- main slider carousel items -->
                                    <section class="mt-3" id="slide-detalle">
                                        <?php
                                        if (isset($r['fotos'])) {
                                            for ($i = 0; $i < count($r['fotos']); $i++) {
                                                echo '<div class="contenedor-img">
                                <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                            </div>';
                                            }
                                        } else {
                                            echo  '<div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>';
                                        }
                                        ?>
                                    </section>
                                    <section class="vertical-center-4 slider" id="miniaturas">
                                        <?php
                                        if (isset($r['fotos'])) {
                                            for ($i = 0; $i < count($r['fotos']); $i++) {
                                                echo '<div class="contenedor-img">
                                <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                            </div>';
                                            }
                                        } else {
                                            echo  '<div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>';
                                        }
                                        ?>
                                    </section>
                                    <!-- MINIATURAS -->


                                </div>

                            </section>
                            <!-- CARROUSEL IMAGENES -->

                            <!----------BOTONES---------->

                            <div class="container contenedor_botones">

                                <div class="col-custom m-0 p-0">
                                    <div class="row mb-5 justify-content-between">

                                        <div class="p-0 mb-1 mb-md-1 mb-lg-1 mb-xl-0 col-custom">

                                            <button class="btn boton_detalle_inmueble margen_botones col-custom collapsed" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                                Descripción
                                            </button>

                                        </div>

                                        <div class="p-0 mb-1 mb-md-1 mb-lg-1 mb-xl-0 col-custom">

                                            <button class="btn boton_detalle_inmueble margen_botones col-custom collapsed boton_venta" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                                Características Internas
                                            </button>

                                        </div>

                                        <div class="p-0 mb-1 mb-md-1 mb-lg-1 mb-xl-0 col-custom">

                                            <button class="btn boton_detalle_inmueble margen_botones col-custom collapsed" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="collapseExample">
                                                Características Exteriores
                                            </button>

                                        </div>

                                        <div class="p-0 mb-1 mb-md-1 mb-lg-1 mb-xl-0 col-custom">

                                            <button class="btn boton_detalle_inmueble margen_botones col-custom collapsed" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseExample">
                                                Características Alrededores
                                            </button>

                                        </div>

                                        <div class="p-0 mb-1 mb-md-1 mb-lg-0 mb-xl-0 col-custom">

                                            <button class="btn boton_detalle_inmueble margen_botones col-12 collapsed" type="button" data-toggle="collapse" data-target="#cinco" aria-expanded="false" aria-controls="collapseExample">
                                                Video
                                            </button>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!----------BOTONES---------->

                            <!----------INFORMACION BOTONES---------->


                            <div class="margen_contenedor ml-0">

                                <div id="uno" class="ollapse show" aria-labelledby="uno" data-parent="#accordion">
                                    <h4 class="property-single-detail-title"><strong> Descripción </strong></h4>
                                    <p style="text-align: justify;"><?php echo $descripcion ?></p>

                                </div>

                            </div>

                            <div class="margen_contenedor">
                                <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                    <?php
                                    if (count($r['caracteristicasInternas']) > 0) {
                                        echo
                                            '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características Internas</strong></h4>
                                        <ul class="lista_caracteristicas">';
                                        for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                            $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                            echo '<li>' . $caracteristicas . '</li>';
                                        }
                                        echo  '</ul>
                                </div>
                            ';
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="margen_contenedor">
                                <div id="tres" class="collapse" aria-labelledby="tres" data-parent="#accordion">

                                    <?php
                                    if (count($r['caracteristicasExternas']) > 0) {
                                        echo
                                            '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características Externas</strong></h4>
                                        <ul class="lista_caracteristicas">';
                                        for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                            $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                            echo '<li>' . $caracteristicas . '</li>';
                                        }
                                        echo  '</ul>
                                </div>
                            ';
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="margen_contenedor">
                                <div id="cuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">

                                    <?php
                                    if (count($r['caracteristicasAlrededores']) > 0) {
                                        echo
                                            '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características de los alrededores</strong></h4>
                                        <ul class="lista_caracteristicas">';
                                        for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                            $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                            echo '<li>' . $caracteristicas . '</li>';
                                        }
                                        echo  '</ul>
                                </div>
                            ';
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="margen_contenedor">
                                <div id="cinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">

                                    <div id="referencia_inmueble" class="col-md-12 mt-3  ">
                                        <?php if ($r['video'] != "") {
                                            echo
                                                ' <h4 class="property-single-detail-title">Video</h4>
                                    <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Video</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                                        } ?>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <!----------INFORMACION BOTONES---------->

                    </div>


                   


                </div>

                <div class="rounded col-12 col-md-5 col-lg-4 col-l-4">
                    <div class="margen_contenedores_indexr_responsive">
    
                        <div class="row align-items-center justify-content-center my-3">
                            <div class="">
                                Comparte en:
                            </div>
                            <div class="iconos_detalle_inmueble d-flex ml-3">
    
                                <a class="icono_fb" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.vyvinmobiliaria.com%2FdetalleInmueble%3Fcodigo%3D<?php echo $co; ?>" target="_blank">
                                    <i class="mr-2 <?php echo $redes_sociales['facebook']['icono'] ?>"></i>
                                </a>
    
                                <a class="icono_tt" href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.vyvinmobiliaria.com%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank">
                                    <i class="mr-2 fab fa-twitter"></i>
                                </a>
    
                                <a class="icono_w" href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20www.vyvinmobiliaria.comdetalleInmueble.php?codigo%3d' . $co ?>" target="_blank">
                                    <i class="mr-2 <?php echo $datos_contacto['bogota']['whatsapp']['icono'] ?>"></i>
                                </a>
    
                            </div>
                        </div>
    
                        <div class="row justify-content-center">
                            <a href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=116-<?php echo $co ?>" target="_blank"><button class="btn boton_ficha"> Descargar Ficha </button> </a>
                        </div>
    
                        <div class="border-top mt-3 row">
    
                            <h5 class="text-center col-12 mt-3"> Contáctate con el Asesor </h5>
    
                            <div class="align-items-center col-12 justify-content-center m-0 mt-3 p-0 row">
    
                                <div class="col-7 imagen_asesor">
                                    <img src="<?php echo $asesor['FotoAsesor']; ?>" alt="">
                                </div>
    
                                <div class="col-12 parrafos_asesor mt-3">
    
                                    <p><i class="iconos_asesor fas fa-user"></i> <?php echo $asesor['ntercero']; ?></p>
                                    <p><i class="iconos_asesor fas fa-mobile-alt"></i> <a class="color_asesor" href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a></p>
                                    <p><i class="iconos_asesor fas fa-envelope"></i> <a class="color_asesor" href="mailto:<?php echo $asesor['correo']; ?>"><?php echo $asesor['correo']; ?></a></p>
                                </div>
                            </div>
    
    
    
                            <div class="col-12 mb-3">
    
                                <input type="text" class="my-2 border codigo_input form-control" id="exampleFormControlInput1" placeholder="Nombre y Apellido">
                                <input type="email" class="my-2 border codigo_input form-control" id="exampleFormControlInput1" placeholder="Correo Electrónico">
                                <input type="number" class="my-2 border codigo_input form-control" id="exampleFormControlInput1" placeholder="Telefono Celular">
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensaje" rows="3"></textarea>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1"> Confimo que he leído, entendido y acepto la <a class="a_politica" href="POLITICA_DE_PROTECCION_DE_DATOS.pdf" download="POLITICA_DE_PROTECCION_DE_DATOS.pdf">política de tratamiento de datos personales.</a> </label>
                                </div>
                                <div class="row justify-content-center">
                                    <button class="col-3 btn boton_ficha"> Enviar </button>
                                </div>
                            </div>
    
                        </div>
    
    
                    </div>
                </div>

                <div class="col-12 mt-5">
                        <h2 class="text-center mb-5"> Ubicación del inmueble </h2>
                        <div class="card mapa_tamaño">
                            <div class="">
                                <div id="map" class="w-100"></div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>

    <section id="propiedades_destacadas_imagenes" class="mb-3 margen_contenedores_index">

        <h2 class="my-5 text-center"> Propiedades Similares </h2>

        <div class="card-group">
            <div class="container-fluid aling-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-around row">

                        <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>

                    </div>
                </div>
            </div>
        </div>

    </section>



    <section>
        <?php include 'layout/footer.php' ?>
    </section>

    <?php include 'layout/archivosfooter.php' ?>


    <script src="js/slick.min.js"></script>

    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>

    <!-- mapa del inmueble -->
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>

</body>

</html>