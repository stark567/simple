<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "rajyagurutarz@gmail.com";
// $subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $formcontent, $mailheader) or die("Error!");
echo "<script>alert('Thank you, we will contact you soon !')</script>";
echo "<script>location.replace('Home.html')</script>";

?>