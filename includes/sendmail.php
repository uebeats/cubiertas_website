<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'just55.justhost.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'themeforest@ismail-hossain.me';    // SMTP username
$mail->Password = 'AsDf12**';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$message = "";
$status = "false";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['form_name'] != '' AND $_POST['form_email'] != '' AND $_POST['form_subject'] != '' ) {

        $name = $_POST['form_name'];
        $email = $_POST['form_email'];
        $subject = $_POST['form_subject'];
        $phone = $_POST['form_phone'];
        $message = $_POST['form_message'];

        $subject = isset($subject) ? $subject : 'Nuevo Mensaje | Formulario de Contacto';

        $botcheck = $_POST['form_botcheck'];

        $toemail = 'diseno2@igospel.cl'; // Your Email Address
        $toname = 'CubiertasNacionales'; // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Nombre: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Fono: $phone<br><br>" : '';
            $message = isset($message) ? "Mensaje: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br> Formulario enviado de: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $phone $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                $message = 'Hemos <strong>Recibido el Mensaje de Forma Correcta</strong> Nos trataremos de colocar en contacto a la brevedad.';
                $status = "true";
            else:
                $message = 'Problema en  <strong>el email</strong> Error Inesperado. Por favor intenta en otra oportunidad.<br /><br /><strong>Motivo:</strong><br />' . $mail->ErrorInfo . '';
                $status = "false";
            endif;
        } else {
            $message = 'Robot<strong>Detectado</strong>.! Por favor limpia el formulario.!';
            $status = "false";
        }
    } else {
        $message = 'Por favor<strong>Fill up</strong> completa todos los campos y vuelve a reintentar.';
        $status = "false";
    }
} else {
    $message = 'Existe <strong>unexpected Error</strong> Por favor intenta en otra oportunidad.';
    $status = "false";
}

$status_array = array( 'message' => $message, 'status' => $status);
echo json_encode($status_array);
?>