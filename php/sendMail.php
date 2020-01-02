<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "formulario@cubiertasnacionales.cl";
    $to = "uebeats@gmail.com";
    $subject = "Checking PHP mail";

    $name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $date = $_POST['form_date'];
    $mess = $_POST['form_message'];

    $message = 'Haz recibido un formulario desde el sitio web de Cubiertas Nacionales, a continuación se muestran los datos:<br>Nombre: '. $name .'<br>Correo: '. $email .'<br>Fecha: '. $date .'<br>Mensaje: '. $mess .'<br>';
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>