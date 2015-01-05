<?php
$result = mysql_query("SELECT * FROM picturesdata WHERE details like '%" .
$_GET['search'] . "%' ORDER BY id") or die(mysql_error());
echo "<h2>Продукти с наличие на <b>" . $_GET['search'] . "</b> в описанието:</h2>";
echo '<table border="0">';
$i=0;
while($data = mysql_fetch_assoc($result))
{
if (floor($i/3) == ($i/3)) {
echo "<tr>";
}
echo "<td>";
echo '<table bgcolor=#CFDDFF border="0" cellpadding=4 width=180>';
echo "<tr><td rowspan=2 align=center valign=middle width=96 height=114><a
href=?menu=item&id=" . $data["id"] . "><img src=images/pictures/" . $data["id"] . ".jpg
width=85 /></a></td>";
echo "<td>Кат.No.:<br/><strong>" . $data["id"] . "</strong></td></tr>";
echo "<tr><td>Цена:<br/><strong>" . $data["price"] . " лв.</strong></td></tr>";
echo "<tr><td align=center colspan=2 bgcolor=#CFDDFF height=55><a
href=?menu=item&id=" . $data["id"] . ">" . $data["name"] . "</a></td></tr>";
echo "</table>";
echo "</td>";
$i = $i + 1;
if (floor($i/3) == ($i/3)) {
echo "</tr>";
}
}
echo "</table>";
?>