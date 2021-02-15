<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
    if (session_status() == PHP_SESSION_NONE)
      {
        session_start();
      }
    ?>
    <title>my chat</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="profile">
      Вы вошли как <?php echo $_SESSION['username']; ?>
      <form action="relog.php" method="post">
        <input type="submit" name="exit" value="Выйти">
      </form>
    </div>
    <div class="chatBox">
      //отобразим тут сообщения
    </div>
    <div class="msgBox">
      <form class="sendmsg"  method="post">
        <textarea type="longtext" name="msg" ></textarea>
        <input type="button" name="send" value="Отправить" onclick="send_msg()">
      </form>
    </div>
  <script src="scripts.js"></script>
  </body>
</html>
