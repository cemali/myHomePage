<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "holden1473@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die(" Error! Something not right here");
echo "Thank You!" . " -" . "<a href='contact.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>