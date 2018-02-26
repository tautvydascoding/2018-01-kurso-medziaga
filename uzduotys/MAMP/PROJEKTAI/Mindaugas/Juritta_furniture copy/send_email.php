<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


$actual_link = 'http://'.$_SERVER['HTTP_HOST'];
        // echo "pries email siuntima";
print_r($actual_link);



$vard = $_GET['vardas'];
$klau = $_GET['klausimas'];
$mailo = $_GET['pastas'];



//Load composer's autoloader
require_once 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'atbeki@gmail.com';                 // SMTP username
    $mail->Password = 'selectall';                           // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('atbeki@gmail.com', 'kas toks');
    $mail->addAddress('atbeki@gmail.com', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($mailo, $vard); //// kad google zinotu kam atrasyti paspaudus reply
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'kliento klausimas';
    $mail->Body    = "$klau";
    $mail->AltBody = "$klau";




    if( $mail->send() ) {
        require_once ('sql_functions.php');
        createEmItem($vard, $mailo, $klau );
        // echo "<script> alert('Jums pavyko. Susisieksime artmiausiu metu'); </script>";
        // echo " <script> history.back(); </script>";
        echo " <script> window.location.href = 'office_produktai2.php'; </script>";
        // header("location: ./office_produktai2.php");
    } else {

        echo "alert(' Atsiprašome. Serverio klaida.');
            <script> history.back(); </script>";
    }
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
