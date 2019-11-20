<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <img class="logo_pse" src="images/logopse.png" alt="Pagos PSE">
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
                    <img src="images/slide_3.jpg" class="d-block w-100" alt="1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animacion1"> BIENVENIDO A NUESTRO SITIO WEB </h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide_2.jpg" class="d-block w-100" alt="2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animacion2">  El mejor lugar para encontrar tu Inmueble Ideal </h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide_1.jpg" class="d-block w-100" alt="3">
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

    <section id="propiedades_destacadas_menu">

        <div> <h2 class="mb-5 mt-5"> <b> Propiedades destacadas </b> </h2> </div>

        <div class="mb-5 d-flex justify-content-center">
                <input type="button" class="btn btn-outline-primary" value="Tipo de inmueble">
                <input type="button" class="btn btn-outline-primary" value="Tipo de gestion">
                <input type="button" class="btn btn-outline-primary" value="Ubicación">
                <input type="button" class="btn btn-outline-primary" value="Precio">
                <input type="button" class="btn btn-outline-primary" value="Código">
                <input type="button" class="btn btn-outline-primary" value="Área">
                <input type="button" class="btn btn-outline-primary" value="Baños">
                <input type="button" class="btn btn-outline-primary" value="Alcobas">
                <input type="button" class="btn btn-outline-primary" value="Garajes">   
        </div>
    </section>

    <section id="propiedades_destacadas_imagenes" class="margen_contenedores_index">
        <div class="container">
            <div class="col-12">    
                <div class="row">
                    <div class="mb-5 col-4">
                        <div class="card" style="width: 22rem;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </div>  
    </section>




    <?php include 'layout/archivosfooter.php' ?>

</body>
</html>