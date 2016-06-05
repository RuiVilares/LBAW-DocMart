<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/cartShopping.php');
  include_once($BASE_DIR .'database/clients.php');

  $email = $_SESSION['email'];
  $admin = $_SESSION['admin'];

  if($email != null && $admin == false){
    $id_cliente = getClientIdByEmail($email)['id'];
    $arts = getArticles($id_cliente);
    $smarty->assign('arts', $arts);
    $smarty->display('cartShopping/scart.tpl');
  }
  else {
    header('Location: ' . $BASE_URL);
  }
?>
