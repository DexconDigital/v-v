
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['name'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];
    $asunto = $_POST['asunto'];
    
    
}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('inmobiliarias@V-V.com', 'inmobiliarias@V-V.com');
    //destinos
     $mail->addAddress('vyvinmobiliarias@gmail.com'); 
    

    //$header = "Content-Type:text/html; charset=utf-8";
    $mail->Subject='Mensaje desde la página web de Inmobiliaria V&V';
    $mail->Body = '<span>Hola, '.$nombre.' quiere contactarse con ustedes con respecto a '.$asunto.'</span>
                    <h4>Sus datos son:</h4>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
        window.location.href='.././contactanos.php'
         </script>";
  

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
?>