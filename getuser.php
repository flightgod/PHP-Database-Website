<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','d3lib3R160!','KevinsData');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM WinsLosses WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Faction</th>
<th>Opponent</th>
<th>Win/Loss</th>
<th>Game Date</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['faction'] . "</td>";
  echo "<td>" . $row['Opponent'] . "</td>";
  echo "<td>" . $row['WinLoss'] . "</td>";
  echo "<td>" . $row['gamedate'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
