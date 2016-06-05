<?php

  function addItem($id_item, $id_carrinho, $quantidade){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "ArtCar" (id_item, id_carrinho, quantidade) VALUES (:id_item, :id_carrinho, :quantidade)');
    $stmt->bindParam(':id_item', $id_item, PDO::PARAM_INT);
    $stmt->bindParam(':id_carrinho', $id_carrinho, PDO::PARAM_INT);
    $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
  }

  function getArticles($id_carrinho){
    global $conn;
    $stmt = $conn->prepare('SELECT "Artigo".id, "Artigo".caminho_da_fotografia,
                            "Artigo".nome, "Artigo".preco, "Item".cor, "Item".tamanho, "ArtCar".quantidade
                            FROM "ArtCar", "Item", "Artigo" WHERE "Artigo".id = "Item".id_artigo
                            AND "ArtCar".id_item = "Item".id AND "ArtCar".id_carrinho = :id_carrinho');
    $stmt->bindParam(':id_carrinho', $id_carrinho, PDO::PARAM_INT);
    try {
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
      return false;
    }
  }

  function removeItem($id_item, $id_carrinho){
    global $conn;
    $stmt = $conn->prepare('DELETE FROM "ArtCar" WHERE id_item = :id_item AND id_carrinho = :id_carrinho');
    $stmt->bindParam(':id_item', $id_item, PDO::PARAM_INT);
    $stmt->bindParam(':id_carrinho', $id_carrinho, PDO::PARAM_INT);
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
      return false;
    }
  }

  function getHistory($id_cliente){
    global $conn;
    $stmt = $conn->prepare('SELECT "Artigo".id, "Artigo".caminho_da_fotografia, "Artigo".nome,
                            "Artigo".preco, "Item".cor, "Item".tamanho, "Linha_de_compra".quantidade, "Compra".data
                            FROM "Linha_de_compra", "Item", "Artigo", "Compra" WHERE "Artigo".id = "Item".id_artigo
                            AND "Linha_de_compra".id_item = "Item".id AND "Linha_de_compra".id_compra = "Compra".id
                            AND "Compra".id_cliente = :id_cliente ORDER BY "Compra".data DESC');
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    try {
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
      return false;
    }
  }

  function getTotal($id_cliente){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM "Carrinho" WHERE "Carrinho".id = :id_cliente');
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    try {
        $stmt->execute();
        return $stmt->fetch()['total'];
    } catch (PDOException $e) {
      return false;
    }
  }

?>
