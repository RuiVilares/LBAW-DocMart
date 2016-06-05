<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');

  $id = $_GET['id'];

  if($id != null){
    $article = getArticleById($id);
    $items = getItemsByArticleId($id);
    $comments = getComments($id);
    $id_cliente = getId($_SESSION['email']);
    if($article != null && $items != null && $comments != false){
      $smarty->assign('ownComment', getOwnComment($id_cliente, $id, $comments));
      $smarty->assign('firstComment', isFirstComment($id_cliente, $id, $comments));
      $smarty->assign('article', $article);
      $smarty->assign('items', $items);
      $smarty->assign('comments', removeOwnComment($id_cliente, $comments));
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
