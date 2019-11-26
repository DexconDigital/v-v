<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $page = 'Inicio' ?>
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

    <section id="imagenes_principales">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
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
                        <h5 class="animacion2 text-uppercase">  El mejor lugar para encontrar tu Inmueble Ideal </h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide_1.jpg" class="d-block w-100" alt="Imagen carrusel principal">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animacion3 text-uppercase"> V&V Su mejor opción en finca raíz </h5>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="boton_imagen carousel-control-prev-icon" aria-hidden="true"></span>
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
        <form action="" class="margen_contenedores_index">
            <div class="text-center row">

                <div class="col-3"> 
                    <input class="codigo_input input-group" type="text" placeholder="Código"> 
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Tipo de Inmueble </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Tipo de Gestion </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Ciudad </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Barrio </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Precio Mínimo </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Precio Máximo </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Área Mínima </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Área Máxima </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Baños </option>
                    </select>
                </div>

                                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Alcobas </option>
                    </select>
                </div>

                <div class="col-3"> 
                    <select class="row custom-select custom-select-sm" name="" id="">
                        <option value="0" selected disabled> Garajes </option>
                    </select>
                </div>

                <div class="col-12"> 
                    <input class="boton_buscar btn" type="button" value="Buscar">
                </div>

            </div>
        </form>
    </section>

    <section id="propiedades_destacadas_imagenes" class="margen_contenedores_index">

        <h2 class="mt-5 mb-5 text-center"> Propiedades destacadas </h2>

      <div class="card-group">
            <div class="container-fluid aling-items-center">
                    <div class="col-12">
                        <div class="d-flex justify-content-around row">
                       
                            <div>
                                <div class="card" style="width: 20rem;">
                                    <img src="images/no_image.png" class="card-img-top" alt="...">
                                        <p class="tipo_de_inmueble card-text"> Tipo de Inmueble </p>
                                        <p class="tipo_de_renta card-text"> Estado </p>
                                        <p class="precio_inmueble card-text"> $1.500.000 </p>
                                    <div style="margin: 0 1%;" class="card-body">
    
                                        <h5 class="card-title"> Titulo de propiedad </h5>
                                        <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>
    
                                        <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li> 
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                        </ul>
    
                                    </div>  
                                </div>
                            </div>

                            <div>
                                <div class="card" style="width: 20rem;">
                                    <img src="images/no_image.png" class="card-img-top" alt="...">
                                        <p class="tipo_de_inmueble card-text"> Tipo de Inmueble </p>
                                        <p class="tipo_de_renta card-text"> Estado </p>
                                        <p class="precio_inmueble card-text"> $1.500.000 </p>
                                    <div style="margin: 0 1%;" class="card-body">
    
                                        <h5 class="card-title"> Titulo de propiedad </h5>
                                        <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>
    
                                        <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li> 
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                        </ul>
    
                                    </div>  
                                </div>
                            </div>

                            <div>
                                <div class="card" style="width: 20rem;">
                                    <img src="images/no_image.png" class="card-img-top" alt="...">
                                        <p class="tipo_de_inmueble card-text"> Tipo de Inmueble </p>
                                        <p class="tipo_de_renta card-text"> Estado </p>
                                        <p class="precio_inmueble card-text"> $1.500.000 </p>
                                    <div style="margin: 0 1%;" class="card-body">
    
                                        <h5 class="card-title"> Titulo de propiedad </h5>
                                        <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>
    
                                        <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li> 
                                            <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                        </ul>
    
                                    </div>  
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
      </div>
        
    </section>

    <section id="nuestros_servicios" class="margen_contenedores_index">

        <h2 class="text-center margin_100px"> Nuestros Servicios </h2>

        <div id="animacion_servicios" class="animacion_servicios d-flex justify-content-around flex-wrap">

            <div class="mb-5 d-flex flex-column align-items-center order-2">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['arriendos']?>"> </i> <br>
                <span class="titulo_servicios"><?php echo $texto_servicios ['arriendos']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['arriendos']['0'] ?> </p>
                <a href="servicios.php" class="boton_leer_mas"> Leer más </a>
            </div>

            <div class="mb-5 d-flex flex-column align-items-center order-4">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['ventas']?>"> </i> <br>
                <span class="titulo_servicios"><?php echo $texto_servicios ['ventas']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['ventas']['parrafos']['0'] ?> </p>
                <a href="servicios.php" class="boton_leer_mas"> Leer más </a>
            </div>

            <div class="mb-5 d-flex flex-column align-items-center order-6">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['avaluos']?>"> </i> <br>
                <span class="titulo_servicios"> <?php echo $texto_servicios ['avaluos']['titulo']?> </span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['avaluos']['parrafos']['0'] ?> </p>
                <a href="servicios.php" class="boton_leer_mas"> Leer más </a>
            </div>

            <div class="mb-5 d-flex flex-column align-items-center order-1">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['asesoria']?>"> </i> <br>
                <span class="titulo_servicios"><?php echo $texto_servicios ['asesoria']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['asesoria']['parrafo']?> </p>
            </div>

            <div class="mb-5 d-flex flex-column align-items-center order-3">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['corretaje']?>"> </i> <br>
                <span class="titulo_servicios"><?php echo $texto_servicios ['corretaje']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['corretaje']['parrafo']?> </p>                
            </div>

            <div class="mb-5 d-flex flex-column align-items-center order-5">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['reparaciones']?>"> </i> <br>
                <span class="titulo_servicios"> <?php echo $texto_servicios ['reparaciones']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['reparaciones']['parrafo']?> </p>
            </div>

        </div>

    </section>

    <section id="fomulario_aseguradoras" class="margen_contenedores_index" >

        <h2 class="margin_100px text-center"> Formulario Aseguradoras </h2>

       <div class="text-center justify-content-center container-fluid">
           <div class="row">

                <div class="aseguradoras_div col"> 
                    <a target="_blank" href="<?php echo $formularios_aseguradoras ['0']['ruta'] ?>"> <img src="images/libertador.png" alt=""> </a>
                </div>

            <div class="aseguradoras_div col"> 
                    <a target="_blank" href="<?php echo $formularios_aseguradoras ['2']['ruta'] ?>"> <img src="images/fianzacredito.png" alt=""> </a>
            </div>

            <div style="margin-top: -1%;" class="aseguradoras_div col"> 
                <div> 
                    <a target="_blank" href="<?php echo $formularios_aseguradoras ['1']['ruta'] ?>"> <img src="images/afiansa.png" alt=""> </a> 
                </div>  
            </div>

           </div>
       </div>


    </section>

    <section id="propiedades_destacadas_imagenes" class="margen_contenedores_index">

        <h2 class="mt-5 mb-5 text-center">  Últimas Noticias </h2>

        <div class="card-group">
        <div class="container-fluid aling-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-around row">
                
                        <div>
                            <div class="card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo de Inmueble </p>
                                    <p class="tipo_de_renta card-text"> Estado </p>
                                    <p class="precio_inmueble card-text"> $1.500.000 </p>
                                <div style="margin: 0 1%;" class="card-body">

                                    <h5 class="card-title"> Titulo de propiedad </h5>
                                    <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>

                                    <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li> 
                                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                    </ul>

                                </div>  
                            </div>
                        </div>

                        <div>
                            <div class="card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo de Inmueble </p>
                                    <p class="tipo_de_renta card-text"> Estado </p>
                                    <p class="precio_inmueble card-text"> $1.500.000 </p>
                                <div style="margin: 0 1%;" class="card-body">

                                    <h5 class="card-title"> Titulo de propiedad </h5>
                                    <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>

                                    <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li> 
                                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                    </ul>

                                </div>  
                            </div>
                        </div>

                        <div>
                            <div class="card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo de Inmueble </p>
                                    <p class="tipo_de_renta card-text"> Estado </p>
                                    <p class="precio_inmueble card-text"> $1.500.000 </p>
                                <div style="margin: 0 1%;" class="card-body">

                                    <h5 class="card-title"> Titulo de propiedad </h5>
                                    <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> Dirección </span> </li>

                                    <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> 0 </span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> 0 </span> </li>
                                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> 0 </span> </li> 
                                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2"> 0 </span> </li>
                                    </ul>

                                </div>  
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        </div>

    </section>

    <section id="nuestros_aliados" class="margen_contenedores_index">

        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">

                <div data-interval="5000" class="carousel-item active">
                    <div class="col-12 row p-0 m-0 align-items-center text-center">
                        <div class="col-4 text-center "> <a href="#"><img src="images/libertador.png" alt="..."></a> </div>
                        <div class="col-4 text-center "> <a href="#"><img src="images/afiansa.png" alt="..."></a> </div>
                        <div class="col-4 text-center "> <a href="#"><img src="images/fianzacredito.png" alt="..."></a> </div>
                    </div>
                    
                </div>

                <div data-interval="5000" class="carousel-item">
                    <div class="col-12 row p-0 m-0 align-items-center text-center">
                        <div class="col-4 text-center "> <a href="#"><img src="images/simi.png" alt="..."></a>  </div>
                        <div class="col-4 text-center "> <a href="#"><img src="images/olx.png" alt="..."></a> </div>
                        <div class="col-4 text-center "> <a href="#"><img src="images/ciencuadras.png" alt="..."></a>  </div>
                    </div>
                    
                </div>

                <div data-interval="5000" class="carousel-item">
                    <div class="col-12 row p-0 m-0 align-items-center text-center">
                        <div class="col-6"> <a href="#"><img src="images/mercadolibre.png" alt="..."></a> </div>
                        <div class="col-6"> <a href="#"><img src="images/prelegalassist.png" alt="..."></a> </div>
                    </div>
                
            </div>
        </div>

    </section>


    <section>
     <?php include 'layout/footer.php' ?> 
     <script src="js/animaciones_servicios.js"></script>
    </section>


    <?php include 'layout/archivosfooter.php' ?>

</body>
</html>