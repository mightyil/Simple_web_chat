<?php
if (session_status() == PHP_SESSION_NONE)
  {
    session_start();
  }
$username = $_SESSION['username'];
$msg = $_POST['msg'];

$link = mysqli_connect('localhost','root','','my_chat');
if ($link == false)
{
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else
{
    print("Соединение установлено успешно");
    mysqli_set_charset($link,"utf8");
}
$sql = "INSERT INTO mesages(msg_id, mesage, username, send_date)
        VALUES (NULL, '".$msg."', '".$username."', current_timestamp())";
$result = mysqli_query($link,$sql);

if ($result == false)
{
  print('При выполнении запроса произошла ошибка'.mysqli_error($link));
}

?>
