<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $id = $json->id;
    $desativado = $json->desativado;

  	changeState($id, $desativado);

    if ($desativado == 'true')
      $_SESSION['success_messages'][] = 'Utilizador bloqueado';
    else
      $_SESSION['success_messages'][] = 'Utilizador desbloqueado';
    $message = array('success' => 'User succefully updated');
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
