<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');

  $body = file_get_contents('php://input');
  if(isset($body)){
  	$json = json_decode($body);
    $nome = $json->nome;
    $descricao = $json->descricao;
    $genero = $json->genero;
    $tipo = $json->tipo;
    $preco = $json->preco;
    $array = $json->array;

    $caminho_da_fotografia = rand();

    if(addArticle($nome, $descricao, $genero, $tipo, $caminho_da_fotografia, $preco, $array)){
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
