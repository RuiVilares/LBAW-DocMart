<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR .'database/review.php');

  	if ("1" == $_POST['firstComment']) {
    	echo addComment($_POST['id'], $_SESSION['email'], $_POST['comment'], $_POST['stars']);
  	} else {
  		echo updateComment($_POST['id'], $_SESSION['email'], $_POST['comment'], $_POST['stars']);
  	}
?>