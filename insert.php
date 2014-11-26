<?php

$username="root";
$password="d3lib3R160!";
$database="KevinsData";

$id=$_POST['id'];
$faction=$_POST['faction'];
$Opponent=$_POST['Opponent'];
$WinLoss=$_POST['WinLoss'];
$gamedate=$_POST['gamedate'];

mysql_connect(localhost,$username,$password);

if ($_POST["save"]){
	@mysql_select_db($database) or die( "Unable to select database");
		If (empty($faction)):
			echo '$faction is empty ';
		elseif (empty($Opponent)): 
			echo '$Opponent is empty ';
		elseif (empty($WinLoss)):
			echo '$WinLoss is empty ';
		elseif (empty($gamedate)):  
			echo '$Date is empty ';
		else:
			$query = "INSERT INTO WinsLosses VALUES('$id','$faction','$Opponent','$gamedate', '$WinLoss')";
			echo 'Data was added to database';
		endif;
}

if($_POST["update"]){
	@mysql_select_db($database) or die( "Unable to select database");
	$query = "UPDATE WinsLosses SET faction='$faction',Opponent='$Opponent',gamedate='$gamedate',WinLoss='$WinLoss' WHERE id='$id'";
	echo 'Data was Updated in database';
}

mysql_query($query);
mysql_close();


?>
