<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $id = $json->id;
    if(leaveItems($id)){
      $message = array('success' => 'Article leaf with success');
  	}
  	else{
  		$message = array('error' => 'Cannot leave article');
  	}
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
