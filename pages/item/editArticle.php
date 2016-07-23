<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');

  $id = $_GET['id'];

  if($_SESSION['admin'] == true && $id != null){
    $article = getArticleById($id);
    $smarty->assign('article', $article);
    $smarty->display('item/editArticle.tpl');
  }
  else {
    header('Location: ' . $BASE_URL);
  }
?>
