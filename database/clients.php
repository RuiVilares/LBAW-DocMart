<?php

  function createClient($nome, $username, $telemovel, $email, $data_de_nascimento, $morada, $contribuinte, $password) {
    global $conn;

    $flag1 = true;
    $flag2 = $flag1;

    $securePassword = hash("sha256", $password);

    $conn->beginTransaction();
    $stmt = $conn->prepare('INSERT INTO "Utilizador" (username, password, nome, email) VALUES (:username, :password, :nome, :email) RETURNING id;');
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $securePassword, PDO::PARAM_STR);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    try {
        $flag1 = $stmt->execute();
        $id_cliente = $stmt->fetch()['id'];
    } catch (PDOException $e) {
        $flag1 = false;
    }

    $desativado = 'false';

    $stmt = $conn->prepare('INSERT INTO "Cliente" (contribuinte, data_de_nascimento, morada, telefone, id_cliente, desativado) VALUES (:contribuinte, :data_de_nascimento, :morada, :telefone, :id_cliente, :desativado);');
    $stmt->bindParam(':contribuinte', $contribuinte, PDO::PARAM_STR);
    $stmt->bindParam(':data_de_nascimento', $data_de_nascimento, PDO::PARAM_STR);
    $stmt->bindParam(':morada', $morada, PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $telemovel, PDO::PARAM_STR);
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    $stmt->bindParam(':desativado', $desativado, PDO::PARAM_STR);
    try {
        $flag2 = $stmt->execute();
    } catch (PDOException $e) {
        $flag2 = false;
    }

    if ($flag1 & $flag2) {
      $conn->commit();
      return true;
    } else {
      $conn->rollBack();
      return false;
    }
  }

  function isLoginCorrect($email, $password) {
    global $conn;
    $securePassword = hash("sha256", $password);
    $stmt = $conn->prepare('SELECT * FROM "Utilizador" WHERE email = :email AND password = :password');

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $securePassword, PDO::PARAM_STR);

    try {
        $stmt->execute();
        return $stmt->fetch() == true;
    } catch (PDOException $e) {
        return false;
    }
  }

  function isValidUser($email) {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM "Utilizador" WHERE email = :email');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    try {
        $stmt->execute();
        return $stmt->fetch() == true;
    } catch (PDOException $e) {
        return false;
    }
  }

  function isLocked($email) {
    global $conn;
    $stmt = $conn->prepare('SELECT desativado FROM "Utilizador", "Cliente" WHERE email = :email
                            AND "Utilizador".id = "Cliente".id_cliente');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    try {
        $stmt->execute();
        return $stmt->fetch()['desativado'] == 'true';
    } catch (PDOException $e) {
        return false;
    }
  }

  function isAdmin($email) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM "Utilizador", "Cliente"
                            WHERE email = :email AND "Cliente".id_cliente = "Utilizador".id');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    try {
        $stmt->execute();
        return $stmt->fetch() != true;
    } catch (PDOException $e) {
        return false;
    }
  }

  function getClients(){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM "Cliente", "Utilizador" WHERE "Utilizador".id = "Cliente".id_cliente');
    try {
      $stmt->execute();
      return $stmt->fetchAll();
    } catch (PDOException $e) {
      return;
    }
  }

  function getClientByEmail($email){
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM "Utilizador", "Cliente"
                            WHERE email = :email AND "Cliente".id_cliente = "Utilizador".id');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    try {
        $stmt->execute();
        return $stmt->fetch();
    } catch (PDOException $e) {
      return false;
    }
  }

  function changePassword($email, $newPassword){
    global $conn;
    $securePassword = hash("sha256", $newPassword);
    $stmt = $conn->prepare('UPDATE "Utilizador" SET password = :password WHERE email = :email');
    $stmt->bindParam(':password', $securePassword, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    try {
      $stmt->execute();
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }


  function changeInfo($email, $nome, $username, $telemovel, $data_de_nascimento, $newEmail, $morada, $contribuinte){
    global $conn;
    $stmt = $conn->prepare('UPDATE "Utilizador" SET username = :username, nome = :nome, email = :newEmail WHERE email = :email RETURNING id');
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':newEmail', $newEmail, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    try {
      $stmt->execute();
      $id_cliente = $stmt->fetch()['id'];
    } catch (PDOException $e) {
      return $e->getMessage();
    }

    $_SESSION['email'] = $newEmail;

    $stmt = $conn->prepare('UPDATE "Cliente" SET contribuinte = :contribuinte, data_de_nascimento = :data_de_nascimento, morada = :morada, telefone = :telefone WHERE id_cliente = :id_cliente');
    $stmt->bindParam(':contribuinte', $contribuinte, PDO::PARAM_INT);
    $stmt->bindParam(':data_de_nascimento', $data_de_nascimento, PDO::PARAM_STR);
    $stmt->bindParam(':morada', $morada, PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $telemovel, PDO::PARAM_INT);
    $stmt->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
  }

  function changeState($id, $desativado){
    global $conn;
    $stmt = $conn->prepare('UPDATE "Cliente" SET desativado = :desativado WHERE id_cliente = :id_cliente');
    $stmt->bindParam(':desativado', $desativado, PDO::PARAM_STR);
    $stmt->bindParam(':id_cliente', $id, PDO::PARAM_INT);
    try {
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function getClientIdByEmail($email){
    global $conn;
    $stmt = $conn->prepare('SELECT id FROM "Utilizador" WHERE email = :email');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    try {
      $stmt->execute();
      return $stmt->fetch();
    } catch (PDOException $e) {
      return false;
    }
  }


?>
