<?php 
    $to = "kauan.moyses117@gmail.com"; //destinatário

    $assunto = "Formulário do site";

    $mensagem = $_POST['mensagem']." - ".$_POST['nome'];

    $email = $_POST['email']; //remetente

    $headers  = 'MIME-Version: 1.0';
	$headers .= 'Content-type: text/html; charset=iso-8859-1';
	$headers .= 'To: $to';
	$headers .= 'From: $email';
	$headers .= 'Reply-To: $email';
	$headers .= 'X-Mailer: PHP/' . phpversion();


    mail($to, $assunto, $menssagem, $headers);

    if($status==true){
        print "Mensagem foi enviada com sucesso!";
    }else{
        print "Não foi possível enviar";
    }