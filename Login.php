<!DOCTYPE html>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css"  />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
</head>
<body>
	
<?php
	
	//Checking if there are any post value with the name username
	//If it exists I put it in the variable $username (else it's empty)
if(isset($_POST["username"]) != "")
{
	$username=$_POST["username"];
}else{
	$username="";
}
	//Checking if there are any post value with the name password
	//If it exists I put it in the variable $password (else it's empty)
	if(isset($_POST["password"]) != "")
{
	$password=$_POST["password"];
}else{
	$password="";
}

//Alert for missing password if username is entered and password is empty
if($password == "" && $username != "")
{
$pwdalert="<font color=red>Missing input</font>";	
}else{
$pwdalert="";
}

//Alert for missing username if password is entered and username is empty
if($password != "" && $username == "")
{
$useralert="<font color=red>Missing input</font>";	
}else{
$useralert="";
}

	//If both username and password has a value (entered data in both)
	//verifying username and password is correct and redirect to index.php
if($password != "" && $username != "")
{
	echo "checking username and password....";
}else{
echo "
 <div class='container'>
	<img src='user.png'>
    <form method='POST'>
	  <div class='form-input'>
	    <input type='text' name='username' placeholder='Enter Username'>$useralert
	  </div>
	  <div class='form-input'>
	    <input type='password' name='password' placeholder='Enter Password'>$pwdalert
	  </div>
	  <input type='submit' name='submit' value='LOGIN' class='btn-login'><br>
	  <a href='#'>Forgot Password?</a>
	</form>
  </div>";
}
?>
	
	
</body>
</html>
