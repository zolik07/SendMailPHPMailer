<?php

//Send Mail Function Using SMTP
function sendMail($subject,$message,$to){
    include_once SRV_ROOT.'models/smtp/PHPMailer.php';
    include_once SRV_ROOT.'models/smtp/Exception.php';
    include_once SRV_ROOT.'models/smtp/SMTP.php'; 
    
    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->SMTPAuth = true;
    $mail->Username = 'konya.zoltan81@gmail.com';
    $mail->Password = '12356';
    $mail->Host = 'http://zoltankonya.byethost18.com'; //Server Host

    $mail->From = 'konya.zoltan81@gmail.com';
    $mail->FromName = 'Zoltan Konya';
    $mail->Subject = $subject;

    $mail->isHTML();
    $mail->msgHTML($message);
    $mail->addAddress($to);

    $mail->send();             
}