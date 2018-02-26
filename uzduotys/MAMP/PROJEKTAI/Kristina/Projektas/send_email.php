<?php
require_once('libs/db_config.php');
// echo "pries emailo siuntima";

        $vardas = $_GET['vardas'];
        $zinute = $_GET['zinute'];
        $elpastas = $_GET['elpastas'];


// print_r($_GET); test
// echo "$vard"; // php galima kintamuosius kabutese rasyt bet tik dvigubose bet nebutina


//Load composer's autoloader
require_once 'libs/PHPMailer-master/PHPMailerAutoload.php';

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
    $mail->Host = 'tls://smtp.gmail.com:587'; 
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 465;                                      // TCP port to connect to

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output erorai kuriuos mes, sukurus rasyti 0
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'kristinamasterofcoding@gmail.com';                 // SMTP username
    $mail->Password = 'meskiukasrudnosiukas';                           // SMTP password

    //Recipients
    $mail->setFrom('kristinamasterofcoding@gmail.com', 'puslapiu kurejai');
    $mail->addAddress('kristinamasterofcoding@gmail.com', 'Joe User');     // Add a recipient
    $mail->addReplyTo($elpastas, $vardas);

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = $zinute;
    $mail->AltBody = $zinute;

    if ($mail->send()) {
    	createZinute($vardas, $zinute, $elpastas); // cia isirasyti funkcija susikurta prie visu spec emailam kad storintu duombazej, nera butina ateiciai jei naujienlaiskiam ir pns
    }

	$mail->send();


    $taip = 'Dėkoju už Jūsų laišką!';
    include('send_email_resp.php');
} catch (Exception $e) {
    $taip = 'siuntimas nepavyko, bandykite dar kartą: ' . $mail->ErrorInfo;
    include('send_email_resp.php');
}

