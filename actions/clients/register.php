<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  if (!$_POST['nome'] || !$_POST['username'] || !$_POST['telemovel'] || !$_POST['email'] || !$_POST['morada'] || !$_POST['contribuinte'] || !$_POST['password'] || !$_POST['data_de_nascimento']) {
    $_SESSION['error_messages'][] = 'Preencha todos os campos';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/clients/register.php');
    exit;
  }

  $nome = strip_tags($_POST['nome']);
  $username = strip_tags($_POST['username']);
  $telemovel = $_POST['telemovel'];
  $email = strip_tags($_POST['email']);
  $data_de_nascimento = strip_tags($_POST['data_de_nascimento']);
  $morada = strip_tags($_POST['morada']);
  $contribuinte = $_POST['contribuinte'];
  $password = $_POST['password'];

  try {
    if (is_numeric($contribuinte) && is_numeric($telemovel) && createClient($nome, $username, $telemovel, $email, $data_de_nascimento, $morada, $contribuinte, $password)){
      $_SESSION['success_messages'][] = 'Utilizador criado';
      header("Location: $BASE_URL");
    }
    else {
      $_SESSION['error_messages'][] = 'Erro ao criar utilizador';
      header("Location: $BASE_URL" . 'pages/clients/register.php');
    }
  } catch (PDOException $e) {

    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Username duplicado';
      $_SESSION['field_errors']['username'] = 'O username já existe';
    }
    else $_SESSION['error_messages'][] = 'Erro ao criar utilizador';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/clients/register.php');
    exit;
  }
?>
