<html>
<head>
	<script language=javascript src="function.js"></script>
	<link rel="stylesheet" href="style.css" />
	<script language=javascript>
		function checkout()
		{
			var i=0;
			for(x=0;x<document.f1.elements.length;x++)
			{
				if(document.f1.elements[x].value=="")
					{
						f1.txtname.focus();
						alert("Pls Enter All Value");
						i=1;
						break;
					}
			}
			if(i==0)
			{
				f1.method="POST";
				f1.action="booking.php";
				f1.submit();
			}
		}

		function checkout1()
		{
			
				f2.method="POST";
				f2.action="addmenu.php";
				f2.submit();
		}
	</script>
</head>
<?php
	include "connection.php";
	include "index.php";
?>

<div id="center">
	<p>Welcome</p>
	<p>Please Use This section for Menu Changes.</p>
</div>

<?php
	include "connection.php";
	$stmt="select * from menu";
	$rowset= $conn->query($stmt);
	if(!$rowset)
	{
		echo "<h1>In correct mysql select Query.</h1>";
		die($stmt);
	}
	echo "<center>";
	echo "<table border=1>";
	echo "<caption><p><b><i>Menu Card</i></b></p></caption>";
	echo "<tr><th>SR.</th><th colspan=2>LIST</th></tr>";
	echo "<tr><th>No.</th><th>Name</th><th>Price</th></tr>";
	
	while($result=mysqli_fetch_array($rowset))
	{
		echo "<tr>";
		echo "<td>".$result['id']."</td>";
		echo "<td>".$result[1]."</td>";
		echo "<td>Rs. ".$result[2]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>

<br><br>

<form action="addmenu.php" method="POST" name="f2">
<table class="table3" align="center">
	
<tr>
	<th align=left>Item Name 		:</th>
	<td colspan=4><input type=text name="itmname" size=50></td>
</tr>
<tr>
	<th align=left>Rate		:</th>
	<td colspan=4><input type="text" name="itmrate" size=50></td>
</tr>
<tr>
	<td colspan=2 align=center><input type=button name=s1 value="submit" onClick="checkout1()">
	<input type=reset name=s3 value="clear"></td>
</tr>

<tr align=center>
	<td><a href=edmenu.php>Edit</a></td>
</tr>

<tr align=center>
	<td><a href=delmenu.php>Delete</a></td>
</tr>
</table>
</form>

<marquee behavior=alternate><b><i>Made by Hridyansh Sahu,Prakhar Sharma and Ishaan</i></b></marquee>
</body>
</html>