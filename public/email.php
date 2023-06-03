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

$mail -> setFrom("$email", "$nome");
$mail -> addReplyTo("$email", "$nome");
$mail -> addAddress("fernandesrichard312@gmail.com", "Richard Fernandes");

$mail -> isHTML(true);
$mail -> Subject = $assunto;
$mail -> Body = $mensagem;

if($mail -> send()){
    header("Location: index.html");
    $SESSION['msg'] = "<div class='alert alert-success'>Email enviado com sucesso!</div>";
}else{
    header("Location: index.html");
    $SESSION['msg'] = "<div class='alert alert-danger'>Erro ao enviar o email!</div>";
}

?>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyACO0M0xBL3HrUHqSC57ce__tCw_0T8gqE",
    authDomain: "portifolio-d5717.firebaseapp.com",
    projectId: "portifolio-d5717",
    storageBucket: "portifolio-d5717.appspot.com",
    messagingSenderId: "195572302101",
    appId: "1:195572302101:web:1fd0efc6192e04bddda91c",
    measurementId: "G-8MJSQTSWKW"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>