function getMessage(recepient){
	var xmlhttp;
	

if (window.XMLHttpRequest)
  {// for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }	
  
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState != 4 && xmlhttp.status == 200)
        {
            document.getElementById('body').innerHTML = "<img src='img/Loader.gif' style='width: 100%; height:40px; margin-top: 25px;'>";
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById('body').innerHTML = xmlhttp.responseText;
            $(document).ready(function(){
			$("#div1").scrollTop($("#div1")[0].scrollHeight);
			});
			
		    $(document).ready(function() {
		    setInterval(function() {
       		$.get("php/ajaxmessage.php?id=" + recepient, function (data) {
            $('#discussion').html(data);
     		});
 			}, 5000); 
			});
        }
        else
        {
            document.getElementById('body').innerHTML = "<img src='img/Loader.gif' style='width: 100%; height:40px; margin-top: 25px;'>";
        }
    }

    xmlhttp.open("GET", "php/ajaxmessage.php?id=" + recepient, true);
    xmlhttp.send();

}

function submitReply(recepient){
    var message = document.getElementById("message").value; 
	var xmlhttp;
	
if (message != ''){

if (window.XMLHttpRequest)
  {// for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }	
  
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState != 4 && xmlhttp.status == 200)
        {
            document.getElementById('body').innerHTML = "<img src='img/Loader.gif' style='width: 100%; height:40px; margin-top: 25px;'>";
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById('body').innerHTML = xmlhttp.responseText;
            $(document).ready(function(){
			$("#div1").scrollTop($("#div1")[0].scrollHeight);
			});
			document.getElementById("message").value = '';
        }
        else
        {
            document.getElementById('body').innerHTML = "<img src='img/Loader.gif' style='width: 100%; height:40px; margin-top: 25px;'>";
        }
    }
    xmlhttp.open("POST", "php/reply.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id=" + recepient + "&message=" + message);
}
}