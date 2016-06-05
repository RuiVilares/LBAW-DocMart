<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');

  $id = $_GET['id'];

  if($id != null){
    $article = getArticleById($id);
    $items = getItemsByArticleId($id);
    if($article != null && $items != null){
      $smarty->assign('article', $article);
      $smarty->assign('items', $items);
      $smarty->display('item/item.tpl');
    }
    else {
      header('Location: ' . $BASE_URL);
    }
  }
  else {
    header('Location: ' . $BASE_URL);
  }
?>
