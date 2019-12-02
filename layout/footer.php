<i class="fas fa-angle-double-up subir"></i>
<footer class="d-flex flex-column">

    <div>
        <h2 class="text-light text-center"> Contáctanos </h2>
    </div>

    <section>

        <div class="col-12">

            <div class="row">
                <h2 class="text-light my-4 text-center col-4"> Sede Bogotá D.C </h2>
                <h2 class="text-light my-4 text-center col-4"> Sede Ibagué </h2>
                <h2 class="text-light my-4 text-center col-4"> Nuestros Horarios </h2>
            </div>

        </div>

        <!--- ------------------------------------------------------------------------------ -->

        <div class="col-12">

            <div class="row">

                <div class="p-0 col-4 text-center">

                    <div class="p-0 col-12">
                        <div class="row">

                            <div class="p-0 col-3"></div>

                            <div class="p-0 col-7">
                                <ul class="p-0">

                                    <li style="color:darkgray" class="py-2 text-left">
                                        <i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['bogota']['direccion']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['direccion']['direccion'] ?>
                                    </li>

                                    <li class="py-2 text-left">
                                        <a style="color:darkgray" class="text-decoration-none" href="tel: <?php echo $datos_contacto['bogota']['telefono_fijo']['link'] ?>"> <i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['bogota']['telefono_fijo']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['telefono_fijo']['imprimir'] ?></a>
                                    </li>

                                    <li class="py-2 text-left text-decoration-none">
                                        <a style="color:darkgray" class="text-decoration-none" href="mailto: vyvinmobiliarias@gmail.com"><i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['bogota']['correo']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['correo']['correo'] ?></a>
                                    </li>

                                    <li class="py-2 text-left">
                                        <a style="color:darkgray" class=" text-decoration-none" href="tel: <?php echo $datos_contacto['bogota']['celular2']['link'] ?>"><i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['bogota']['celular2']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['celular2']['imprimir'] ?></a>
                                    </li>

                                    <li class="py-2 text-left">
                                        <a style="color:darkgray" class=" text-decoration-none" href="tel: <?php echo $datos_contacto['bogota']['celular']['link'] ?>"><i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['bogota']['celular']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['celular']['imprimir'] ?></a>
                                    </li>

                                    <li class="py-2 text-left">
                                        <a style="color:darkgray" class=" text-decoration-none" href="tel: <?php echo $datos_contacto['bogota']['whatsapp']['link'] ?>"><i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['bogota']['whatsapp']['icono'] ?>"> </i> <?php echo $datos_contacto['bogota']['whatsapp']['imprimir'] ?></a>
                                    </li>

                                </ul>

                            </div>

                            <div class="col-3"></div>
                        </div>
                    </div>
                </div>


                <div class="col-4 text-center">

                    <div class="col-12">
                        <div class="row">

                            <div class="col-3"></div>

                            <div class="col-9">
                                <ul class="p-0">

                                    <li style="color:darkgray" class="py-2 text-left">
                                        <i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['ibague']['direccion']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['direccion']['direccion'] ?>
                                    </li>

                                    <li class="py-2 text-left">
                                        <a style="color:darkgray" class="text-decoration-none" href="tel: <?php echo $datos_contacto['ibague']['telefono_fijo']['link'] ?>"> <i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['ibague']['telefono_fijo']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['telefono_fijo']['imprimir'] ?></a>
                                    </li>

                                    <li class="py-2 text-left text-decoration-none">
                                        <a style="color:darkgray" class="text-decoration-none" href="mailto: vyvinmobiliarias@gmail.com"><i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['ibague']['correo']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['correo']['correo'] ?></a>
                                    </li>

                                    <li class="py-2 text-left">
                                        <a style="color:darkgray" class=" text-decoration-none" href="tel: <?php echo $datos_contacto['ibague']['celular2']['link'] ?>"><i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['ibague']['celular2']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['celular2']['imprimir'] ?></a>
                                    </li>

                                    <li class="py-2 text-left">
                                        <a style="color:darkgray" class=" text-decoration-none" href="tel: <?php echo $datos_contacto['ibague']['celular']['link'] ?>"><i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['ibague']['celular']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['celular']['imprimir'] ?></a>
                                    </li>

                                    <li class="py-2 text-left">
                                        <a style="color:darkgray" class=" text-decoration-none" href="tel: <?php echo $datos_contacto['ibague']['whatsapp']['link'] ?>"><i style="color:lightgray" class="mr-2 color_rojo <?php echo $datos_contacto['ibague']['whatsapp']['icono'] ?>"> </i> <?php echo $datos_contacto['ibague']['whatsapp']['imprimir'] ?></a>
                                    </li>

                                </ul>

                            </div>

                            <div class="col-3"></div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 text-center col-4">
                    <i class="<?php echo $datos_contacto['bogota']['horario']['icono'] ?>"></i> <?php echo $datos_contacto['bogota']['horario']['horario'] ?>
                </div>

            </div>




        </div>

        <!--- ------------------------------------------------------------------------------ -->







        </div>

        </div>




        <!-- ------- Copyright -------------- -->


        <div class="padding_copyright justify-content-around align-items-center d-flex">
            <div></div>
            <div>
                <p class="m-0"> Diseñado y Desarrollado por <a class="text-decoration-none" target="_blank" href="https://www.dexcondigital.com/"> Dexcon Digital </a> ©Copyright 2019 para V&V Inmobiliaria. Todos los derechos reservados. </p>
            </div>
            <div class="text-align-center d-flex">
                <div class="margenx px-2"> <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>"><i style="width: 13px; height: 25px;" class="<?php echo $redes_sociales['facebook']['icono'] ?>"></i></a>
                </div>

                <div class="margenx px-2"> <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>"><i style="width: 22px; height: 25px;" class="<?php echo $redes_sociales['instagram']['icono'] ?>"></i></a>
                </div>
            </div>
        </div>

    </section>

</footer>