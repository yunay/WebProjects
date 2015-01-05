<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Изкуство за всеки!</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
 
.auto-style1 {
	margin-top: 211px;
}
</style>
<link rel="shortcut icon" href="images/ic.ico"> 
</head>
<body>
<div id="wrap">
    
<div id="header">
    <div class="imghead"><img src="images/art2.png"  width="220px"></div>
    <div class="imghead1"><img src="images/art3.png"  width="220px"></div>
    <h1><a href="#">Изкуство за всеки !</a></h1>
<h2 style="margin-top:10px;">Ръчно изработени изделия, специално за Вас! </h2>
</div>
<div id="top"> </div>
<div id="contentt">
<div id="headermenu"> 
<div class="headerm">
<ul>
<li><a href="?menu=welcome">Начало</a></li> 
<li><a href="?menu=aboutus">За мен</a></li> 
<li><a href="?menu=contactme">Контакти</a></li> 
</ul>
</div>
</div>

<div class="left">
<h2>Категории :</h2>
<ul>
<li style="font-size:25px; padding-top: 15px;"><a href="?menu=kartini&catcode=1">Картини</a></li> 
<li style="font-size:25px; padding-top: 15px;"><a href="?menu=nakiti&catcode=1">Накити</a></li> 
<li style="font-size:25px; padding-top: 15px;"><a href="?menu=vazi&catcode=1">Вази</a></li> 
<li style="font-size:25px; padding-top: 15px;"><a href="?menu=figurki&catcode=1">Фигурки</a></li> 
<li style="font-size:25px; padding-top: 15px;"><a href="?menu=obeci&catcode=1">Обеци</a></li> 
</ul>
</div>

<div class="middle">
<?php
// активен код

include "pages/dbconn/connection.php";
	
	if (isset($_GET['menu']))
	   {
	   		  
	   if ($_GET['menu'] == "welcome")
	      {
	      include("pages/welcome.php");
	      }
	   if ($_GET['menu'] == "category")
	      {
	      include("pages/category.php");
	      }
	   if ($_GET['menu'] == "pictures")
	      {
	      include("pages/pictures.php");
	      }
       if ($_GET['menu'] == "client")
	      {
	      include("pages/client.php");
	      }
       if ($_GET['menu'] == "record")
	      {
	      include("pages/record.php");
	      }
	   if ($_GET['menu'] == "item")
	      {
	      include("pages/item.php");
	      }

		if ($_GET['menu'] == "aboutus")
	      {
	      include("pages/other/aboutus.php");
	      }
		if ($_GET['menu'] == "contactme")
	      {
	      include("pages/other/contactme.php");
	      }
 		if ($_GET['menu'] == "kartini")
	      {
	      include("pages/other/kartini.php");
	      }
	      	if ($_GET['menu'] == "vazi")
	      {
	      include("pages/other/vazi.php");
	      }
	      	if ($_GET['menu'] == "nakiti")
	      {
	      include("pages/other/nakiti.php");
	      }
              if ($_GET['menu'] == "figurki")
	      {
	      include("pages/other/figurki.php");
	      }
              if ($_GET['menu'] == "obeci")
	      {
	      include("pages/other/obeci.php");
	      }
	   }
	  else
	{
	include("pages/welcome.php");
	}
	mysql_close($connect); 

// Край на активен код
?>

</div>

<div style="clear: both;"> </div>

</div>
<div id="bottom"> </div>
<div id="footer">
Designed by <a>Yunay Yuksel</a>
</div>

</div>
</body>
</html>