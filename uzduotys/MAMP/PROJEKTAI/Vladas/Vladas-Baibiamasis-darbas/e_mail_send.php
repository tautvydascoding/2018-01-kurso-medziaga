<?php



require_once 'libs/PHPMailer-master/PHPMailerAutoload.php';

$vard = $_GET['vardas'];
$klaus = $_GET['klausimas'];
$elmail = $_GET['e-mail'];

$mail = new PHPMailer(true);
try {
    $mail->SMTPOptions = array(
       'ssl' => array(
       'verify_peer' => false,
       'verify_peer_name' => false,
       'allow_self_signed' => true
       )
   );

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.zoho.eu';
    $mail->SMTPAuth = true;
    $mail->Username = 'vladoemailai@zoho.eu';
    $mail->Password = 'pastas123';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('vladoemailai@zoho.eu', 'kurejai');
    $mail->addAddress('vladoemailai@zoho.eu', 'vladas vladas');
    $mail->addReplyTo($elmail, $vard);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');


    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Klausimas';
    $mail->Body    = $klaus;
    $mail->AltBody = $klaus;

    include ("./connect.php");

    $mail->send();
    echo 'Jūsų žinutė sėkmingai išsiųsta!';

    $query = "INSERT INTO `email duomenys` (vardas, email, klausimas) VALUES ('$vard', '$elmail', '$klaus')";
    $result = mysqli_query($connection, $query);
    header("refresh: 1; url=index.php");
} catch (Exception $e) {
    echo 'Klaida! Bandykite dar kartą. ', $mail->ErrorInfo;
}
