<?php  
if( isset($_POST['submit']) ) {
//getting user data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fromEmail = $_POST['email'];
$phone = $_POST['tel'];
$cityName = $_POST['city'];
$homeAddress = $_POST['address'];
 
//Recipient email, Replace with your email Address
$mailTo = 'support@arena-turf.games';
 
//email subject
$subject = ' A Booking Request Received From ' .$firstName;
 
//email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Client Name: </b> '.$firstName . " " . $lastName . '</p>
<p> <b>Email: </b> '.$fromEmail .'</p>
<p> <b>Phone Number: </b> '.$phone .'</p>
<p> <b>Sports Name: </b> '.$cityName .'</p>
<p> <b>Time: </b> '.$homeAddress .'</p>';
 
//header for sender info
$headers = "From: " .$firstName . "<". $fromEmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
//PHP mailer function
 $result = mail($mailTo, $subject, $htmlContent, $headers);
 
   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
 
?>