<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php
$host = "localhost";
$user = "root";
$password = "";
$bd = "pictures";
$connect = mysql_connect($host, $user, $password);
mysql_select_db($bd,$connect) or die('Грешка в MySQL: ' . mysql_error());
mysql_query("SET NAMES utf8");
?>

</body>

</html>
