<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome Screen</title>
</head>

<body>
<?php
define( "DATABASE_SERVER", "localhost" );
define( "DATABASE_USERNAME", "xzhou29" );
define( "DATABASE_PASSWORD", "Xclzx0628" );
define( "DATABASE_NAME", "COSC3380Login" );
//connect to the database
$mysql = mysql_connect(DATABASE_SERVER, DATABASE_USERNAME, DATABASE_PASSWORD) or die(mysql_error());
//select the database
mysql_select_db( DATABASE_NAME );
//asign the data passed from Flex to variables
$username=$_POST["username"];
$password=$_POST["password"];
$query = "SELECT username FROM users WHERE userid = '$username' AND userpassword = '$password'";

$result = mysql_fetch_array(mysql_query($query));
if(!$result)
	{
	print("Login is invalid");
	die('Invalid query: ' . mysql_error());
	}
else
	{
	print(mysql_result(mysql_query($query), 0));
	}
?>

Welcome <?php echo $username; ?>!<br />
You are <?php echo $password; ?> years old.

</body>

</html>
