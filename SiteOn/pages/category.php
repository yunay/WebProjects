<?php
$range1 = $_GET['catcode']*100000+1;
$range2 = $_GET['catcode']*100000+99999;
$range3 = $_GET['catcode']*200000+1;
$range4 = $_GET['catcode']*200000+99999;
$range5 = $_GET['catcode']*300000+1;
$range4 = $_GET['catcode']*300000+99999;
$range4 = $_GET['catcode']*400000+1;
$range6 = $_GET['catcode']*400000+99999;
$range7 = $_GET['catcode']*500000+1;
$range8 = $_GET['catcode']*500000+99999;

$resultmax = mysql_query("SELECT max(id) as maxid FROM picturesdata WHERE id between " .
$range1 . " AND " . $range2 . " ORDER BY id") or die(mysql_error());
$datamax = mysql_fetch_assoc($resultmax);
$result = mysql_query("SELECT * FROM picturesdata WHERE id between " . $range1 . " AND " .
$range2 . " ORDER BY id") or die(mysql_error());
echo '<table border="0">';
$i=0;
while($data = mysql_fetch_assoc($result))
{
if (floor($i/2) == ($i/2)) {
echo "<tr>";
}
echo "<td>";
echo '<table bgcolor=#fff border="0" cellpadding=4 width=180>';
echo "<tr><td rowspan=2 align=center valign=middle width=96 height=114><a
href=?menu=item&id=" . $data["id"] . "><img src=images/pictures/" . $data["id"] . ".jpg
width=85 /></a></td>";
echo "<td>Кат.No.:<br/><strong>" . $data["id"] . "</strong></td></tr>";
echo "<tr><td>Цена:<br/><strong>" . $data["price"] . " лв.</strong></td></tr>";
echo "<tr><td align=center colspan=2 bgcolor=#fff height=55><a
href=?menu=item&id=" . $data["id"] . ">" . $data["name"] . "</a></td></tr>";
echo "</table>";
echo "</td>";
$i = $i + 1;
if (floor($i/2) == ($i/2)) {
echo "</tr>";
}
}
echo "</table>";
?>