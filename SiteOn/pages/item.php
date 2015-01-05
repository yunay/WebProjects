<?php
$result = mysql_query("SELECT * FROM picturesdata WHERE id = " . $_GET['id']) or
die(mysql_error());
$data = mysql_fetch_assoc($result);
echo '<h2><i>Вашият избор е:</i> <b>' . $data["name"] . '</b></h2>';
echo "<table border=0><tr><td>";
echo '<table bgcolor=#fff border="0" cellpadding=4 width=630>';
echo "<tr><td rowspan=2 align=center valign=middle width=260 height=296><img
src=images/pictures/" . $data["id"] . ".jpg width=460 /></td>";
echo "<td>Каталожен No.: <strong>" . $data["id"] . "<br/></strong>Цена:
<strong>" . $data["price"] . " лв.<br/></strong>Наличност: ";
if ($data["quantity"] > 1) {
echo "<b>" . $data["quantity"] . "</b> бр.";
echo "<br/><strong>Отстъпка: </strong>" . $data["discount"] . "%</strong>
за втори и по-голям брой артикули от избрания.";
if ($data["package"] == 1) {
echo "<br/><strong>Монтаж: </strong>стандартна и
<strong>Майсторско</strong>.";
}
else {
echo "<br/><strong>Монтаж: </strong>стандартна.";
}
echo "<br/><strong>Транспортиране: </strong>В зависимост от пощенския код
и количеството.</td></tr>";
} else {
echo "<strong><b>ИЗЧЕРПАНА!<br>Извиняваме се за причиненото
неудобство.</b></strong></td></tr>";
}
echo "<tr><td><strong>Описание: </strong>" . $data["details"] .
"</td></tr>";
echo "</td></tr></table>";
if ($data["quantity"] > 1) {
?>
<table bgcolor=#fff border="0" cellpadding=4 width=630>
<form method="post" action="?menu=client">
<tr height=35>
<td colspan=2 align=center ><i>Попълнете внимателно заявката:</i></td></tr>
<!-- <input type="hidden" name="menu" value="client" /> -->
<input type="hidden" name="id" value="<?php echo $data["id"] ?>" />
<input type="hidden" name="store" value="<?php echo $data["quantity"] ?>" />
<input type="hidden" name="price" value="<?php echo $data["price"] ?>" />
<input type="hidden" name="discount" value="<?php echo $data["discount"] ?>"
/>
<input type="hidden" name="details" value="<?php echo $data["details"] ?>" />
<input type="hidden" name="pictureiname" value="<?php echo $data["name"] ?>" />
<tr><td align=right >Количество (до <b> <?php echo $data["quantity"] ?></b>
броя): </td>
<td align=left bgcolor=#fff>
<input type="text" id="myquantity" name="quantity" size="4" value="1"
onChange="entryCheck(this.form);" />
<b><label for="myquantity" id="quantityLabel"><?php echo
$data["price"] ?></label></b> лв.
</td></tr>
<?php
if ($data["package"]) {

}
else
{
?> <input type="hidden" name="package" value="0" /> <?php
}
?>
<tr><td align=right bgcolor=#fff>Пощенски код: </td>
<td align=left bgcolor=#fff><input type="text" id="myzip" name="zip"
size="4" maxlength="4" value="1000" onChange="entryCheck(this.form);" />
<b><label for="myzip" id="zipLabel">0.00</label></b> лв.
</td></tr>
<tr><td align=right bgcolor=#fff>Адрес: </td>
<td align=left bgcolor=#fff><input type="text" id="myaddress"
name="address" size="45" maxlength="45" /></td></tr>
<tr><td align=right bgcolor=#fff>Телефон: </td>
<td align=left bgcolor=#fff><input type="text" id="myphone" name="phone"
size="25" maxlength="45" /></td></tr>
<tr><td align=right bgcolor=#fff>Име и фамилия на купувача: </td>
<td align=left bgcolor=#fff><input type="text" id="myclientname"
name="clientname" size="40" maxlength="45" /></td></tr>
<tr><td align=right bgcolor=#fff>Електронна поща: </td>
<td align=left bgcolor=#fff><input type="text" id="myaccount"
name="account" size="30" maxlength="45" onBlur="accountCheck(this.form);" />
<b><label for="myaccount" id="accountLabel">*</label></b></td></tr>
<tr height=35><td colspan=2 align=center><i>Ще ви потърсим за
потвърждение!</i></td></tr>
<tr height=35><td colspan=2 valign="top" align=center>
	<input type="submit"
value=" Преминете към потвърждаване " onClick="recordCheck(this.form);" style="height: 31px" /></td></tr>
</form></table>
<?php
}
echo "</td></tr></table>";
?>