<?php
  include_once('../../config/init.php');

  if($_SESSION['admin'] == true){
    $smarty->display('item/addArticle.tpl');
  }
  else {
    header('Location: ' . $BASE_URL);
  }
?>
