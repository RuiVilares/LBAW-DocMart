<?php

  function addArticle($nome, $descricao, $genero, $tipo, $caminho_da_fotografia, $preco, $array){
    global $conn;

    $stmt = $conn->prepare('INSERT INTO "Artigo" (preco, genero, tipo, caminho_da_fotografia, nome, descricao) VALUES (:preco, :genero, :tipo, :caminho_da_fotografia, :nome, :descricao) RETURNING id');
    $stmt->bindParam(':preco', $preco, PDO::PARAM_STR);
    $stmt->bindParam(':genero', $genero, PDO::PARAM_STR);
    $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
    $stmt->bindParam(':caminho_da_fotografia', $caminho_da_fotografia, PDO::PARAM_STR);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    try {
        $stmt->execute();
        $id_artigo = $stmt->fetch()['id'];
    } catch (PDOException $e) {
        return false;
    }

    foreach ($array as $value) {
      $stmt = $conn->prepare('INSERT INTO "Item" (id_artigo, quantidade, cor, tamanho) VALUES (:id_artigo, :quantidade, :cor, :tamanho)');
      $stmt->bindParam(':id_artigo', $id_artigo, PDO::PARAM_INT);
      $stmt->bindParam(':quantidade', $value->quantidade, PDO::PARAM_STR);
      $stmt->bindParam(':cor', $value->cor, PDO::PARAM_STR);
      $stmt->bindParam(':tamanho', $value->tamanho, PDO::PARAM_STR);
      try {
          $stmt->execute();
      } catch (PDOException $e) {
          return false;
      }
    }
    return true;
  }

  function editArticle($id, $nome, $descricao, $genero, $tipo, $caminho_da_fotografia, $preco){
    global $conn;
    $stmt = $conn->prepare('UPDATE "Artigo" SET preco = :preco, genero = :genero, tipo = :tipo, caminho_da_fotografia = :caminho_da_fotografia, nome = :nome, descricao = :descricao WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':preco', $preco, PDO::PARAM_STR);
    $stmt->bindParam(':genero', $genero, PDO::PARAM_STR);
    $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
    $stmt->bindParam(':caminho_da_fotografia', $caminho_da_fotografia, PDO::PARAM_STR);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }

  }

?>
