
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
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
          echo "<p class='cont'>Логин не введён! Повторите <a href='login.html'>авторизацию</a></p>";
        }
    ?>
    <script src="bgscript.js"></script>
  </body>
</html>
