<?php
session_start();


use Drivers\PHPMailer\Exception;
use Drivers\PHPMailer\PHPMailer;
use Drivers\PHPMailer\SMTP;

function validatePhoneNumber($phoneNumber) {
    return is_numeric($phoneNumber) && strlen($phoneNumber) === 10;
}

// Function to redirect with an error message
function redirectWithError($errorMessage) {
    $redirectUrl = isset($_POST['redirect']) ?  $_POST['redirect'] : '/'; // Change this to your actual error page URL
    // if(isset($_POST['result'])){
    //     $redirectUrl .= "?result=" . $_POST['result'];
    // }
    $_SESSION['error'] = $errorMessage;
    // exit($errorMessage);
    header("Location: {$redirectUrl}");
    exit();
}


// if(!isset($_POST['result'])){
//     redirectWithError('Please complete the quiz!');
// }

// Validate name
if (empty($_POST['first_name']) || strlen($_POST['first_name']) > 255) {
    redirectWithError('Invalid name, please try again.');
}

// if (empty($_POST['last_name']) || strlen($_POST['last_name']) > 255) {
//     redirectWithError('Invalid request, please try again.');
// }

// Validate email
if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    redirectWithError('Invalid email address, please try again.');
}

// Validate phone
if (empty($_POST['phone']) || !validatePhoneNumber($_POST['phone'])) {
    redirectWithError('Invalid phone number, please try again.');
}

function sendMail($data){
    if(!isset($data['last_name'])){
        $data['last_name'] = '';
    }
    try{
        $mail = new PHPMailer();
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'webadmin@eicsindia.org';
        $mail->Password   = 'JBYD?W1d';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('webadmin@eicsindia.org', $data['first_name']);
        // $mail->addAddress('kunal@brandwind.in');
        $mail->addAddress('educationindiacareerservises@gmail.com');
        $mail->addReplyTo($data['email'], $data['first_name']);
        $message = "
            <h4>You receved an enquery from website</h4>
            <p><string>Name: </strong> {$data['first_name']} {$data['last_name']}</p>
            <p><string>Email: </strong> {$data['email']}</p>
            <p><string>Phone: </strong> {$data['phone']}</p>
            <p><string>Date: </strong> {$data['date']}</p>
        ";
        if(isset($data['message'])){
            $message .= "<p><string>Message: </strong> {$data['message']}</p>";
        }

        $mail->isHTML(true);
        $mail->Subject = 'Enquery from website';
        $mail->Body = $message;
        $mail->send();
        
        $_SESSION['success'] = 'Request submitted, we will get back to you very soon.';
        header("Location: " . (isset($_POST['redirect']) ?  $_POST['redirect'] : '/'));
        exit();
    }catch(Exception $e){
        // print_r($e);
        // exit();
        redirectWithError('Invalid request, please try again.');
    }
    
}

$data = $_POST;
$data['date'] = date('Y-m-d');
$data['file'] = $uploadedFile;
sendMail($data);
redirectWithError('Invalid request, please try again.');