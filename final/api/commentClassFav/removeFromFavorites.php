<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/commentClassFav.php');
  include_once($BASE_DIR .'database/clients.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $email = $_SESSION['email'];
    $id_cliente = getClientIdByEmail($email)['id'];
    $id_artigo = $json->id;

  	if (existOnFavorites($id_cliente, $id_artigo)){
      deleteFromFavorites($id_cliente, $id_artigo);
      $message = array('success' => 'Article removed from favorites');
    }
    else {
      $message = array('error' => 'Article did not exist');
    }
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
