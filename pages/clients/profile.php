<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  $email = $_SESSION['email'];

  if($email != null){
    $client = getClientByEmail($email);
    $smarty->assign('client', $client);
    $smarty->display('clients/profile.tpl');
  }
  else {
    header('Location: ' . $BASE_URL);
  }
?>
