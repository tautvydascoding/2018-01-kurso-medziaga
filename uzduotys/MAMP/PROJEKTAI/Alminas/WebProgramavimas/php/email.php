<?php


include_once 'includes/dbconnectionEmails.php';

$klientas = $_POST['vardas'];
$klientoEmail = $_POST['emailas'];
$klientonr = $_POST['telnr'];
$klientoKlausimas = $_POST['zinute'];
$klientoinfo = 'Kliento numeris: ' . $klientonr . ' Kliento žinutė: ' . $klientoKlausimas;


//Load composer's autoloader
require '../libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);
try {

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'emailsender246';           // SMTP username
    $mail->Password = 'dr4g0n13';                      // SMTP password
    // $mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                   // TCP port to connect to
    $mail->Port = 465;                                      // TCP port to connect to

    //Recipients
    $mail->setFrom($klientoEmail, 'Web programavimas');
    $mail->addAddress('alminas.st@gmail.com', 'Alminas');
    // $mail->addAddress('ellen@example.com');                    // Name is optional
    $mail->addReplyTo($klientoEmail, $klientas);    // ~

    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Web programavimas';
    $mail->Body    = $klientoinfo;
    $mail->AltBody = $klientoinfo;

    $arPavykoIssiusti =  $mail->send();

    $sql = "INSERT INTO emails (vardas, telnr, emailas, zinute)
    VALUES ('$klientas', '$klientonr', '$klientoEmail', '$klientoKlausimas');";
    mysqli_query($conn, $sql);
    Header('Location: http://localhost/success.php');
} catch (Exception $e) {
    echo 'Klaida.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


//============================
