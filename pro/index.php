<html>
<head>
	<title>Raaviz Hotel</title>
	<link rel="stylesheet" href="style.css" />
	<script language="javascript">
	
	<?php
	include "connection.php";
	session_start();
	$username=$_SESSION['username'];
	?>
	
	function mouseover()
	{
		document.getElementById("img1").height=350;
		document.getElementById("img1").width=1330;
	}
	function mouseout()
	{
		document.getElementById("img1").height=300;
		document.getElementById("img1").width=1330;
	}
	</script>
</head>

<body>
	<marquee behavior=alternate ><b><i>WELCOME TO HOTEL RAAVIZ</i></b></marquee>
	
	<?php
	if (isset ($_SESSION['loggedin']))
	{
	?>
	
	<p>Welcome,
	 <?php echo $username." (Admin)";?></p>
	<p><a href="logout.php">Logout</a></p>

	<form>
	<table>
		<tr>
			<td><img src="image/1.jpg" name="img1" width=1330 height=300 id= "img1" onMouseOver="mouseover()" onMouseOut="mouseout()"></td>
		</tr>
		<tr>
			<td align=center><a href=home.php>Home</a>	|
			<a href=location.php>Location</a>	|
			<!-- <a href=accommodation.php>Accomodation</a>	|
			<a href=tariff.php>Tariff & Policies</a>	| -->
			<a href=restaurant.php>Restaurant Menu</a>	|
			<a href=aboutus.php>About us</a>  |
			<a href=reservation.php>Admin Panel</a>  |
			<a href=contactus.php>Contact Us</a>
			</td>
		</tr>
	</table>
	</form>
	
	<?php
	} 
		else  
	{
	?>
	
	<form>
	<table>
		<tr>
			<td><img src="image/1.jpg" name="img1" width=1330 height=300 id= "img1" onMouseOver="mouseover()" onMouseOut="mouseout()"></td>
		</tr>
		<tr>
			<td align=center><a href=home.php>Home</a>	|
			<a href=location.php>Location</a>	|
			<!-- <a href=accommodation.php>Accomodation</a>	|
			<a href=tariff.php>Tariff & Policies</a>	| -->
			<a href=restaurant.php>Restaurant Menu</a>	|
			<a href=aboutus.php>About us</a>  |
			<a href=login.php>Login</a>  |
			<a href=contactus.php>Contact Us</a>
			</td>
		</tr>
	</table>
	</form>

<?php
}
?>
</body>
</html>