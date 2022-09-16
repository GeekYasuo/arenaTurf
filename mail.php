<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

    //getting user data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $fromEmail = $_POST['email'];
    $phone = $_POST['tel'];
    $sportsName = $_POST['city'];
    $time = $_POST['time'];
    $date = $_POST['date'];

$mail=new PHPMailer(true); // Passing `true` enables exceptions

try {
    //settings
    $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.titan.email';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='support@arena-turf.games'; // SMTP username
    $mail->Password='Sports123456789'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->addAddress('support@arena-turf.games', 'Arena Turf');
    
    //recipient
    $mail->setFrom($fromEmail, $firstName);     // Add a recipient
    
    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Booking Request From '.$firstName.'';
    $mail->Body='<h2> Email Request Received </h2>
    <p> <b>Client Name: </b> '.$firstName . " " . $lastName . '</p>
    <p> <b>Email: </b> '.$fromEmail .'</p>
    <p> <b>Phone Number: </b> '.$phone .'</p>
    <p> <b>Sports Name: </b> '.$sportsName .'</p>
    <p> <b>Date for Booking: </b> '.$date.'</p>
    <p> <b>Time: </b> '.$time .'</p>';

    $mail->send();

    echo 'Message has been sent';
} 
catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
}

?>
