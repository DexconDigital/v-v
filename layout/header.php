<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>

<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->

<div style="box-shadow: 0 2px 6px 0 black;" class="sticky-top position-fixed w-100">
    <header id="header_numeros">

        <div style="margin: 0 4%;" class="">
            <div style="height: 37px;" class="d-flex align-items-center container-fluid">
                <div class="col-12">
                    <div class="row justify-content-around align-items-center">

                        <div class="m-0 mr-md-3 mr-lg-3 mr-xl-3">
                            <a class="d-flex align-items-center" href="tel:<?php echo $datos_contacto['bogota']['telefono_fijo']['link'] ?>">
                                <i class="mr-0 mr-md-2 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['bogota']['telefono_fijo']['icono'] ?>"> </i>
                                <div class="celular1"> <?php echo $datos_contacto['bogota']['telefono_fijo']['imprimir'] ?> </div>
                            </a>
                        </div>

                        <div class="m-0 mr-md-3 mr-lg-3 mr-xl-3"> <a class="d-flex align-items-center" href="tel:<?php echo $datos_contacto['bogota']['celular']['link'] ?>"> <i class="mr-0 mr-md-2 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['bogota']['celular']['icono'] ?>"> </i>
                                <div class="celular1"><?php echo $datos_contacto['bogota']['celular']['imprimir'] ?></div>
                            </a>
                        </div>

                        <div class="m-0 mr-md-3 mr-lg-3 mr-xl-3"> <a class="d-flex align-items-center" href="tel:<?php echo $datos_contacto['bogota']['celular2']['link'] ?>"> <i class="mr-0 mr-md-2 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['bogota']['celular2']['icono'] ?>"> </i>
                                <div class="celular1"> <?php echo $datos_contacto['bogota']['celular2']['imprimir'] ?> </div>
                            </a>
                        </div>

                        <div class="m-0 mr-md-3 mr-lg-3 mr-xl-3">
                            <a class="d-flex align-items-center" target="_blank" href="<?php echo $datos_contacto['bogota']['whatsapp']['link'] ?>"> <i class="mr-0 mr-md-2 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['bogota']['whatsapp']['icono'] ?>"> </i>
                                <div class="celular1"> <?php echo $datos_contacto['bogota']['whatsapp']['imprimir'] ?></div>
                            </a>
                        </div>

                        <div class="m-0 mr-md-3 mr-lg-3 mr-xl-3">
                            <a class="d-flex align-items-center" href="mailto:<?php echo $datos_contacto['bogota']['correo']['correo'] ?>"> <i class="mr-0 mr-md-2 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['bogota']['correo']['icono'] ?>"> </i>
                                <div class="celular1"> <?php echo $datos_contacto['bogota']['correo']['correo'] ?> </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>



    <section id="logo_y_navbar" class="bg-light w-100">

        <nav class="barra_navegadora2 margen_contenedores_index navbar navbar-expand-lg navbar-light">

            <div><a class="navbar-brand" href="index.php"> <img style="width: 160px;" src="images/logo.png" alt="Logo V&V Inmobiliaria"> </a></div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="justify-content-around collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto font-weight-bold ">

                    <li class="nav-item">
                        <a class=" nav-link " href="index.php">Inicio <span class="sr-only"> </span></a>
                    </li>

                    <li class="nav-item">
                        <a class=" nav-link" href="nosotros.php"> Nosotros </a>
                    </li>

                    <li class="nav-item">
                        <a class=" nav-link" href="inmuebles.php?"> Inmuebles </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Clientes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a target="_blank" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=116&tipo=2"> Arrendatarios </a>
                            <a target="_blank" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=116&tipo=1"> Propietarios </a>
                            <a class="dropdown-item" target="_blank" href="https://www.e-collect.com/customers/pagosinmobiliariav&v.htm"> Pagos PSE </a>
                            <a class="dropdown-item" target="_blank" href="FORMATO_DE_CONSIGNACION.pdf"> Consignar Inmueble </a>

                    </li>

                    <li class="nav-item">
                        <a class=" nav-link" href="contactanos.php"> Contáctanos </a>
                    </li>

                </ul>

                <div class="alinear_izquierda_iconos row align-items-center justify-content-start m-0">

                    <div style="height: 50px; " class="d-flex align-items-center justify-content-center">
                        <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>"><i style="width: 22px; height: 80%;" class="icono_facebook <?php echo $redes_sociales['facebook']['icono'] ?>"></i></a>
                    </div>

                    <div class="div_insta ml-2 mr-1" style="width: 42px;" class="justify-content-center align-items-center d-flex margenx px-2 mr-2">
                        <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>"> <img style="width:100%" src="images/insta_logo.png" alt=""> </i></a>
                    </div>

                    <div class="div_insta" style="width: 55px; height: 50px;">
                        <a target="_blank" href="https://www.e-collect.com/customers/pagosinmobiliariav&v.htm">
                            <img style="width: 100%;" src="images/logopse.png" alt="Pagos PSE">
                        </a>
                    </div>

                </div>

            </div>
        </nav>
    </section>
</div>