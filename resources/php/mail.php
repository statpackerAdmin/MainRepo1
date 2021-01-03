<?php $name= $_POST['name'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$email = $_POST['email'];
$formcontent="From: $name Subject: $subject \n Description: $description";
$recipient = "support@statpacker.com";
$mailheader = "From: $email" \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die ("Error");
echo "Message sent!";
?>