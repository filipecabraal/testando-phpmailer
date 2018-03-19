<?php
include "config.php";
include "phpmailer/class.phpmailer.php";

$nome = $_POST["name"];
$telefone = $_POST["phone"];
$email = $_POST["email"];
$mensagem = $_POST["message"];
    
$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug= 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = EMAIL_CONFIG;
$mail->Password = SENHA_CONFIG;
$mail->setFrom(EMAIL_CONFIG,"Contato do site");

$mail->addAddress('filipecabraal@gmail.com');
$mail->Subject= "Contato no site";
$msg = "Contato de ".$nome."\n"
        . "Email: ".$email."\n"
        . "Telefone: ".$telefone."\n"
        . "Mensagem: ".$mensagem;

$mail->Body = $msg;

$mail->send();

header("Location:index.php?msg=obrigado");


