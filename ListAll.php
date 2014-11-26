<?php

$username="root";
$password="blah2!";
$database="blah";

$connection = mysql_connect(localhost,$username,$password);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

mysql_select_db($database,$connection);
$query="SELECT * FROM WinsLosses";
$result=mysql_query($query, $connection);
$num=mysql_numrows($result);


echo "<table border='1'>
<tr>
<th>ID</th>
<th>Faction</th>
<th>Opponent</th>
<th>Win/Loss</th>
<th>Game Date</th>
</tr>";

$i=0;
while ($i < $num) 
	{
		echo "<tr>";
		echo "<td>" . $f1=mysql_result($result,$i,"id") . "</td>";
		echo "<td>" . $f2=mysql_result($result,$i,"faction") . "</td>";
		echo "<td>" . $f3=mysql_result($result,$i,"Opponent") . "</td>";
		echo "<td>" . $f4=mysql_result($result,$i,"WinLoss") . "</td>";
		echo "<td>" . $f5=mysql_result($result,$i,"gamedate") . "</td>";
echo "</tr>";
$i++;
}
echo "</table>";
mysql_close($connection);
?>



