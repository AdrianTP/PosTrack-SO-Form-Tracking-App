<?php
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
#IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "cosmoSkidoodle@gmail.com"; // SMTP username
$mail->Password = "Munch-Clan"; // SMTP password
$webmaster_email = "cosmoSkidoodle@gmail.com"; //Reply to this email ID
$email="scottMunch@hotmail.com"; // Recipients email ID
$name="Scott Munch"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "Webmaster";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Webmaster");
$mail->WordWrap = 50; // set word wrap
#$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
$mail->Subject = "This is the subject";
$mail->Body = "Hi,
This is the HTML BODY "; //HTML Body
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}
?> 
