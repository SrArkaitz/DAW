<?php

include ('PHPMAILER.php');
//require_once ('SMTP.php');
function enviarGmail($nombre, $apellido, $email, $tuEmail, $contraseña, $asunto, $mensaje){
    

//include("class.smtp.php"); // optional, gets called from within
//class.phpmailer.php if not already loaded
    $mail = new PHPMailer();
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host = "mail.yourdomain.com"; // SMTP server
    $mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = $tuEmail; // GMAIL username
    $mail->Password = $contraseña; // GMAIL password
    $mail->SetFrom('name@yourdomain.com', 'First Last');
    $mail->AddReplyTo("name@yourdomain.com", "First Last");
    $mail->Subject = "PHPMailer Test Subject via smtp (Gmail), basic";
    $mail->AltBody = "To view the message, please use an HTML compatible
email viewer!"; // optional, comment out and test
    // Completamos el mensaje
    $body = "ojuu";
    $mail->MsgHTML($body);
    $address = $email; // DESTINATARIO
    $mail->AddAddress($address, "John Doe");
           
//    $mail->AddAttachment("images/phpmailer.gif"); // attachment
//    $mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
}

?>