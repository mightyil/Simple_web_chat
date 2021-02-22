function send_msg()
{
  var msg = document.getElementById('msg').value;
  var date =  new Date();
  var request = new XMLHttpRequest();

  request.onreadystatechange = function()
	{
		if(request.readyState == 4)
		{
			//ответ в случае успешной отправки
      document.getElementById('msg').value = '';
		}
	}

  request.open('POST','serv_send.php',true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send('msg='+ msg + '&date='+date);
}

function output_dialog()
{
  var request = new XMLHttpRequest();
  request.onreadystatechange = function()
  {
    if(request.readyState == 4)
    {
      //ответ в случае успешной отправки
      console.log(request.responseText);
    }
  }

  request.open('POST','serv_refresh.php',true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send();
}

function dialog_refresh()
{
  setInterval(output_dialog,5000);
}
