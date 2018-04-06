<html>
<head>
  <title>Log in</title>
<link rel="stylesheet" href="style.css" />
<script language="javascript" type="text/javascript">
function fun_val()
	{
		var l=document.loginsell.username.value;
		if(l=="")
		{
			alert("Please Enter User name");
			document.loginsell.username.focus;
			return false;
		}
		
		var p=document.loginsell.password.value;
		if(p=="")
		{
			alert("Please Enter Password");
			document.loginsell.password.focus;
			return false;
		}
	}
</script>
</head>
<?php

  include "index.php";
?>
<body>

<form name="loginform" action="loginsession.php" method="post"><TR></tr>
  <table class = "logintable" align="center" border="3">
    <tr> 
      <td colspan="2" align="center"><h2>Login Form</h2></td>
    </tr>
    <tr> 
      <td align="center"><h3>User Name</h3></td>
      <td><input type="text" name="username" /></td>
    </tr>
    <tr> 
      <td align="center"><h3>password</h3></td>
      <td><input type="password" name="password" maxlength="8"></td>
    </tr>
    <tr> 
      <td colspan="2" align="center"><input type="submit"  value="Submit" name="ok" onClick="return fun_val();"/>
    </tr>
  </table>
</form>
<marquee behavior=alternate><b><i>Made by Hridyansh sahu,Prakhar sharma and Ishaan</i></b></marquee>
</body>
</html>