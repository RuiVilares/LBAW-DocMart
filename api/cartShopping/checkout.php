<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/cartShopping.php');
  include_once($BASE_DIR .'database/clients.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $name = $json->name;
    $number = $json->number;
    $cvc = $json->cvc;
    $month = $json->month;
    $year = $json->year;
    $email = $_SESSION['email'];
    $id_carrinho = getClientIdByEmail($email)['id'];


    if(checkout($id_carrinho)){
      $message = array('success' => 'Purchase completed');
  	}
  	else{
  		$message = array('error' => 'Cannot complete purchase');
  	}
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
