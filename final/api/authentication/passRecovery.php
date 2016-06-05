<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $email = $json->email;
    if (isValidUser($email)){
      $newPassword = newPassword();
  	  changePassword($email, $newPassword);
      sendEmail($email, $newPassword);
      $message = array('success' => 'Password sucefully changed');
    }
    else {
      $message = array('error' => 'User did not exist');
    }
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;


  function newPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
      $n = rand(0, $alphaLength);
      $pass[] = $alphabet[$n];
    }
    return implode($pass);
  }

  function sendEmail($email, $newPassword) {
    $to = $email;
  	$subject = "[DocMart] Recuperacao de password";
  	$txt =    "--------------------------------\n"
  			. "Mensagem Automatica\n"
  			. "--------------------------------\n"
  			. "Email: " . $email . "\n"
  			. "Password: " . $newPassword . "\n";
  	$headers = "From: DocMart" . "\r\n";

  	mail($to,$subject,$txt,$headers);
  }
?>
