<?php

session_start();


use Drivers\PHPMailer\Exception;
use Drivers\PHPMailer\PHPMailer;
use Drivers\PHPMailer\SMTP;


if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header("HTTP/1.0 400");
    exit();
}

$templateFilePath = 'templates/email-template.html';

if (file_exists($templateFilePath) && is_readable($templateFilePath)) {
    // Read the content of the file into the $message variable
    // $message = file_get_contents($templateFilePath);
    $fileHandle = fopen($templateFilePath, 'r');

    if(!$fileHandle){
        header("HTTP/1.0 400");
        exit();
    }

    $message = fread($fileHandle, filesize($templateFilePath));
    fclose($fileHandle);
    
    // Check if the content was successfully read
    if ($message !== false) {
        // echo $message;
    } else {
        echo "Failed to read the content of the email template.";
        header("HTTP/1.0 400");
        exit();
    }
} else {
    echo "The email template file does not exist or is not readable.";
    header("HTTP/1.0 400");
    exit();
}

$email = 'webadmin@eicsindia.org';

try{
    $mail = new PHPMailer();
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $email;
    $mail->Password   = 'JBYD?W1d';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom($email, 'Education India Career Services');
    // $mail->addAddress('kunal@brandwind.in');
    $mail->addAddress($_POST['email']);
    $mail->addReplyTo('educationindiacareerservises@gmail.com', 'Education India Career Services');

    $mail->isHTML(true);
    $mail->Subject = 'EICS, Education India Career Services';
    $mail->Body = $message;
    $mail->send();
    
    header("HTTP/1.0 200");
}catch(Exception $e){
    header("HTTP/1.0 400");
    exit();
}

try{
    $mail = new PHPMailer();
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $email;
    $mail->Password   = 'JBYD?W1d';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom($email, 'Education India Career Services');
    // $mail->addAddress('kunal@brandwind.in');
    $mail->addAddress('educationindiacareerservises@gmail.com');
    $mail->addReplyTo($_POST['email']);

    $mail->isHTML(true);
    $mail->Subject = 'New Subscriber!';
    $mail->Body = 'New subscription: ' . $_POST['email'];
    $mail->send();
    
    header("HTTP/1.0 200");
}catch(Exception $e){
    header("HTTP/1.0 200");
    exit();
}