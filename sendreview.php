
<?php
if($_POST["submit"]) {
   //Enter your mail address
     //Subject 
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $email_from="sportsclub03.book@gmail.com"; 
    $subject="Review from website";

    $mailBody=" You have received a new review from the user  $sender.\n"."Email Address: $senderEmail\n"."Feedback: $message";
    $to="sportsclub03.book@gmail.com";
    $headers="From: $senderEmail \r\n";
    mail($to, $subject, $mailBody,$headers);
    sleep(1);
    header("Location: review.html"); // Set here redirect page or destination page
}
?>