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

<header id="header_numeros" class="d-flex justify-content-around align-items-center">
            
    <div class="container-fluid">
        <div class="col-12">
            <div class="container-fluid barra_navegadora1 row d-flex justify-content-between">

                <div class="col-3 d-flex justify-content-around">
                    <div> <a href="tel:<?php echo $datos_contacto ['bogota'] ['telefono_fijo']['link']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['telefono_fijo']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['telefono_fijo']['imprimir']?></a> </div>     
                    <div> <a href="tel:<?php echo $datos_contacto ['bogota'] ['celular']['link']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['celular']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['celular']['imprimir']?></a> </div>     
                    <div> <a href="tel:<?php echo $datos_contacto ['bogota'] ['celular2']['link']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['celular2']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['celular2']['imprimir']?></a> </div>    
                </div>
                 
                <div class="col-3 d-flex justify-content-around">
                    <div> <a target="_blank" href="<?php echo $datos_contacto ['bogota'] ['whatsapp']['link']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['whatsapp']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['whatsapp']['imprimir']?></a> </div>     
                    <div> <a href="mailto:<?php echo $datos_contacto ['bogota'] ['correo']['correo']?>"> <i class="mr-2 <?php echo $datos_contacto ['bogota']['correo']['icono'] ?>"> </i><?php echo $datos_contacto ['bogota'] ['correo']['correo']?></a> </div>     
                </div>

            </div>
        </div>
    </div>
     
</header>

<section id="logo_y_navbar">
        <nav class="barra_navegadora2 navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"> <img class="margin_logo" src="images/logo.png" alt="Logo V&V Inmobiliaria"> </div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio <span class="sr-only">  </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php"> Nosotros </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="servicios.php"> Servicios </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inmuebles.php"> Inmuebles </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php"> Clientes </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php"> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactanos.php"> Contáctanos </a>
                    </li>
                </ul>
                <a href="<?php?>"><img class="logo_pse" src="images/logopse.png" alt="Pagos PSE"></a>
            </div>
        </nav>
</section>