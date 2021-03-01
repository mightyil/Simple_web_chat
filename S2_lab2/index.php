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
  <body onload="output_dialog(),dialog_refresh()">
    <div class="main">
      <div class="profile">
        Вы вошли как <?php echo $_SESSION['username']; ?>
        <form action="relog.php" method="post">
          <input type="submit" name="exit" value="Выйти">
        </form>
      </div>
      <div class="chatBox" id="chatBox">
        <!-- сообщения выводим тут -->
      </div>
      <div class="msgBox">
        <form class="sendmsg"  method="post">
          <textarea type="longtext" id="msg" ></textarea><br>
          <input type="button" name="send" value="Отправить" onclick="send_msg(),output_dialog()">
        </form>
      </div>
    </div>
  <script src="bgscript.js"></script>
  <script src="scripts.js"></script>
  </body>
</html>
