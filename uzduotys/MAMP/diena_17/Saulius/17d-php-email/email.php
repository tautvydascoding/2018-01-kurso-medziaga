<?php


$vard = $_GET['vardas'];
$klaus = $_GET['klausimas'];
$elpast = $_GET['pastas'];

echo "pries email siuntima";
// print_r($_GET);

//Load composer's autoloader
require_once './libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {


    //papildomi settings jei neveiks

    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //     'verify_peer' => false,
    //     'verify_peer_name' => false,
    //     'allow_self_signed' => true
    //     )
    // );
    // $mail->Host = 'tls://smtp.mail.com:587';
    // $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;

    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.com';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'thePhpWizzard@mail.com';           // SMTP username
    $mail->Password = 'dropdatabase';                     // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('thePhpWizzard@mail.com', 'Puslapiu kurejai');
    $mail->addAddress('thePhpWizzard@mail.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($elpast, $vard);

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento pasvaiciojimai';
    $mail->Body    = $klaus;
    $mail->AltBody = $klaus;


// if ($mail->send();) {
//     createEmail($vard, $klaus, $elpast);
// } else {
//     # code...
// } // DB issaugojimas

    $mail->send();
    echo 'ZJBS';
} catch (Exception $e) {
    echo 'Laisko issiusti nepavyko', $mail->ErrorInfo;
}
