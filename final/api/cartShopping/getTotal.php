<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/cartShopping.php');
  include_once($BASE_DIR .'database/clients.php');

  $email = $_SESSION['email'];
  $id_carrinho = getClientIdByEmail($email)['id'];

  $message = getTotal($id_carrinho);

  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
