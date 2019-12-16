<?php 

// modelo inmueble propiedades destacadas
function modelo_inmueble_destacadas($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("116-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo ' 
        <div class="border mb-5 rounded">
        <a href="detalle_inmueble.php?co=' . $codigo . '">
            <div class="card" style="width: 25rem; height:300px">
                <img style="height:100%" src="' . $imagen . '" class="card-img-top" alt="...">
                <p class="tipo_de_inmueble card-text">' . $api['Tipo_Inmueble'] . '</p>
                <p class="tipo_de_renta card-text"> ' . $api['Gestion'] . '</p>
                <p class="precio_inmueble card-text">$ ';
                
                if ($api['Gestion'] == 'Arriendo') {
                    echo $api['Canon'];
                } else if ($api['Gestion'] == 'Venta') {
                    echo $api['Venta'];
                } else {
                    echo $api['Canon'] . '/ $' . $api['Venta'];
                }
                echo'
                </p>
            </div>
            <div style="margin: 0 1%;" class="card-body">


                <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </span> </li>
                <p class="text-muted"> Código : '. $codigo .' </p>

                <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                    <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> ' . $api['AreaConstruida'] . 'm<sup>2</span> </li>
                    <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> ' . $api['banios'] . ' </span> </li>
                    <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> ' . $api['Alcobas'] . ' </span> </li>
                    <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2">' . $api['garaje'] . ' </span> </li>
                </ul>

            </div>
        </a>
    </div>

           
            ';
    }
}

//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("116-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 10;
        // recortar cadena
        if (strlen($descripcion) <= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
        // fin de recortar cadena
        echo '
        <div class="border mb-5 rounded">
            <a href="detalle_inmueble.php?co=' . $codigo . '">
                <div class=" card" style="width: 25rem; height:300px">
                    <img style="height:100%" src="' . $imagen . '" class="card-img-top" alt="...">
                    <p class="tipo_de_inmueble card-text">' . $api['Tipo_Inmueble'] . '</p>
                    <p class="tipo_de_renta card-text"> ' . $api['Gestion'] . '</p>
                    <p class="precio_inmueble card-text">$ ';
                    if ($api['Gestion'] == 'Arriendo') {
                        echo $api['Canon'];
                    } else if ($api['Gestion'] == 'Venta') {
                        echo $api['Venta'];
                    } else {
                        echo $api['Canon'] . '/ $' . $api['Venta'];
                    }
                    echo'
                    </p>
                </div>
                <div style="margin: 0 1%;" class="card-body">


                    <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </span> </li>
                    <p class="text-muted"> Código : '. $codigo .' </p>

                    <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> ' . $api['AreaConstruida'] . 'm<sup>2</span> </li>
                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> ' . $api['banios'] . ' </span> </li>
                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> ' . $api['Alcobas'] . ' </span> </li>
                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2">' . $api['garaje'] . ' </span> </li>
                    </ul>

                </div>
            </a>
        </div>

    
 ';
    }
}

// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}

//similares
function modelo_inmueble_similares($r)
{

  for ($i = 0; $i < count($r); $i++) {
    $imagen = existeImagen(($r[$i]['foto1']));
    $codigo = str_ireplace("116-", "", $r[$i]['Codigo_Inmueble']);
    $api = $r[$i];

    echo '

    <div class="border mb-5 rounded">
            <a href="detalle_inmueble.php?co=' . $codigo . '">
                <div class="card" style="width: 25rem; height:300px">
                    <img style="height:100%" src="' . $imagen . '" class="card-img-top" alt="...">
                    <p class="tipo_de_inmueble card-text">' . $api['Tipo_Inmueble'] . '</p>
                    <p class="tipo_de_renta card-text"> ' . $api['Gestion'] . '</p>
                    <p class="precio_inmueble card-text">$ ';
                    if ($api['Gestion'] == 'Arriendo') {
                        echo $api['Canon'];
                    } else if ($api['Gestion'] == 'Venta') {
                        echo $api['Venta'];
                    } else {
                        echo $api['Canon'] . '/ $' . $api['Venta'];
                    }
                    echo'
                    </p>
                </div>
                <div style="margin: 0 1%;" class="card-body">


                    <li class="mt-3 mb-3 centrar_v d-flex"> <i class="fas fa-map-marker-alt"></i> <span class="ml-2"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </span> </li>
                    <p class="text-muted"> Código : '. $codigo .' </p>

                    <ul class="padding_left_0 d-flex flex-wrap align-items-center justify-content-around">
                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-chart-area"></i> <span class="ml-2"> ' . $api['AreaConstruida'] . 'm<sup>2</span> </li>
                        <li class="mr-2 d-flex align-items-center"> <i class="fas fa-bath"></i> <span class="ml-2"> ' . $api['banios'] . ' </span> </li>
                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-bed"></i> <span class="ml-2"> ' . $api['Alcobas'] . ' </span> </li>
                        <li class="mr-2 d-flex align-items-center"> <i class="fa fa-car"></i> <span class="ml-2">' . $api['garaje'] . ' </span> </li>
                    </ul>

                </div>
            </a>
        </div>


    ';
  }
}

























?>