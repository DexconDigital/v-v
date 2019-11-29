<i class="fas fa-angle-double-up subir"></i>
<footer class="d-flex flex-column">
        
    <div>
        <h2 class="text-center"> Contáctanos </h2>
    </div>

    <section>
 <!--        <section id="servi_ar_ven_ava" class=" wow bounceInLeft " data-wow-delay=".7s" data-wow-duration="2s">
    <div id="accordion">
        <div class="container">
            <div class="col-12">
                <div class="row justify-content-around">
                    
                    <div class="">
                        
                        <p>
                            <button class="boton_buscar btn  col-12 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                <span style="color:white;" class="fas fa-chevron-up"></span> Bogotá
                            </button>
                        </p>
                    </div>
                    
                    <div class="">
                        
                        <p>
                            <button class="boton_buscar btn  col-12 collapsed boton_venta" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                <span style="color:white;" class="fas fa-chevron-up"></span> Ibagué
                            </button>
                        </p>
                    </div>
                    
                
                <div class="col-12">
                    
                        <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
                    
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus adipisci quis saepe consectetur laudantium, accusantium ab odio aliquid illum possimus facere at odit veritatis aspernatur iusto exercitationem, voluptates eum quibusdam quam temporibus tenetur beatae, nostrum provident. Eum magnam cum, veniam, cumque dolore voluptate perspiciatis iste officiis, adipisci harum odio ad? </p>
                        </div>       
                    
                  
                    
                        <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                           <p> LOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLSLOREM DSKLJFASDKLJ SDALFKJSDLKFJAKLS </p>

                        </div>
                    </div>
                </div>
                 </div>
        
                        
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- ------- SECCION 1 -------------- -->

<div class="justify-content-center row">
    <div class="flex-row list-group" id="list-tab" role="tablist">
      <a class="text-center m-4 btn boton_buscar2 list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" >Bogotá</a>
      <a class="text-center m-4 btn boton_buscar2 list-group-item list-group-item-action " id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile" >Ibagué</a>
    </div>

</div>

<!-- ------- SECCION 1 -------------- -->

<!-- ------- SECCION 2 -------------- -->

    <div class="tab-content" id="nav-tabContent">

        <div class="fade flex-column my-5 tab-pane text-center active show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

            <div class="col-12 d-flex justify-content-center margen_contenedores_index2  my-5">
                <div class="justify-content-center mx-2">
                    <i class="mx-5 <?php echo $datos_contacto ['bogota']['direccion']['icono'] ?>" >  </i> 
                    <div class="text-light">Direccion Bogotá</div>
                </div>
                <a class="text-decoration-none" href="tel:<?php echo $datos_contacto ['bogota'] ['telefono_fijo']['link']?>"><div class="text-light justify-content-center mx-2"><i class="mx-5 <?php echo $datos_contacto ['bogota']['telefono_fijo']['icono'] ?>" >  </i> 
                    <div>+57 (1) 613 0770</div></div>
                </a>
                <a class="text-decoration-none" href="mailto:<?php echo $datos_contacto ['bogota'] ['correo']['correo']?>"><div class="text-light justify-content-center mx-2"><i class="mx-5 <?php echo $datos_contacto ['bogota']['correo']['icono'] ?>" >  </i> 
                    <div>vyvinmobiliarias@gmail.com</div></div>
                </a>
            </div>

            <div class="col-12">
            <div> V&V Inmobiliaria es una empresa legalmente constituida que se desenvuelve en el sector inmobiliario colombiano desde hace 25 años. Nuestro propósito es proveerle a nuestros clientes y al público en general un servicio de calidad, garantizando la seguridad de su patrimonio y ofreciéndole múltiples alternativas que se ajusten a sus necesidades y deseos. </div>
            </div>

        </div>
        

        
        <div class="fade flex-column my-5 tab-pane text-center  " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

            <div class="col-12 d-flex justify-content-center margen_contenedores_index2 my-5">
                <div class="justify-content-center mx-2"><i class="mx-5 <?php echo $datos_contacto ['bogota']['direccion']['icono'] ?>" >  </i> <div class="text-light">Direccion Ibagué</div></div>
                <a class="text-decoration-none" href="tel:<?php echo $datos_contacto ['bogota'] ['telefono_fijo']['link']?>"><div class="text-light justify-content-center mx-2"><i class="mx-5 <?php echo $datos_contacto ['bogota']['telefono_fijo']['icono'] ?>" >  </i> <div>Telefono Ibagué</div></div></a>
                <a class="text-decoration-none" href="mailto:<?php echo $datos_contacto ['bogota'] ['correo']['correo']?>"><div class="text-light justify-content-center mx-2"><i class="mx-5 <?php echo $datos_contacto ['bogota']['correo']['icono'] ?>" >  </i> <div>vyvinmobiliarias@gmail.com</div></div></a>
            </div>

            <div class="col-12">
            <div> V&V Inmobiliaria es una empresa legalmente constituida que se desenvuelve en el sector inmobiliario colombiano desde hace 25 años. Nuestro propósito es proveerle a nuestros clientes y al público en general un servicio de calidad, garantizando la seguridad de su patrimonio y ofreciéndole múltiples alternativas que se ajusten a sus necesidades y deseos. </div>
            </div>

        </div>


    </div>


<!-- ------- SECCION 2 -------------- -->


    <div class="padding_copyright justify-content-around align-items-center d-flex">   
        <div></div>
        <div><p class="px-2"> Diseñado y Desarrollado por <a class="text-decoration-none" target="_blank" href="https://www.dexcondigital.com/"> Dexcon Digital </a> ©Copyright 2019 para V&V Inmobiliaria. Todos los derechos reservados. </p></div>
        <div class="text-align-center d-flex">
            <div class="margenx px-2"> <a target="_blank" href="<?php echo $redes_sociales ['facebook']['link']?>"><i class="<?php echo $redes_sociales ['facebook']['icono'] ?>"></i></a>
            </div>

            <div class="margenx px-2"> <a target="_blank" href="<?php echo $redes_sociales ['instagram']['link']?>"><i class="<?php echo $redes_sociales ['instagram']['icono'] ?>"></i></a>
            </div>
        </div>
    </div>

</section>

</footer>


