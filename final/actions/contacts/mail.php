<?php
	include_once('../../config/init.php');

	if (!$_POST['fname'] || !$_POST['lname'] || !$_POST['phone'] || !$_POST['message'] || !$_POST['email']) {
	    header('Location: ' . $_SERVER['HTTP_REFERER']);
	    exit;
  	}

	$to = "docmart@mail.com";
	$subject = "Contactos de cliente";
	$txt =    "--------------------------------\n"
			. "Mensagem Automatica\n"
			. "--------------------------------\n"
			. "Nome: " . $_POST["fname"] . " " . $_POST["lname"] . "\n"
			. "Phone Number: " . $_POST["phone"] . "\n"
			. "Message:\n" . $_POST["message"];
	$headers = "From: ". $_POST["email"] . "\r\n";

	mail($to,$subject,$txt,$headers);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
