<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        V&V Inmobiliarias 
    </title>
    <?php include 'variables/variables.php' ?>
    <?php include 'layout/archivosheader.php' ?>


</head>
<body>

    <header id="header_numeros" class="d-flex justify-content-around align-items-center">
            
       <div class="telefonos d-flex ">
           <div> <a href="tel:<?php echo $datos_contacto ['bogota'] ['telefono_fijo']['link']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['telefono_fijo']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['telefono_fijo']['imprimir']?></a> </div>     
           <div> <a href="tel:<?php echo $datos_contacto ['bogota'] ['celular']['link']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['celular']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['celular']['imprimir']?></a> </div>     
           <div> <a href="tel:<?php echo $datos_contacto ['bogota'] ['celular2']['link']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['celular2']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['celular2']['imprimir']?></a> </div>    
        </div>

       <div class="whatsapp d-flex">
           <div> <a target="_blank" href="<?php echo $datos_contacto ['bogota'] ['whatsapp']['link']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['whatsapp']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['whatsapp']['imprimir']?></a> </div>     
           <div> <a href="mailto:<?php echo $datos_contacto ['bogota'] ['correo']['correo']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['correo']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['correo']['correo']?></a> </div>     
        </div>

    </header>
    
    <section id="logo_y_navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"> <img class="margin_logo" src="images/logo.png" alt="Logo V&V Inmobiliaria"> </div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(asdasddas)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Nosotros </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Inmuebles </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Clientes </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Contáctanos </a>
                    </li>
                </ul>
                <a href="<?php?>"><img class="logo_pse" src="images/logopse.png" alt="Pagos PSE"></a>
            </div>
        </nav>
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
                        <h5 class="animacion1"> BIENVENIDO A NUESTRO SITIO WEB </h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide_2.jpg" class="d-block w-100" alt="Imagen carrusel principal">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animacion2">  El mejor lugar para encontrar tu Inmueble Ideal </h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide_1.jpg" class="d-block w-100" alt="Imagen carrusel principal">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animacion3"> V&V Su mejor opción en finca raíz </h5>
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
        <form action="">
            <div class="text-center row">

                <div class="col-3"> 
                    <input class="input-group" type="text" placeholder="Código"> 
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
                    <input class="btn btn-outline-primary" type="button" value="Buscar">
                </div>

            </div>
        </form>
    </section>

    <section id="propiedades_destacadas_imagenes" class="margen_contenedores_index">

        <h2 class="mt-5 mb-5 text-center"> Propiedades destacadas </h2>

      <div class="card-group">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                       
                            <div class="col-4 mb-5">
                                <div class="card" style="width: 22rem;">
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

                            <div class="col-4 mb-5">
                                <div class="card" style="width: 22rem;">
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

                            <div class="col-4 mb-5">
                                <div class="card" style="width: 22rem;">
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

            <div class="d-flex flex-column align-items-center">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['arriendos']?>"> </i> <br>
                <span class="titulo_servicios"><?php echo $texto_servicios ['arriendos']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['arriendos']['0'] ?> </p>
                <p class="texto_servicios"> <?php echo $texto_servicios ['arriendos']['1'] ?> </p>
                <p class="texto_servicios"> <?php echo $texto_servicios ['arriendos']['2'] ?> </p>
            </div>

            <div class="d-flex flex-column align-items-center">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['ventas']?>"> </i> <br>
                <span class="titulo_servicios"><?php echo $texto_servicios ['ventas']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['ventas']['parrafos']['0'] ?> </p>
                <p class="texto_servicios"> <?php echo $texto_servicios ['ventas']['parrafos']['1'] ?> </p>
            </div>

            <div class="d-flex flex-column align-items-center">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['avaluos']?>"> </i> <br>
                <span class="titulo_servicios"> <?php echo $texto_servicios ['avaluos']['titulo']?> </span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['avaluos']['parrafos']['0'] ?> </p>
                <p class="texto_servicios"> <?php echo $texto_servicios ['avaluos']['parrafos']['1'] ?> </p>
            </div>

            <div class="mt-5 d-flex flex-column align-items-center">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['asesoria']?>"> </i> <br>
                <span class="titulo_servicios"><?php echo $texto_servicios ['asesoria']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['asesoria']['parrafo']?> </p>
            </div>

            <div class="mt-5 d-flex flex-column align-items-center">
                <i class="tamaño_iconos_servicios <?php echo $iconos_servicios['corretaje']?>"> </i> <br>
                <span class="titulo_servicios"><?php echo $texto_servicios ['corretaje']['titulo']?></span>
                <p class="texto_servicios"> <?php echo $texto_servicios ['corretaje']['parrafo']?> </p>                
            </div>

            <div class="mt-5 d-flex flex-column align-items-center">
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

    <section id="ultimas_noticias" class="margen_contenedores_index">

        <h2 class="mt-5 mb-5 text-center"> Últimas noticias </h2>

      <div class="card-group">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                       
                            <div class="col-4 mb-5">
                                <div class="card" style="width: 22rem;">
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

                            <div class="col-4 mb-5">
                                <div class="card" style="width: 22rem;">
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

                            <div class="col-4 mb-5">
                                <div class="card" style="width: 22rem;">
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

    <section id="nuestros_aliados">

            <h2 class="mt-5 mb-5 text-center"> Nuestros aliados </h2>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="margin_top carousel-inner">

                <div class="carousel-item  active">
                <a href="#"><img src="images/libertador.png" class="margin_left" alt="..."></a>
                </div>

                <div class="carousel-item ">
                <a href="#"><img src="images/afiansa.png" class="margin_left" alt="..."></a>
                </div>

                <div class="carousel-item ">
                <a href="#"><img src="images/fianzacredito.png" class="margin_left" alt="..."></a>
                </div>

                <div class="carousel-item ">
                <a href="#"><img src="images/simi.png" class="margin_left" alt="..."></a>
                </div>

                <div class="carousel-item ">
                <a href="#"><img src="images/olx.png" class="margin_left" alt="..."></a>
                </div>

                <div class="carousel-item ">
                <a href="#"><img src="images/ciencuadras.png" class="margin_left" alt="..."></a>
                </div>

                <div class="carousel-item ">
                <a href="#"><img src="images/mercadolibre.png" class="margin_left" alt="..."></a>
                </div>

                <div class="carousel-item ">
                <a href="#"><img src="images/prelegalassist.png" class="margin_left" alt="..."></a>
                </div>
            </div>

            </div>
    </section>


    <footer class="d-flex flex-column">
        
    
        <div>
            <h2 class="text-center"> Contáctanos </h2>
        </div>

        <div class="text-center container-fluid">
        <button type="button" class=" btn btn-primary"> Bogotá </button>
        <button type="button" class="botones btn btn-primary"> Ibagué </button>
        </div>

        <div class="justificar d-flex">
            <div class="m-5 parrafo_bogota"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel autem consequuntur cupiditate facere explicabo mollitia! Ex temporibus in nostrum commodi vitae quia dignissimos, sint quo neque nemo pariatur fugit, ea odio! Blanditiis, minima. Consectetur minima eos, fugit dolores accusamus perferendis? Reiciendis recusandae eaque quia, nobis facere aut et corrupti eius. Vitae asperiores incidunt nisi recusandae quo nulla tempore voluptatibus sed unde at corrupti eos provident optio molestiae nostrum quod, reiciendis ex! Maiores aspernatur dicta veniam accusantium dolores nemo expedita, ex earum asperiores eos magnam corrupti? Labore commodi provident quis voluptatum dolore ad officia quas. Hic voluptatem magni dignissimos culpa ullam. </div>
            <div class="m-5 parrafo_ibague"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis consequuntur quam maxime eum omnis. Nam, doloremque. Laborum corporis fugiat itaque facilis animi. Maiores perferendis iure vitae a, quaerat beatae ad velit, atque officia modi quidem impedit neque ab deleniti aliquam, eligendi ipsa. Repellendus nihil voluptatum exercitationem impedit, libero doloribus dolores tempora atque, harum iure dicta eum alias nobis magnam ab, reprehenderit quasi corrupti. Ea blanditiis exercitationem, facere, provident tenetur dolorum architecto in sunt tempora, sapiente consequuntur perferendis. Cum corrupti quisquam provident, suscipit ea deserunt ad. Quo nulla voluptatibus beatae nihil libero autem rem id molestiae at culpa, assumenda qui repellendus? </div>
        </div>

        <div class="padding_copyright justify-content-around align-items-center d-flex">
            <p style="margin: 0;">  Diseñado y Desarrollado por Dexcon Digital ©Copyright 2019 para V&V Inmobiliaria. Todos los derechos reservados. </p>
            <div class="text-align-center d-flex">
                <div class="margenx_50"> <a target="_blank" href="<?php echo $redes_sociales ['facebook']['link']?>"><i class="<?php echo $redes_sociales ['facebook']['icono'] ?>"></i></a>
                </div>

                <div class="margenx_50"> <a target="_blank" href="<?php echo $redes_sociales ['instagram']['link']?>"><i class="<?php echo $redes_sociales ['instagram']['icono'] ?>"></i></a>
                </div>
            </div>
        </div>



    </footer>










    <?php include 'layout/archivosfooter.php' ?>

</body>
</html>