<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $id = $json->id;
    $nome = $json->nome;
    $descricao = $json->descricao;
    $genero = $json->genero;
    $tipo = $json->tipo;
    $preco = $json->preco;

    $caminho_da_fotografia = rand();

    if(editArticle($id, $nome, $descricao, $genero, $tipo, $caminho_da_fotografia, $preco)){
      $message = array('success' => 'Article added with success');
  	}
  	else{
  		$message = array('error' => 'Cannot add article');
  	}
  }
  else{
  	$message = array('error' => 'Unknown error');
  }
  $JSONresponse = json_encode($message);
  echo $JSONresponse;

?>
