<html>
<head>
	<title>Delete reservation</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<p><a href="reservation.php">Go Back</a></p>
<form action=deleres.php method=POST>
<?php
	include "connection.php";
	$qrysel="select * from reservation";
	$rs= $conn->query($qrysel);
	echo "<table border=1>";
	echo "<tr>
		<th></th><th>r_checkindt</th><th>r_checkoutdt</th>
		<th>r_noofrooms</th><th>r_type</th><th>r_name</th>
		<th>r_email</th><th>r_company</th><th>r_telephone</th><th>r_address</th><th>r_spanyreq</th>
	</tr>";

	while($v=mysqli_fetch_array($rs))
	{
		echo"<tr>";
		echo "<td><input type=checkbox name=chkd".$v['r_id']." value=".$v['r_id']."></td>";
		echo "<td>".$v[1]."</td>";
		echo "<td>".$v[2]."</td>";
		echo "<td><input type=hidden name=txtq".$v['r_id']." value=".$v['r_rooms'].">".$v['r_rooms']."</td>";
		echo "<td><input type=hidden name=txtt".$v['r_id']." value=".$v['r_type'].">".$v['r_type']."</td>";
		echo "<td>".$v[5]."</td>";
		echo "<td>".$v[6]."</td>";
		echo "<td>".$v[7]."</td>";
		echo "<td>".$v[8]."</td>";
		echo "<td>".$v[9]."</td>";
		echo "<td>".$v[10]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($rs);
	mysqli_close();
?>
<input type="submit" name="s1" value="delete">
</form>
<marquee behavior=alternate><b><i>Made by Hridyansh sahu, Prakhar sharma and Ishaan</i></b></marquee>
</body>			
</html>