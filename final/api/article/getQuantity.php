<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $id = $json->id_artigo;
    $cor = $json->cor;
    $tamanho = $json->tamanho;

    $quantity = getQuantity($id, $cor, $tamanho);

    $message = array('success' => $quantity);
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;
?>
