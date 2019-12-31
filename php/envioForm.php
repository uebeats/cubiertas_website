<?php
    /*-------------------------
    Autor: Jesus Caballero
    Web: propiedadesdng.com
    Mail: jesus@propiedadesdng.com
    ---------------------------*/

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    	// Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'plataforma@propiedadesdng.com';        // SMTP username
        $mail->Password   = 'americ01';                             // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->CharSet    = 'UTF-8';                                // Activa la condificacción utf-8
        $mail->Port       = 587;                                    // TCP port to connect to

        // $emailTo = 'uebeats@gmail.com';
        // $nameTo = 'Jesus Caballero';
        // $phoneTo = '948992070';
        // $mensajeTo = 'Texto de prueba para mensaje';

        $emailTo = $_POST['email'];
        $nameTo = $_POST['name'];
        $phoneTo = $_POST['fono'];
        $mensajeTo = $_POST['mensaje'];

        //Recipients
        $mail->setFrom('plataforma@propiedadesdng.com', 'EPAS LIMITADA | CONTACTO');
        $mail->addAddress($emailTo, $nameTo);                       // Add a recipient
        $mail->addReplyTo('diseno3@igospel.cl', 'EPAS LIMITADA | CONTACTO');

        $mail->addCC('diseno3@igospel.cl');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('sendMail.php');            // Add attachments
        // $mail->addAttachment($filename, 'Nota de Pago');            // Optional name

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'Formulario de Contacto | EPAS LIMITADA';
        $mail->Body = '<b>Formulario de Contacto</b><br><br> Has recibido un formulario de contacto del sitio web EPAS LIMITADA.<br><br><b>Nombre:</b> '.$nameTo.'<br><b>Teléfono:</b> '.$phoneTo.'<br><b>Correo:</b> '.$emailTo.'<br><b>Mensaje:</b> '.$mensajeTo.'<br><br><small>Formulario ha sido enviado desde el sitio web (https://epas.cl)</small>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>