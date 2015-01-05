<?php
$result = mysql_query($_POST["sql1"]) or die(mysql_error());
$result = mysql_query($_POST["sql2"]) or die(mysql_error());
$resultmax = mysql_query("SELECT max(id) as maxid FROM mebeliclients") or
die(mysql_error());
$datamax = mysql_fetch_assoc($resultmax);
echo "<h2>Поръчката ви е приета<br/><br/>под личен регистрационен
номер:<br/><br/><b>2012-0104-" . $datamax["maxid"] . "</b>.</h2>";
?>
<br/>
<form action="?menu=welcome" method="get">
<input type="submit" value=" Към магазина " />
</form>