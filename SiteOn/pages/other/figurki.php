<?php
$range1 = $_GET['catcode']*400000+1;
$range2 = $_GET['catcode']*400000+99999;
$resultmax = mysql_query("SELECT max(id) as maxid FROM picturesdata WHERE id between " . $range1 . " AND " . $range2 . " ORDER BY id") or die(mysql_error());
$datamax = mysql_fetch_assoc($resultmax);
$result = mysql_query("SELECT * FROM picturesdata WHERE id between " . $range1 . " AND " . $range2 . " ORDER BY id") or die(mysql_error());

echo '<table border="0">';
   $i=0;
   while($data = mysql_fetch_assoc($result))
   {
      if (floor($i/2) == ($i/2)) {
      echo "<tr>";
      }
	echo "<td>";
	   echo '<table bgcolor=#fff border="0" cellpadding=4 width=400>';
	      echo "<tr><td rowspan=2 align=center valign=middle width=310 height=114><a href=?menu=item&id=" . $data["id"] . "><img src=images/pictures/" . $data["id"] . ".jpg width=340 /></a></td>";
          echo "<tr><td>Цена:<br/><bold>" . $data["price"] . " лв.</bold></td></tr>";
          echo "<tr><td align=center colspan=2 bgcolor=#FFEBCD  height=30><a href=?menu=item&id=" . $data["id"] . ">" . $data["name"] . "</a></td></tr>";
       echo "</table>";
    echo "</td>";
	
   $i = $i + 1;
   
       if (floor($i/2) == ($i/2)) {
       echo "</tr>";
	   }
   }
echo "</table>";
?>