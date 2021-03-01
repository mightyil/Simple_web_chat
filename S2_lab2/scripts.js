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
        var str = request.responseText;
        var ans = JSON.parse(str);
        var chatBox = document.getElementById('chatBox');
        chatBox.innerHTML = '';
        ans.forEach(row =>
          {
            var msg = document.createElement('div');
            msg.className = "mesage";
            msg.innerHTML = "<p class ='user'>" + row.username + "</p>" +
                            "<p class = 'msgText'>" + row.mesage + "</p>" +
                            "<p class = 'date'>" + row.send_date + "</p>";
            chatBox.append(msg);
          }
        );
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
