<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/search.php');

  if (!validRequest()) {
    header("Location: " . $BASE_URL ."pages/item/catalog.php");
  }

  $items = searchItems(intval($_GET['nItems']), intval($_GET['page']), intval($_POST['lastId']), $_GET['search']);
  if ($items === false) {
    header ("Location: " . "../../pages/item/catalog.php");
  }

  $lastId = getLastId($items);

  $nItems = intval($_GET['nItems']);
  $numPages = countValidItems($_GET['search']);
  if ($numPages === false) {
    header("Location: " . $BASE_URL ."pages/item/catalog.php");
  }

  if ($numPages % $nItems != 0) {
    $numPages = floor($numPages / $nItems) + 1;
  } else {
    $numPages = round($numPages / $nItems, 0);
  }

  $smarty->assign('search', $_GET['search']);
  $smarty->assign('lastId', $lastId);
  $smarty->assign('items', $items);
  $smarty->assign('nItems', $nItems);
  $smarty->assign('numPages', $numPages);
  $smarty->assign('page', $_GET['page']);
  $smarty->assign('numPages', $numPages);
  $smarty->display('item/search.tpl');
?>
