<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/cartShopping.php');
  include_once($BASE_DIR .'database/items.php');
  include_once($BASE_DIR .'database/clients.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $cor = $json->cor;
    $tamanho = $json->tamanho;
    $id_artigo = $json->id_artigo;
    $quantidade = $json->quantidade;
    $email = $_SESSION['email'];
    $id_carrinho = getClientIdByEmail($email)['id'];
    $id_item = getItemId($id_artigo, $tamanho, $cor);


    if(addItem($id_item, $id_carrinho, $quantidade)){
      $message = array('success' => 'Item added with success');
  	}
  	else{
  		$message = array('error' => 'Cannot add item');
  	}
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
