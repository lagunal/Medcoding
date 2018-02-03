<?php
require 'class.phpmailer.php';

$mail = new PHPMailer(); // create a new object
$mail->isSMTP; // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtpout.secureserver.net";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "eldundy@gmail.com";
$mail->Password = "Pa$$w0rd";

$mail->SetFrom($_POST["email"]);

$mail->Subject = "Medical Billing";
$mail->Body = "Name:" . $_POST["name"] . " Email: " . $_POST["email"] . " Phone: " . $_POST["phone"] . " Menssage: "  . $_POST["msm"];

$mail->AddAddress("eldundy@gmail.com");//
$mail->addCC("rugvany@ucp.ho.rimed.cu");

if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
    echo "Message has been sent";
    }


?>