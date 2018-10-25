<?php

	include "../bibliotecas/PHPMailer/src/PHPMailer.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
        
    if (isset($_POST['assunto'])) {
        $assunto = $_POST['assunto'];
    }
    if (isset($_POST['comentario'])) {
        $mensagem = $_POST['comentario'];
    }
      
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = "funck@alunos.utfpr.edu.br";
    $mail->Password = '';
    $mail->Port = 587;
    
    $mail->setFrom($_POST["email"]);
    $mail->addAddress("funck@alunos.utfpr.edu.br");
    $mail->isHTML(true); /* Indicamos o uso do HTML no conteúdo do e-mail;*/
     
    $mail->Subject = $assunto; /* assunto da msg*/
    $mail->Body    = nl2br($mensagem); /*definicao da msg*/
    $mail->AltBody = nl2br(strip_tags($mensagem)); /* criacao de uma msg opcional sem html*/
     
    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
         header('Location: ../App/index.php');
    }
?>
