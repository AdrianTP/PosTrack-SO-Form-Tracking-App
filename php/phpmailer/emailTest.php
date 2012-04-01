<?php
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
#IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "employee.11111@gmail.com"; // SMTP username
$mail->Password = "&Were0ff"; // SMTP password
$webmaster_email = "vargroup.11111@gmail.com"; //Reply to this email ID
$email="scottMunch@hotmail.com"; // Recipients email ID
$name="Mr Customer Service Phone Answerer Guy"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "Webmaster";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Webmaster");
$mail->WordWrap = 50; // set word wrap
#$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
$mail->Subject = "This is the subject";
$mail->Body = "Hello World. <br/> This is the HTML BODY "; //HTML Body
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
