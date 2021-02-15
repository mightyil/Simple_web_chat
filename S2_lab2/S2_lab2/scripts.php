<?php
function write(string $file_name,$data)
{
  $sdata = serialize($data);
  if(file_put_contents($file_name,$sdata))
    echo "Файл перезаписан<br>";
  else echo "Ошибка записи<br>";
}

function read(string $file_name)
{
  if (file_exists($file_name))
    return unserialize(file_get_contents($file_name));
  else
  {
    echo "Файла не существует";
    return NULL;
  }
}
 ?>
