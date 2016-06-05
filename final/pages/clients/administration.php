<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  if($_SESSION['admin'] == true){
    $clients = getClients();
    $smarty->assign('clients', $clients);
    $smarty->display('clients/administration.tpl');
  }
  else {
    header('Location: ' . $BASE_URL);
  }
?>
