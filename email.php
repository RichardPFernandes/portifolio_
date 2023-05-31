<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = $_POST['assunto'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail -> isSMTP();
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = 'tls';
$mail -> Host = 'smtp.gmail.com';
$mail -> Port = 587;
$mail -> CharSet = 'UTF-8';
$mail -> Encoding = 'base64';
$mail -> SMTPDebug = 0;


$mail -> Username = "fernandesrichard312@gmail.com";
$mail -> Password = "bdhlciyeaukcyzrk";

$mail -> setFrom($email);
$mail -> addAddress("fernandesrichard312@gmail.com", "Richard Fernandes");

$mail -> isHTML(true);
$mail -> Subject = $assunto;
$mail -> Body = $mensagem;

if($mail -> send()){
    header("Location: index.php");
    $SESSION['msg'] = "<div class='alert alert-success'>Email enviado com sucesso!</div>";
}else{
    header("Location: index.html");
    $SESSION['msg'] = "<div class='alert alert-danger'>Erro ao enviar o email!</div>";
}
?>
