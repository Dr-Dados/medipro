<?php
require "../PHPMailer/src/PHPMailer.php";
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';
include("../partials/connect.php");
use PHPMailer\PHPMailer\PHPMailer;
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST['subject'];
$message = $_POST['message'];
$body="<h3>Vous avez reçu un nouveau message de la part de ".$name."</h3>
<p>Adresse mail : ".$email."</p>
<p>Sujet : ".$subject."</p>
<p>Message :".$message."</p>";
$sql = 'INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ("' . $name . '","' . $email . '","' . $subject . '","' . $message . '")';
$connect->query($sql);
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'mail.medipropharma.ma';
$mail->SMTPAuth = true;
$mail->Username = 'pharmacie@medipropharma.ma'; //Email
$mail->Password = 'ZaEGIOj#Mdp'; //Password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->IsHTML(true);
$mail->From = 'pharmacie@medipropharma.ma';
$mail->FromName = "Service commercial";
$mail->Subject = "Nouveau message de la part de ".$name;
$mail->Body = $body;
$mail->AddAddress("contact@medipropharma.ma");
$mail->Send();