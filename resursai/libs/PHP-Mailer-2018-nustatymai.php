<?php

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