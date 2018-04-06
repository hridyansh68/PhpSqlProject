<html>
<head>
	<title>Edit Reservation</title>
	<link rel="stylesheet" href="style.css" />
	<script language=javascript src="function.js">
	</script>
	<script language=javascript>
	function checkout()
	{
		var i=0;
		for(x=0;x<document.f2.elements.length;x++)
		{
			if(document.f2.elements[x].value=="")
			{
				f2.id.focus();
				alert("Plz Enter All Value");
				i=1;	
				break;
			}
		}
		if(i==0)
		{
			f2.method="POST";
			f2.action="editmenu.php";
			f2.submit();
		}
	}
	</script>
</head>
<body>
	<p><a href="reservation.php">Go Back</a></p>
<form method=POST>
	Enter ID:
	<input type="text" name="id1">
	<input type=submit value="go" name=sgo>
</form>

<?php
	if(isset($_POST["sgo"]))
	{
		include "connection.php";
		$item_id=$_POST["id1"];
		$qsel="select * from menu where id='".$item_id."' ";

		$rs= $conn->query($qsel);

		if(mysqli_num_rows($rs)<1)
		{
			echo "<p>Record not found.</p>";
			exit();
		}
		$v=mysqli_fetch_array($rs);
?>
<form action="editmenu.php" method=POST name=f2>
<table>
<tr>
	<th>Item ID 	:</th>
	<td><input type=text name=itemid value="<?php echo $_POST['id1'];?>"></td>
</tr>
	
<tr>
	<th align=left>Item Name 	:</th>
	<td><input type=text name=txtname size=50  value="<?php echo $v['item_name'];?>"></td>
</tr>
<tr>
	<th align=left>Item Price	:</th>
	<td><input type=text name=txtprice size=50 value="<?php echo $v['item_price'];?>"></td>
</tr>
<tr>
	<td align=center colspan=2><input type="submit" name="s2" value="submit"></td>
	
</tr>
</table>

</form>
<?php } ?>
<marquee behavior=alternate><b><i>Made by Hridyansh Sahu,Prakhar Sharma and Ishaan</i></b></marquee>
</body>
</html>





				