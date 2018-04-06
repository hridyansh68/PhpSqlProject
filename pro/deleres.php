<html>
<head>
</head>
<body>
<?php
	include "connection.php";

	foreach($_POST as $k=>$v)
	{
		if(substr($k,0,4)=="chkd")
		{
			$qdel="delete from reservation where r_id=".$v;
			$conn->query($qdel);
			$qupd="update tariff set avroom=avroom+".$_POST['txtq'.$v]."where type='".$_POST['txtt'.$v]."'";
			$conn->query($qupd);
		}
	
	echo "<script>window.location='delres.php';</script>";
	}
?>
</body>
</html>