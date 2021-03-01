<?php
  if (session_status() == PHP_SESSION_NONE)
    {
      session_start();
    }

  $link = mysqli_connect('localhost','root','','my_chat');
  if ($link == false)
  {
      print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
  }
  else
  {
      mysqli_set_charset($link,"utf8");
  }

  $sql  = "select * from mesages";
  $result = mysqli_query($link,$sql);
  if ($result == false)
  {
    print('При выполнении запроса произошла ошибка'.mysqli_error($link));
  }

  $len = mysqli_num_rows($result);
  if ($len >= 20)
  {
    $sql = "select * from mesages limit ".($len-20) .", ". 20;
  }
  else
  {
    $sql = "select * from mesages limit ". 0 .", ". $len;
  }
  $result = mysqli_query($link,$sql);
  if ($result == false)
  {
    print('При выполнении запроса произошла ошибка'.mysqli_error($link));
  }
  $topRows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  $json = json_encode($topRows);
  echo $json;

?>
