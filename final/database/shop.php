<?php

  function validRequest() {
  	//if it's to show the catalog then it's not necessary genre or type
  	if (!isset($_GET['genre']) && !isset($_GET['type'])) {
  		return false;
  	}

  	$genre = $_GET['genre'];
  	$type = $_GET['type'];

  	$arrayG = array('Homem','Mulher');
  	$arrayT = array('Casaco','Camisola','Calcas','Sapatos', 'Acessorio');

  	if (array_search($genre, $arrayG) === false || array_search($type, $arrayT) === false)
  		return false;

    if (!validateGet('nItems')) {
      //10 items per page
      $_GET['nItems'] = '10';
    }

    if (!validateGet('page')) {
      //page number 1
      $_GET['page'] = '1';
    }

    if(!validatePost('minPrice')){
      $_POST['minPrice'] = null;
    }

    if(!validatePost('maxPrice')){
      $_POST['maxPrice'] = null;
    }

    if(!validateArray('colors', $_POST['colors'], array('Amarelo','Preto','Vermelho','Branco', 'Azul', 'Verde'))){
      $_POST['colors'] = null;
    }

    if(!validateArray('sizes', $_POST['sizes'], array('XS','S','M','L', 'XL', 'XXL', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49'))){
      $_POST['sizes'] = null;
    }

    if (!validatePost('lastId')) {
      //start by the first item
      $_POST['lastId'] = '0';
    }

  	return true;
  }

  function validateGet($key) {
    if (isset($_GET[$key]) && is_numeric($_GET[$key]) && $_GET[$key] > 0 && $_GET[$key] == round($_GET[$key], 0)) {
      return true;
    }

    return false;
  }

  function validateArray($get, $keys, $array){
    if (is_null($keys)) {
      return false;
    }

    foreach($keys as $value){
      if(!in_array($value, $array)) {
          return false;
      }
    }

    return true;
  }

  function validatePost($key) {
    if (isset($_POST[$key]) && is_numeric($_POST[$key]) && $_POST[$key] == round($_POST[$key], 0)) {
      return true;
    }

    return false;
  }

  function filterSize($size) {
    global $conn;

    $stmt = $conn->prepare('SELECT id, preco, caminho_da_fotografia, nome, descricao FROM "Artigo" INNER JOIN "Item" ON "Item".id_artigo = "Artigo".id
        AND tamanho = :size');

    $stmt->bindParam(':size', $size, PDO::PARAM_STR);

    try {
        $stmt->execute();
        $items = $stmt->fetchAll();
    } catch (PDOException $e) {
        return false;
    }

    return $items;
  }

  function getItemsCopy($genre, $type, $nItems, $page, $lastId) {
    global $conn;

    if ($lastId >= 0) {
      $stmt = $conn->prepare('SELECT id, preco, caminho_da_fotografia, nome, descricao FROM "Artigo"
        WHERE genero = :genre AND tipo = :type AND id >= :id AND 0 < (SELECT sum(quantidade) FROM "Item" WHERE "Artigo".id = "Item".id_artigo)
        ORDER BY id LIMIT :nItems;');
    } else {
      $stmt = $conn->prepare('SELECT id, preco, caminho_da_fotografia, nome, descricao FROM "Artigo"
        WHERE genero = :genre AND tipo = :type AND id < :id AND 0 < (SELECT sum(quantidade) FROM "Item" WHERE "Artigo".id = "Item".id_artigo)
        ORDER BY id DESC LIMIT :nItems;');
      $lastId = -$lastId;
    }

    $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);
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

  function getConditions($colors, $sizes, $minPrice, $maxPrice) {
    
    $conditions = "";

    if (!is_null($colors)) {
      $conditions .= " AND ";
      $last = count($colors) - 1;

      $conditions .= "(";
      for ($i = 0; $i < $last; $i++) {
          $conditions = $conditions . " (SELECT cor FROM \"Item\" WHERE \"Item\".id_artigo = \"Artigo\".id AND quantidade > 0) = :color" . $i . " OR ";
      }

      $conditions .= " (SELECT cor FROM \"Item\" WHERE \"Item\".id_artigo = \"Artigo\".id AND quantidade > 0) = :color" . $last . ")";
    }

    if ($sizes != null) {
      $conditions .= " AND ";
      $last = count($sizes) - 1;
      $conditions .= "(";
      for ($i = 0; $i < $last; $i++){
          $conditions .= " (SELECT tamanho FROM \"Item\" WHERE \"Item\".id_artigo = \"Artigo\".id AND quantidade > 0) = :size" . $i . " OR ";
      }

      $conditions .= " (SELECT tamanho FROM \"Item\" WHERE \"Item\".id_artigo = \"Artigo\".id AND quantidade > 0) = :size" . $last . ")";
    }

    if($minPrice != null){
      $conditions .= " AND ";
      $conditions .= " preco >= :minprice";
    }
    if($maxPrice != null){
      $conditions .= " AND ";
      $conditions .= " preco <= :maxprice";
    }

    return $conditions;
  }

  function getItems($genre, $type, $nItems, $page, $lastId, $colors, $sizes, $minPrice, $maxPrice) {

    $conditions = getConditions($colors, $sizes, $minPrice, $maxPrice);

    global $conn;

    if ($lastId >= 0) {
      $stmt = $conn->prepare('SELECT id, preco, caminho_da_fotografia, nome, descricao FROM "Artigo"
        WHERE genero = :genre AND tipo = :type AND id >= :id AND 0 < (SELECT sum(quantidade) FROM "Item" WHERE "Artigo".id = "Item".id_artigo) ' . $conditions . '
        ORDER BY id LIMIT :nItems;');
    } else {
      $stmt = $conn->prepare('SELECT id, preco, caminho_da_fotografia, nome, descricao FROM "Artigo"
        WHERE genero = :genre AND tipo = :type AND id < :id AND 0 < (SELECT sum(quantidade) FROM "Item" WHERE "Artigo".id = "Item".id_artigo) ' . $conditions . '
        ORDER BY id DESC LIMIT :nItems;');
      $lastId = -$lastId;
    }

    $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);
    $stmt->bindParam(':id', $lastId, PDO::PARAM_INT);
    $stmt->bindParam(':nItems', $nItems, PDO::PARAM_INT);
    if ($colors != null) {
      $i = 0;
      foreach ($colors as $valColors) {
        $stmt->bindParam(':color' . $i , $valColors, PDO::PARAM_STR);
        $i++;
      }
    }
    if ($sizes != null) {
      $i = 0;
      foreach($sizes as $valSizes) {
        $stmt->bindParam(':size' . $i , $valSizes, PDO::PARAM_STR);
        $i++;
      }
    }
    if($minPrice != null){
      $stmt->bindParam(':minprice', $minPrice, PDO::PARAM_INT);
    }
    if($maxPrice != null){
      $stmt->bindParam(':maxprice', $maxPrice, PDO::PARAM_INT);
    }

    try {
        $stmt->execute();
        $items = $stmt->fetchAll();
    } catch (PDOException $e) {
        return false;
    }

    return evaluateItems($items);
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

  function countValidItems($genre, $type, $colors, $sizes, $minPrice, $maxPrice) {

    $conditions = getConditions($colors, $sizes, $minPrice, $maxPrice);

    global $conn;

    $stmt = $conn->prepare('SELECT count(*) FROM "Artigo"
      WHERE genero = :genre AND tipo = :type AND 0 < (SELECT sum(quantidade) FROM "Item" WHERE "Artigo".id = "Item".id_artigo) ' . $conditions . ';');

    $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);

    if ($colors != null) {
      $i = 0;
      foreach ($colors as $valColors) {
        $stmt->bindParam(':color' . $i , $valColors, PDO::PARAM_STR);
        $i++;
      }
    }
    if ($sizes != null) {
      $i = 0;
      foreach($sizes as $valSizes) {
        $stmt->bindParam(':size' . $i , $valSizes, PDO::PARAM_STR);
        $i++;
      }
    }
    if($minPrice != null){
      $stmt->bindParam(':minprice', $minPrice, PDO::PARAM_INT);
    }
    if($maxPrice != null){
      $stmt->bindParam(':maxprice', $maxPrice, PDO::PARAM_INT);
    }

    try {
        $stmt->execute();
        $count = $stmt->fetch();
        return $count["count"];
    } catch (PDOException $e) {
        return false;
    }
  }

  function getLastId($items) {
    return $items[count($items)-1]['id'];
  }

  function searchItems($keyWords) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM "Artigo" WHERE
    	((to_tsvector("portuguese", nome) @@ to_tsquery("portuguese", :kWord))
    	OR
    	((to_tsvector("portuguese", descricao) @@ to_tsquery("portuguese", :kWord));');

    $stmt->bindParam(':kWord', $keyWords, PDO::PARAM_STR);

    try {
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        return false;
    }
  }

  function getItem($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM "Artigo" WHERE id = :id;');

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        return $stmt->fetch();
    } catch (PDOException $e) {
        return false;
    }
  }
?>
