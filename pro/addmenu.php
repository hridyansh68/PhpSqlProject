<body>
	<html>
<?php
	
	 $name=$_POST["itmname"];
	 $rate=$_POST["itmrate"];
	 
	include "connection.php";
	$qry="insert into menu (item_name,item_price)values('".$name."','".$rate."')";
	//echo $qins;
	$stmt= $conn->query($qry);
	echo "<script>window.location='reservation.php';</script>";
?>
</body>
</html>