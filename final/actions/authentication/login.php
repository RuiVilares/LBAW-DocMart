<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/clients.php');

  if (!$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Preencha os campos';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (isLoginCorrect($email, $password)) {
    if(isAdmin($email)){
      $_SESSION['admin'] = true;
      $_SESSION['email'] = $email;
      $_SESSION['success_messages'][] = 'Login de Admin';
      header('Location: ' . $BASE_URL);
    }
    else {
      if (isLocked($email)){
        $_SESSION['error_messages'][] = 'Cliente Bloqueado';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
      else {
        $_SESSION['email'] = $email;
        $_SESSION['success_messages'][] = 'Login de Cliente';
        header('Location: ' . $BASE_URL);
      }
    }
  } else {
    $_SESSION['error_messages'][] = 'Password/Email incorreto(s)';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
?>
