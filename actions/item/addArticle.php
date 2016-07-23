<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');

  $ds = DIRECTORY_SEPARATOR;
  $storeFolder = 'img/';

  if (!$_POST['nome'] || !$_POST['descricao'] || !$_POST['preco'] || !$_POST['tipo'] || !$_POST['genero'] || empty($_FILES) || empty($_POST['cor']) || empty($_POST['tamanho']) || empty($_POST['quantidade'])) {
    $_SESSION['error_messages'][] = 'Preencha todos os campos';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/item/addArticle.php');
    exit;
  }

  $nome = strip_tags($_POST['nome']);
  $descricao = strip_tags($_POST['descricao']);
  $preco = $_POST['preco'];
  $tipo = strip_tags($_POST['tipo']);
  $genero = strip_tags($_POST['genero']);
  $arrayCor = $_POST['cor'];
  $arrayTamanho = $_POST['tamanho'];
  $arrayQuantidade = $_POST['quantidade'];

  $tempFile = $_FILES['foto']['tmp_name'];

  $targetPath = dirname(dirname(dirname(__FILE__))).$ds.$storeFolder;
  $targetFile = $_FILES['foto']['name'];
  $imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);
  $imageFileSize = $_FILES["foto"]["size"];

  if ($imageFileSize > 2000000 || $imageFileSize == 0) {
    $_SESSION['error_messages'][] = 'O tamanho da imagem não pode ultrapassar os 2MB.';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/item/addArticle.php');
    exit;
  }

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    $_SESSION['error_messages'][] = 'Apenas são permitidos ficheiros JPG, JPEG, PNG e GIF';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/item/addArticle.php');
    exit;
  }

  $caminho_da_fotografia = md5(uniqid(rand(), true)) . '.' .$imageFileType ;
  $filename = $targetPath.$caminho_da_fotografia;

  if (move_uploaded_file($tempFile, $filename)) {
    try {
      if (addArticle($nome, $descricao, $genero, $tipo, $caminho_da_fotografia, $preco, $arrayCor, $arrayTamanho, $arrayQuantidade)){
        $_SESSION['success_messages'][] = 'Artigo adicionado';
        header("Location: $BASE_URL");
      }
      else {
        $_SESSION['error_messages'][] = 'Erro ao adicionar artigo';
        header("Location: $BASE_URL" . 'pages/item/addArticle.php');
      }
    } catch (PDOException $e) {
      $_SESSION['error_messages'][] = 'Tente mais tarde';
      $_SESSION['form_values'] = $_POST;
      header("Location: $BASE_URL" . 'pages/item/addArticle.php');
      exit;
    }
  } else {
    $_SESSION['error_messages'][] = 'Não foi possivel carregar a imagem.';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/item/addArticle.php');
    exit;
  }
?>
