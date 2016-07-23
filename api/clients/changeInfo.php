<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $email = $_SESSION['email'];
    $nome = $json->nome;
    $username = $json->username;
    $telemovel = $json->telemovel;
    $data_de_nascimento = $json->data_de_nascimento;
    $newEmail = $json->email;
    $morada = $json->morada;
    $contribuinte = $json->contribuinte;

  	changeInfo($email, $nome, $username, $telemovel, $data_de_nascimento, $newEmail, $morada, $contribuinte);
    $_SESSION['success_messages'][] = 'Utilizador atualizado';
    $message = array('sucess' => 'User succefully updated');
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
