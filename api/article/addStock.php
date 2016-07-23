<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $id = $json->id;
    $cor = $json->cor;
    $tamanho = $json->tamanho;
    $quantidade = $json->quantidade;

    $id_item = getItemId($id, $tamanho, $cor);

    if(!is_null($id_item)){
      $oldQuantity = getQuantityById($id_item);
      $newQuantity = $oldQuantity + $quantidade;
      if(updateQuantity($id_item, $newQuantity)) {
        $message = array('success' => 'Stock added with success');
      }
      else {
        $message = array('error' => 'Cannot add article');
      }
  	}
  	else{
      if (addItem($id, $quantidade, $cor, $tamanho)){
        $message = array('success' => 'Stock added with success');
      }
      else {
        $message = array('error' => 'Cannot add article');
      }
  	}
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
