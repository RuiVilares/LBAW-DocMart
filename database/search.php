<?php

  function validRequest() {

    if (!validateGet('nItems')) {
      //10 items per page
      $_GET['nItems'] = '6';
    }

    if (!validateGet('page')) {
      //page number 1
      $_GET['page'] = '1';
    }

    if (!validateSearch()) {
      return false;
    }

    if (!validatePost('lastId')) {
      //start by the first item
      $_POST['lastId'] = '0';
    }

    return true;
  }

  function validatePost($key) {
    if (isset($_POST[$key]) && is_numeric($_POST[$key]) && $_POST[$key] == round($_POST[$key], 0)) {
      return true;
    }

    return false;
  }

  function validateGet($key) {
    if (isset($_GET[$key]) && is_numeric($_GET[$key]) && $_GET[$key] > 0 && $_GET[$key] == round($_GET[$key], 0)) {
      return true;
    }

    return false;
  }

  function validateSearch() {
    //search is set, not null, a string and its length > 0
    if (!isset($_GET['search']) || is_null($_GET['search']) || !is_string($_GET['search']) || strlen($_GET['search']) <= 0) {
      return false;
    }

    return true;
  }

  function getLastId($items) {
    return $items[count($items)-1]['id'];
  }

  function evaluateItems($items) {
    global $conn;

    $stmt = $conn->prepare('SELECT count(*), avg(classificacao) FROM "Comentario" WHERE classificacao > 0 AND id_artigo = :id;');

    foreach($items as &$value) {
      $value['count'] = 0;
      $value['avg'] = 0;

      $stmt->bindParam(':id', $value['id'], PDO::PARAM_INT);

      try {
          $stmt->execute();
          $evaluation = $stmt->fetch();
      } catch (PDOException $e) {
          return false;
      }

      if ($evaluation['avg'] != null) {
        $value['count'] = intval($evaluation['count']);
        $value['avg'] = round(intval($evaluation['avg']), 0);
      }
    }

    return $items;
  }

  function countValidItems($keyWords) {
    global $conn;

    $stmt = $conn->prepare('SELECT count(*) FROM "Artigo"
      WHERE 0 < (SELECT sum(quantidade) FROM "Item" WHERE "Artigo".id = "Item".id_artigo) AND (
      (to_tsvector(\'portuguese\', nome) @@ to_tsquery(\'portuguese\', :kWord))
     OR
      (to_tsvector(\'portuguese\', descricao) @@ to_tsquery(\'portuguese\', :kWord))
      );');

    $stmt->bindParam(':kWord', $keyWords, PDO::PARAM_STR);

    try {
        $stmt->execute();
        $count = $stmt->fetch();
        return $count["count"];
    } catch (PDOException $e) {
        return false;
    }
  }

  function searchItems($nItems, $page, $lastId, $keyWords) {
   global $conn;

   $conditions = "";

   if ($lastId >= 0) {
    $conditions = 'AND id >= :id ORDER BY id';
   } else {
    $conditions = 'AND id < :id ORDER BY id DESC';
    $lastId = -$lastId;
   }

   $stmt = $conn->prepare('SELECT id, preco, caminho_da_fotografia, nome, descricao FROM "Artigo" WHERE
    0 < (SELECT sum(quantidade) FROM "Item" WHERE "Artigo".id = "Item".id_artigo) AND (
      (to_tsvector(\'portuguese\', nome) @@ to_tsquery(\'portuguese\', :kWord))
     OR
      (to_tsvector(\'portuguese\', descricao) @@ to_tsquery(\'portuguese\', :kWord))
    ) ' . $conditions . ' LIMIT :nItems;');

    $stmt->bindParam(':kWord', $keyWords, PDO::PARAM_STR);
    $stmt->bindParam(':id', $lastId, PDO::PARAM_INT);
    $stmt->bindParam(':nItems', $nItems, PDO::PARAM_INT);

     try {
       $stmt->execute();
       $items = $stmt->fetchAll();
     } catch (PDOException $e) {
       return false;
     }

    return evaluateItems($items);

   }
?>