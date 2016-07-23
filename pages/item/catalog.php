<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/shop.php');

  //go get to the database the number of articles passed as argument
  $items = getArticles(6);

  $smarty->assign('items', $items);
  $smarty->display('item/catalog.tpl');
?>
