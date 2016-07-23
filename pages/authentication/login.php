<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  if($_SESSION['email'] == null){
    $smarty->display('authentication/login.tpl');
  }
  else {
    header('Location: ' . $BASE_URL);
  }
?>
