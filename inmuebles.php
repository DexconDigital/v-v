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

<section id="imagen_nosotros" class="d-flex justify-content-center align-items-center">
    <h1> Inmuebles </h1>
    <img class="imagen" src="images/banner_inmuebles.jpg" alt="">
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

<section id="propiedades_destacadas_imagenes" class="my-5 margen_contenedores_index">

    


    <div class="card-group">
        <div class="container-fluid aling-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-around row">
                    
                        <div>
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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
                            <div class="my-3 card" style="width: 20rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                    <p class="tipo_de_inmueble card-text"> Tipo Inmueble </p>
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












<section>
    <?php include 'layout/footer.php' ?>
</section>

<?php include 'layout/archivosfooter.php' ?>
    
</body>
</html>