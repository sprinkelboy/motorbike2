<!DOCTYPE html>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css"  />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
</head>
<body>
	
<?php
if(isset($_POST["username"]) != "")
{
	$username=$_POST["username"];
}else{
	$username="";
}
	
	if(isset($_POST["password"]) != "")
{
	$password=$_POST["password"];
}else{
	$password="";
}
	
if($password != "" && $username != "")
{
	echo "checking username and password....";
}else{
echo "
 <div class='container'>
	<img src='user.png'>
    <form method='POST'>
	  <div class='form-input'>
	    <input type='text' name='username' placeholder='Enter Username'>
	  </div>
	  <div class='form-input'>
	    <input type='password' name='password' placeholder='Enter Password'>
	  </div>
	  <input type='submit' name='submit' value='LOGIN' class='btn-login'><br>
	  <a href='#'>Forgot Password?</a>
	</form>
  </div>";
}
?>
	
	
</body>
</html>
