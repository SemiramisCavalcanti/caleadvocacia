<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $mensagem = $_POST['msg'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  $arquivo = " $name, $phone, $email, $msg, $data_envio, $hora_envio ";


  $emailenviar = 'contato@fenixecho.com.br';
  $destino = $emailenviar;
  $assunto = 'Contato Landing Page';


  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: $name <$email>';



  $enviaremail = mail($destino, $assunto, $arquivo);
  if($enviaremail){
    $mgm = "CONTATO ENVIADO COM SUCESSO";
    echo " <meta http-equiv='refresh' content='5;URL=https://caleadvocacia.com.br/?pg=previdenciario'>";
  } else{
    $mgm = "ERRO AO ENVIAR CONTATO";
  }
  ?>
