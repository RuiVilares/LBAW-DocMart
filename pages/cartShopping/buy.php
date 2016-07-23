<?php
  include_once('../../config/init.php');

  $email = $_SESSION['email'];
  $admin = $_SESSION['admin'];

  if($email != null && $admin == false){
    $smarty->display('cartShopping/buy.tpl');
  }
  else {
    header('Location: ' . $BASE_URL);
  }
?>
