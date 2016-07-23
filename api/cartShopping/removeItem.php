<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');
  include_once($BASE_DIR .'database/items.php');
  include_once($BASE_DIR .'database/cartShopping.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $id_artigo = $json->id_artigo;
    $tamanho = $json->tamanho;
    $cor = $json->cor;
    $email = $_SESSION['email'];
    $id_carrinho = getId($email);
    $id_item = getItemId($id_artigo, $tamanho, $cor);

    if(removeItem($id_item, $id_carrinho)){
      $message = array('success' => 'Item removed with success');
  	}
  	else{
  		$message = array('error' => 'Cannot remove item');
  	}
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
