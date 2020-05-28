<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer-master/src/PHPMailer.php";
require_once "PHPMailer-master/src/Exception.php";

$mail = new PHPMailer();

$mail->setFrom("AHmad@gmail.com","Ahmad Faqehi");
$mail->addAddress("yahya007876");
$mail->Subject = 'Hello Subject 2';
$mail->isHTML(true);
$mail->Body = '<h1>Hello Body</h1>';
$mail->send();

