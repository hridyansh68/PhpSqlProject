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
			$qdel="delete from menu where id=".$v;
			$conn->query($qdel);
			}
	
	echo "<script>window.location='delmenu.php';</script>";
	}
?>
</body>
</html>