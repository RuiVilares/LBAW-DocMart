<?php
	include_once('../../config/init.php');
	include_once('../../database/shop.php');

	if (!validRequest())
		header("Location: " . "catalog.php");

	$nItems = intval($_GET['nItems']);

	$items = getItems($_GET['genre'], $_GET['type'], $nItems, intval($_GET['page']), intval($_POST['lastId']), $_POST['colors'], $_POST['sizes'], intval($_POST['minPrice']), intval($_POST['maxPrice']));

	if ($items === false) {
		header ("Location: " . "catalog.php");
	}

	$lastId = getLastId($items);

	$numPages = countValidItems($_GET['genre'], $_GET['type'], $_POST['colors'], $_POST['sizes'], intval($_POST['minPrice']), intval($_POST['maxPrice']));
	if ($numPages === false) {
		header ("Location: " . "catalog.php");
	}

	if ($numPages % $nItems != 0) {
		$numPages = floor($numPages / $nItems) + 1;
	} else {
		$numPages = round($numPages / $nItems, 0);
	}

	$smarty->assign('lastId', $lastId);
	$smarty->assign('items', $items);
	$smarty->assign('nItems', $nItems);
	$smarty->assign('numPages', $numPages);
	$smarty->assign('page', $_GET['page']);
	$smarty->assign('type', $_GET['type']);
	$smarty->assign('genre', $_GET['genre']);
	$smarty->assign('numPages', $numPages);
	$smarty->display('item/shop.tpl');
?>
