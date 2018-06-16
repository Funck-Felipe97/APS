<?php

	require 'mailer/PHPMailerAutoload.php';
        
    if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
                  $assunto = $_POST['assunto'];
    }
    if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {.$mensagem = $_POST['mensagem'];
    }
      
    $mail = new PHPMailer;
     
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'jcds203@gmail.com';
    $mail->Password = 'senha';
    $mail->Port = 587;
     
    $mail->setFrom($_POST[email]);
    $mail->addAddress('jcds@gmail.com');
     
    $mail->isHTML(true); /* Indicamos o uso do HTML no conteúdo do e-mail;*/
     
    $mail->Subject = $assunto; /* assunto da msg*/
    $mail->Body    = nl2br($mensagem); /*definicao da msg*/
    $mail->AltBody = nl2br(strip_tags($mensagem)); /* criacao de uma msg opcional sem html*/
     
    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
         header('Location: index.php?enviado');
    }
?>