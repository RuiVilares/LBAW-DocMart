<?php

function getArticleById($id){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM "Artigo" WHERE id = :id');
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  try {
      $stmt->execute();
      return $stmt->fetch();
  } catch (PDOException $e) {
    return false;
  }
}

function getItemsByArticleId($id){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM "Item" WHERE id_artigo = :id');
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  try {
      $stmt->execute();
      return $stmt->fetchAll();
  } catch (PDOException $e) {
    return false;
  }
}

function getQuantity($id, $cor, $tamanho){
  global $conn;
  $stmt = $conn->prepare('SELECT quantidade FROM "Item" WHERE id_artigo = :id AND cor = :cor AND tamanho = :tamanho');
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->bindParam(':cor', $cor, PDO::PARAM_STR);
  $stmt->bindParam(':tamanho', $tamanho, PDO::PARAM_STR);
  try {
      $stmt->execute();
      return $stmt->fetch();
  } catch (PDOException $e) {
    return false;
  }
}

function getQuantityById($id){
  global $conn;
  $stmt = $conn->prepare('SELECT quantidade FROM "Item" WHERE id = :id');
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  try {
      $stmt->execute();
      return $stmt->fetch()['quantidade'];
  } catch (PDOException $e) {
    return false;
  }
}

function getItemId($id_artigo, $tamanho, $cor){
  global $conn;
  $stmt = $conn->prepare('SELECT id FROM "Item" WHERE id_artigo = :id_artigo AND cor = :cor AND tamanho = :tamanho');
  $stmt->bindParam(':id_artigo', $id_artigo, PDO::PARAM_INT);
  $stmt->bindParam(':cor', $cor, PDO::PARAM_STR);
  $stmt->bindParam(':tamanho', $tamanho, PDO::PARAM_STR);
  try {
      $stmt->execute();
      return $stmt->fetch()['id'];
  } catch (PDOException $e) {
    return false;
  }
}

function updateQuantity($id_item, $newQuantity){
  global $conn;
  $stmt = $conn->prepare('UPDATE "Item" SET quantidade = :quantidade WHERE id = :id');
  $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
  $stmt->bindParam(':id', $id_item, PDO::PARAM_INT);
  try {
    $stmt->execute();
    return true;
  } catch (PDOException $e) {
    return false;
  }
}

function addItem($id_artigo, $quantidade, $cor, $tamanho){
  global $conn;
  $stmt = $conn->prepare('INSERT INTO "Item" (id_artigo, quantidade, cor, tamanho) VALUES (:id_artigo, :quantidade, :cor, :tamanho)');
  $stmt->bindParam(':id_artigo', $id_artigo, PDO::PARAM_INT);
  $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_STR);
  $stmt->bindParam(':cor', $cor, PDO::PARAM_STR);
  $stmt->bindParam(':tamanho', $tamanho, PDO::PARAM_STR);
  try {
    $stmt->execute();
    return true;
  } catch (PDOException $e) {
    return false;
  }
}

function getComments($id) {
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM "Comentario" WHERE id_artigo = :id_artigo ORDER BY DATA DESC;');
  $stmt->bindParam(':id_artigo', $id, PDO::PARAM_INT);
  try {
      $stmt->execute();
      return $stmt->fetchAll();
  } catch (PDOException $e) {
    return false;
  }
}

function isFirstComment($id_cliente, $id_artigo, $comments) {

  foreach ($comments as $comment) {
    if ($comment['id_cliente'] == $id_cliente && $comment['id_artigo'] == $id_artigo)
      return "0";
  }

  return "1";
}

function getOwnComment($id_cliente, $id_artigo, $comments) {

  foreach ($comments as $comment) {
    if ($comment['id_cliente'] == $id_cliente && $comment['id_artigo'] == $id_artigo)
      return $comment;
  }

  return false;
}

function removeOwnComment($id_cliente, $comments) {

  foreach($comments as $key => $comment){
    if($comment['id_cliente'] == $id_cliente) {
       unset($comments[$key]);
    }
   }

  return $comments;
}

function getId($email) {
    global $conn;
    $stmt = $conn->prepare('SELECT "Cliente".id_cliente FROM "Cliente"
                INNER JOIN "Utilizador"
                ON "Utilizador".id="Cliente".id_cliente AND "Utilizador".email = :email;');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    try {
      $stmt->execute();
      return $stmt->fetch()['id_cliente'];
    } catch (PDOException $e) {
      return false;
    }
  }

?>