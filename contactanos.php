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

                <div class="col-8">

                        <div class="col-6 input-group mb-3">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="col-6 input-group mb-3">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
        <section id="servi_ar_ven_ava" class=" wow bounceInLeft " data-wow-delay=".7s" data-wow-duration="2s">
    <div id="accordion">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    
                    <div class="col-md-4 col-lg-4 col-12">
                        <h2 class="color_titulo">Arriendo</h2>
                        <p>
                            <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO ARRENDAR MI PROPIEDAD
                            </button>
                        </p>
                    </div>
                    
                    <div class="col-md-4 col-lg-4 col-12">
                        <h2 class="color_titulo">Venta</h2>
                        <p>
                            <button class="btn btn-primary col-12 collapsed boton_venta" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO VENDER
                            </button>
                        </p>
                    </div>
                    
                
                <div class="col-12">
                    
                    <div class="card">
                        <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
                            <div class="card-body mb-3">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 propiedad"><img class="imagen" src="images/Arrienda_propiedad.jpeg" alt=""></div>
                                    <div class="col-lg-8 col-12 col-md-12 text-justify"> En SU PROPIEDAD INMOBILIARIA somos expertos en brindarte el mejor acompañamiento en la búsqueda de tu inmueble ideal hasta finalizar el proceso con la entrega de este. Nuestros aliados hacen que el proceso de arriendo sea más fácil y práctico a la hora de presentar los documentos para tu estudio. Tenemos en promedio respuesta en trámites en menos de 24 horas. Para tranquilidad de nuestros clientes, nuestros contratos y procesos están avalados por la secretaria de gobierno y La Lonja de Propiedad raíz. Nuestros asesores, están totalmente a disposición de nuestros clientes para la búsqueda de tu inmueble ideal según tus necesidades y requerimientos.</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="titulos"> <strong>EN ADMINISTRACIÓN - TU ARRIENDO SEGURO</strong></h5>
                                        <ul class="pl-0">
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>PRECIO UNICO mensual del 10% más IVA de comisión INCLUIDO el Seguro/Fianza de Arrendamiento.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Realizamos estudios de crédito al arrendatario con respuesta en menos de 4-8 horas en promedio. <small><strong>Aplica términos y condiciones.</strong></small></p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Tenemos la opción de ADELANTAR los primeros 3 meses de arriendo. <small><strong>Aplica términos y condiciones.</strong></small></p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>El contrato de arredramiento contara con una póliza de ASEGURADORAS/AFIANZADORAS durante toda la vigencia del contrato.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Ofrecemos el servicio de pago de la administración de la copropiedad de tu inmueble (Si aplica). <small><strong>Aplica términos y condiciones.</strong></small></p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Pago 100% de la cláusula penal si el inquilino abandona el inmueble sin justa causa ante de que finalice el contrato.</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h5 class="titulos"> <strong>CORRETAJE</strong></h5>
                                        <ul class="pl-0">
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Administras tu arriendo directamente, SU PROPIEDAD INMOBILIARIA te proporcionara el cliente. El Precio de este corresponde a un (1) Canon de arrendamiento más IVA.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Prestamos asesoría en los trámites de estudio de documentos de los futuros arrendatarios de tu inmueble ante la Aseguradora/ Afianzadora.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Realizamos los contratos de arrendamientos.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Ejecutamos un detallado inventario INICIAL fotográfico y escrito del inmueble.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Asesoría jurídica durante el trámite.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <h2 style="margin-bottom: 0px;"><a class="enlace" href="publicaTuInmueble">PUBLICA TU INMUEBLE AQUÍ</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  
                    <div class="card">
                        <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                            <div class="card card-body mb-3">
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-md-12 propiedad"><img class="imagen" src="images/avaluos.jpeg" alt=""></div>
                                    <div class="col-12 col-lg-8 col-md-12 text-justify"> En SU PROPIEDAD INMOBILIARIA contamos con un grupo de Avaluadores altamente capacitados y calificados para ofrecerles un servicio de calidad a los clientes. Nuestros Avaluadores cuentan con el Registro Nacional de Avalúos R.N.A. y el Registro Abierto de Avaluadores A.N.A. <br>
                                        En nuestros Avalúos tenemos diferentes maneras y métodos de hacer la estimación más aproximada del valor del inmueble ya sea para compra o venta.

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <div class="col-12 text-justify"> Nuestro personal está constantemente actualizándose acerca de los precios, de acuerdo al mercado inmobiliario y su comportamiento, tanto para venta, como para arriendo.
                                            Para realizar el avaluó solo necesitamos una copia de la escritura de compraventa del bien, en cuanto al precio este varía de acuerdo al área del inmueble.
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                 </div>
        
                        
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</section>

<section>
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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