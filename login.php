<?php
include('db.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form action="" method="post">
<h1>Login Here:</h1>
<br><br>
<label>UserName</label>
<br><br>
<input type="text" name="username">
<br><br>
<label>Password</label>
<br><br>
<input type="password" name="pswd">
<br><br>
<input type="submit" name="login" value="login">
</form>
<?php
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['pswd'];

	$query = "select* from shahroz_tb where username = '$username' and password = '$password'";
	
	$run = mysqli_query($con,$query);
	$totalrow = mysqli_num_rows($run);
	
	if($totalrow)
	{
		header('location:dashboard.php');
	}
	else
	{
		echo"please enter correct email and password!";
	}
	}
?>
</body>
</html>