<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/commentClassFav.php');
  include_once($BASE_DIR .'database/clients.php');

  $email = $_SESSION['email'];
  $admin = $_SESSION['admin'];


  if($email != null && $admin == false){
    $id_cliente = getClientIdByEmail($email)['id'];
    $favorites = getFavorites($id_cliente);
    $smarty->assign('favorites', $favorites);
    $smarty->display('commentClassFav/favorites.tpl');
  }
  else {
    header('Location: ' . $BASE_URL);
  }

?>
