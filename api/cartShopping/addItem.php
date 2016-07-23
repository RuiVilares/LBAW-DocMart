<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/cartShopping.php');
  include_once($BASE_DIR .'database/items.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $cor = $json->cor;
    $tamanho = $json->tamanho;
    $id_artigo = $json->id_artigo;
    $quantidade = $json->quantidade;
    $email = $_SESSION['email'];
    $id_carrinho = getId($email);
    $id_item = getItemId($id_artigo, $tamanho, $cor);

    $message = array($cor, $tamanho, $id_artigo, $quantidade, $email, $id_carrinho, $id_item);
    if(addCartItem($id_item, $id_carrinho, $quantidade)){
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
