function send_msg()
{
  msg = document.getElementByName('msg').value;
  date = date();
  var request = new XMLHttpRequest();
  request.onreadystatechange = function()
	{
		if(request.readyState == 4)
		{
			//ответ в случае успешной отправки
      document.getElementByName('msg').value = '';
		}
	}
  request.open('POST','serv.php',true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(msg, date);
}


/*function dialog_refresh()
{
  setTimeout(
    refresh() =>
    {
      //обновление окна диалога
    },
    5000
  );
}*/
