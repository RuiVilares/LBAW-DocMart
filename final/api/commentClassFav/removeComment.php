<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/commentClassFav.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $id_cliente = $json->id_cliente;
    $id_artigo = $json->id_artigo;

  	if (removeComment($id_cliente, $id_artigo)){
      $message = array('success' => 'Comment removed');
    }
    else {
      $message = array('error' => 'Cannot remove comment');
    }
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
