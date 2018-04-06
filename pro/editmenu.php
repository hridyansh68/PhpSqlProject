<link rel="stylesheet" href="style.css" />
<?php
	include "connection.php";

	

	
		$qupd="update menu set item_name='".$_POST["txtname"]."',item_price='".$_POST["txtprice"]."' where id='".$_POST["itemid"]."'";
		$rs= $conn->query($qupd);
		echo "<script>window.location='edmenu.php';</script>";
	
	
?>
</body>