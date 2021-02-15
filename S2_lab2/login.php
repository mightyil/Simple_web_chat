<?php
  $name = $_POST['username'];
  if ($name !="" && " ")
    {
      session_start();
      $_SESSION['username'] = $name;
      include 'index.php';
    }
    else
    {
      echo "Логин не введён! Повторите <a href='login.html'>авторизацию</a>";
    }
?>
