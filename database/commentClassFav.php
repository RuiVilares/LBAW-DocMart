<?php
  function existOnFavorites($id_cliente, $id_artigo){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM "Favorito" WHERE id_cliente = :id_cliente AND id_artigo = :id_artigo');
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    $stmt->bindParam(':id_artigo', $id_artigo, PDO::PARAM_INT);
    try {
      $stmt->execute();
      return $stmt->fetch() == true;
    } catch (PDOException $e) {
      return false;
    }
  }

  function insertOnFavorites($id_cliente, $id_artigo){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Favorito" (id_cliente, id_artigo) VALUES (:id_cliente, :id_artigo)');
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    $stmt->bindParam(':id_artigo', $id_artigo, PDO::PARAM_INT);
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        return false;
    }
  }

  function getFavorites($id_cliente){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM "Favorito", "Artigo" WHERE "Favorito".id_artigo = "Artigo".id AND "Favorito".id_cliente = :id_cliente');
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    try {
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        return;
    }
  }

  function deleteFromFavorites($id_cliente, $id_artigo){
    global $conn;
    $stmt = $conn->prepare('DELETE FROM "Favorito" WHERE id_cliente = :id_cliente AND id_artigo = :id_artigo');
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    $stmt->bindParam(':id_artigo', $id_artigo, PDO::PARAM_INT);
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        return;
    }
  }

  function removeComment($id_cliente, $id_artigo){
    global $conn;
    $stmt = $conn->prepare('DELETE FROM "Comentario" WHERE id_cliente = :id_cliente AND id_artigo = :id_artigo');
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    $stmt->bindParam(':id_artigo', $id_artigo, PDO::PARAM_INT);
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
  }
?>
