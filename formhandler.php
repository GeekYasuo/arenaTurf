<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$sport = $_POST['sport'];
$time = $_POST['time'];
$Date = $_POST['Date'];

$email_from = 'sportsclub03.book@gmail.com';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Mobile Number: $number.\n".
                "User booking ground for: $sport.\n".
                "Time for sport: $time.\n".
                "Date for sport: $Date.\n";

$to ="rautgauravi.j@gmail.com";
$headers="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$sport,$email_body,$headers);
echo "Thank you for using our mail form";

header("Location: contact.html");
?>