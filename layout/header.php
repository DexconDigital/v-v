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

<header id="header_numeros">

    <div style="margin: 0 4%;" class="">
        <div style="height: 37px;" class="d-flex align-items-center container-fluid">
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-6 d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <a class="d-flex align-items-center" href="tel:<?php echo $datos_contacto['bogota']['telefono_fijo']['link'] ?>">
                                <i class="mr-2 <?php echo $datos_contacto['bogota']['telefono_fijo']['icono'] ?>"> </i>
                                <div class="celular1"> <?php echo $datos_contacto['bogota']['telefono_fijo']['imprimir'] ?> </div>
                            </a>
                        </div>
                        <div class="mr-3"> <a class="d-flex align-items-center" href="tel:<?php echo $datos_contacto['bogota']['celular']['link'] ?>"> <i class="mr-2 <?php echo $datos_contacto['bogota']['celular']['icono'] ?>"> </i>
                                <div class="celular1"><?php echo $datos_contacto['bogota']['celular']['imprimir'] ?></div>
                            </a>
                        </div>
                        <div class="mr-3"> <a class="d-flex align-items-center" href="tel:<?php echo $datos_contacto['bogota']['celular2']['link'] ?>"> <i class="mr-2 <?php echo $datos_contacto['bogota']['celular2']['icono'] ?>"> </i>
                                <div class="celular1"> <?php echo $datos_contacto['bogota']['celular2']['imprimir'] ?> </div>
                            </a>
                        </div>
                        <div> </div>
                        <div> </div>
                        <div> </div>
                        <div> </div>
                        <div> </div>
                        <div> </div>
                    </div>

                    <div class="col-6 d-flex justify-content-between">
                        <div> </div>
                        <div> </div>
                        <div> </div>
                        <div> </div>
                        <div> </div>
                        <div> </div>
                        <div class="mr-3"> <a class="d-flex align-items-center" target="_blank" href="<?php echo $datos_contacto['bogota']['whatsapp']['link'] ?>"> <i class="mr-2 <?php echo $datos_contacto['bogota']['whatsapp']['icono'] ?>"> </i>
                                <div class="celular1"> <?php echo $datos_contacto['bogota']['whatsapp']['imprimir'] ?></div>
                            </a> </div>
                        <div class="mr-3"> <a class="d-flex align-items-center" href="mailto:<?php echo $datos_contacto['bogota']['correo']['correo'] ?>"> <i class="mr-2 <?php echo $datos_contacto['bogota']['correo']['icono'] ?>"> </i>
                                <div class="celular1"> <?php echo $datos_contacto['bogota']['correo']['correo'] ?> </div>
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<section id="logo_y_navbar" class="py-4">

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
                    <a class=" nav-link" href="servicios.php"> Servicios </a>
                </li>

                <li class="nav-item">
                    <a class=" nav-link" href="inmuebles.php"> Inmuebles </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Clientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=116&tipo=2"> Arrendatarios </a>
                        <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=116&tipo=1"> Propietarios </a>
                        <a class="dropdown-item" href="#"> Pagos PSE </a>
                        <a class="dropdown-item" href="#" download="FORMATO DE CONSIGNACION.pdf"> Consignar Inmueble </a>

                </li>

                <li class="nav-item">
                    <a class=" nav-link" href="blog.php"> Blog </a>
                </li>

                <li class="nav-item">
                    <a class=" nav-link" href="contactanos.php"> Contáctanos </a>
                </li>

            </ul>
            <div style="width: 55px; height: 50px; "> <a href="#"> <img class="logo_pse" style="width: 100%;" src="images/logopse.png" alt="Pagos PSE"></a></div>
        </div>
    </nav>
</section>