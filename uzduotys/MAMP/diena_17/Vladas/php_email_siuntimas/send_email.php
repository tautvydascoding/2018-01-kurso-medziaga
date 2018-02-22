<?php






echo "pries emailo siuntima";
// print_r($_GET);

$vard = $_GET['vardas'];
$klaus = $_GET['klausimas'];
$elmail = $_GET['epastas'];

// echo $vard . $klaus . $mail;



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
   // $mail->Host = 'tls://smtp.gmail.com:587';
   // $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
   // $mail->Port = 465;                                      // TCP port to connect to
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.eu';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'vladoemailai@zoho.eu';                 // SMTP username
    $mail->Password = 'pastas123';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('vladoemailai@zoho.eu', 'kurejai');
    $mail->addAddress('vladoemailai@zoho.eu', 'vladas vladas');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($elmail, $vard);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    = $klaus;
    $mail->AltBody = $klaus;

    $mail->send();
    echo 'Taip issiusta';
} catch (Exception $e) {
    echo 'Bandykite dar karta ', $mail->ErrorInfo;
}
