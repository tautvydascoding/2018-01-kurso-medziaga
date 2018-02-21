<?php

echo "pries email siuntima";

print_r( $_GET );

$vardas = $_GET['vardas'];
$klaus = $_GET['klausimas'];
$elpastas = $_GET['pastas'];

//Load composer's autoloader
require_once './libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'tls://smtp.gmail.com:587'; 
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 465;                                      // TCP port to connect to
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'simaselpastas@gmail.com';                 // SMTP username
    $mail->Password = '19910121';                           // SMTP password


    //Recipients
    $mail->setFrom('simaselpastas@gmail.com', 'Simas');
    $mail->addAddress('simaselpastas@gmail.com', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($elpastas, $vardas);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = $klaus;
    $mail->AltBody = $klaus;

    $mail->send();
    echo 'O yeah, your mail has been sent';
} catch (Exception $e) {
    echo 'Nepavyko issiusti: ', $mail->ErrorInfo;
}