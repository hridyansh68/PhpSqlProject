<?php
	session_start();
	
	// $conn=mysql_connect("localhost","vaidyak","991385187");
	// mysql_select_db('vaidyak');
	$conn = new mysqli("localhost","root","","hotel");
    	if($conn->connect_error){
    	die($conn->connect_error);
    	}
	
	$username=$_POST['username'];
	$password=$_POST['password'];

	$loggedin = true;
	$_SESSION['loggedin'] = $loggedin;
    
	$resultset= $conn->query("select * from `user` where  `username`='".$username."' and  `password`='".$password."'",$conn);
	
	if(mysqli_num_rows($resultset)>0)
	{
	   	$_SESSION['username']=$username;
		header("location:reservation.php");
		exit();		 
	}
	else
	{
	     header("location:login.php"); 
		 exit();
	}
	
?>