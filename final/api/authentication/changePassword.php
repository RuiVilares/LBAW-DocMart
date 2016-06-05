<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $email = $_SESSION['email'];
    $password = $json->oldPassword;
    $newPassword = $json->newPassword;
    if(isLoginCorrect($email, $password)){
  		changePassword($email, $newPassword);
      $message = array('success' => 'Password sucefully changed');
  	}
  	else{
  		$message = array('error' => 'Incorrect password');
  	}
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
