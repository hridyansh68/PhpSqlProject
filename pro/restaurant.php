<html>
<head>
	<title>restaurant</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
	include "index.php";
?>
<br><br>
<div id="center"><b><i><u>RESTAURANT</u></i></b></div>
<br><br>
<div id="center1">Restaurant:Sessions</div>

<table class= "table1">
<tr>
	<td><img src="image/12.jpg" width=144 height=144></a></td>
	<td>Internationally styled restaurants in Kolad , Providing you with a peacefully environment for family as well as other people.
		Food prepared is according to the Desi style and loved my people who visit us. providing a wide range and variety of foods, speciality being the indian style 
		chinese and sea food.</td>
	<td><img src="image/13.jpg" width=144 height=144></td>
</tr>
<tr>
	<td class="a">Entry</td>
	<td></td>
	<td class="a">Palm</td>
</tr>
</table>

<br><br>


<div id="center"><b><i><u>Menu</u></i></b></div>
<br><br>
<?php
	include "connection.php";
	$stmt="select * from menu;";

	$rowset = $conn->query($stmt);
	// $rowset=mysql_query($stmt);
	if(!$rowset)
	{
		echo "<h1>Incorrect mysql select Query.</h1>";
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
		echo "<td>".$result[2]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>

<br><br>

<table class="table1">
<tr>
	<td rowspan=3><img src="image/14.jpg" width='144' height='144'></a></td>
	<td class="a">TIMMING:</td>
	<td></td>
	<td rowspan=3><img src="image/15.jpg" width='144' height='144'></a></td>
</tr>
<tr>
	<td>Lunch :12:00 PM to 2:00 PM</td>
</tr>
<tr>
	<td>Dinner :7:00 PM to 1:00 AM</td>
</tr>
<tr>
	<td class="a">Sitting style</td>
	<td></td>
	<td></td>
	<td class="a" style="float:right; !important;">Cuisine</td>
</tr>
</table>
<marquee behavior=alternate><b><i>Made by Hridyansh Sahu,Prakhar Sharma and Ishaan</i></b></marquee>
</body>
</html>