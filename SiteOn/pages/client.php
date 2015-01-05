<?php
$recName = $_POST["clientname"];
$recZip = $_POST["zip"];
$recAddress = $_POST["address"];
$recPhone = $_POST["phone"];
$recNotes = $_POST["notes"];
$recpicturesid = $_POST["id"];
$recStore = $_POST["store"];
$recQuantity = $_POST["quantity"];
$recPrice = $_POST["price"];
$recDiscount = $_POST["discount"];
$recAccount = $_POST["account"];
$recPassword = $_POST["password"];
$recDetails = $_POST["details"];
$recpicturesName = $_POST["picturesname"];
// $recPackage =
if (isset($_POST["package"]))
{
$recPackage = $_POST["package"];
}
else
{
$recPackage = "0";
}
$temppicturesStandart = $recQuantity * $recPrice;
if ($recQuantity > 1)
{
$temppictures = $recPrice + (($recQuantity - 1) * ($recPrice) * ((100 -
$recDiscount)/100));
}
else
{
$temppictures = $recQuantity * $recPrice;
}
if ($recPackage)
{
$tempLux = $temppicturesStandart * 5 / 100;
$strPackage = "Монтиране, <b>" . number_format($tempLux,2) . " лв.</b>" ;
}
else
{
$tempLux = 0;
$strPackage = "Стандартно, <b>0,00 лв.</b>" ;
}
if ($recZip == "1000")
{
$tempSpeditor = 0;
$strSpeditor = "<b>Безплатно</b>" ;
}
else
{
$tempSpeditor = 3 + (($recQuantity-1)*2);
$strSpeditor = "<b>" . number_format($tempSpeditor,2) . " лв.</b>" ;
}
$sqlString1 = "INSERT INTO picturesclients VALUES (0,'" . $recName . "'," . $recZip .
",'" . $recAddress . "','" . $recPhone . "','" . $recNotes . "'," . $recpicturesiid . "," .
$recQuantity . "," . $recPackage . "," . $recPrice . "," . $recDiscount . ",0,0,'" .
$recAccount . "','" . $recPassword . "')";
$storeAvailable = $recStore - $recQuantity;
$sqlString2 = "UPDATE picturesdata SET quantity = " . $storeAvailable . " WHERE id =
" . $recpicturesid;
?>
<table border=0>
<tr><td>
<table bgcolor="#fff" border="0" cellpadding="4" width="545">
<tr><td rowspan=2 align=center valign=middle width=180 height=205><img
src=images/pictures/<?php echo $recpicturesid ?>.jpg width=170 /></td>
<td><strong>Каталожен No.: </strong><h2><b><?php echo
$recpicturesid ?></b></h2><strong>Наименование: </strong><h2><b><?php echo
$recpicturesName ?></b></h2></td></tr>
<tr><td><strong>Описание: </strong><?php echo $recDetails ?></td></tr>
</table>
<table bgcolor=#fff border="0" cellpadding=4 width=545>
<tr height=35>
<td colspan=2 align=center ><b>Уверете се в правилността на заявката преди
изпращането:</b></td></tr>
<tr><td align=right >Основен продукт: </td>
<td align=left bgcolor=#fff><?php echo $recQuantity ?> бр. * <?php echo
$recPrice ?> лв. = <?php echo number_format($temppicturesStandart,2) ?> лв.</td></tr>
<tr><td align=right >Отстъпка: </td>
<td align=left bgcolor=#fff><?php echo number_format(($temppicturesStandart-
$temppictures),2) ?> лв.</td></tr>
<tr><td align=right >Покупна цена: </td>
<td align=left bgcolor=#fff><b><?php echo number_format($temppictures,2) ?>
лв.</b></td></tr>
<tr><td align=right bgcolor=#fff>Пакетиране: </td>
<td align=left bgcolor=#fff><?php echo $strPackage ?></td></tr>
<tr><td align=right bgcolor=#fff>Транспорт: </td>
<td align=left bgcolor=#fff><?php echo $strSpeditor ?></td></tr>
<tr><td align=right bgcolor=#fff>Адрес: </td>
<td align=left bgcolor=#fff>п.к. <?php echo $recZip ?>, <?php echo
$recAddress ?></td></tr>
<tr><td align=right bgcolor=#fff>Получател: </td>
<td align=left bgcolor=#fff><?php echo $recName ?>, тел.: <?php echo
$recPhone ?></td></tr>
<tr><td align=right bgcolor=#fff>Бележка: </td>
<td align=left bgcolor=#fff><?php echo $recNotes ?></td></tr>
<tr><td align=right bgcolor=#fff>Електронна поща: </td>
<td align=left bgcolor=#fff><?php echo $recAccount ?></td></tr>
<tr height=35><td colspan=2 align=center><b>Напомняме, че ще ви потърсим по
телефона за потвърждение!</b></td></tr>
<tr height=35><td colspan=2 valign="top" align=center>
<form action="?menu=record" method="post">
<input type="hidden" name="sql1" value="<?php echo $sqlString1 ?>" />
<input type="hidden" name="sql2" value="<?php echo $sqlString2 ?>" />
<input type="submit" value=" Изпратете заявката " />
</form>
</td></tr>
</table>
</td></tr></table>