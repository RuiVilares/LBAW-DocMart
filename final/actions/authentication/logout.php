<?php
  include_once('../../config/init.php');

  session_destroy();
  $_SESSION['success_messages'][] = 'Sessão terminada';
  header('Location: ' . $BASE_URL);
?>
