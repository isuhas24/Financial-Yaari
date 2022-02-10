<?php

session_start();

$conn = mysqli_connect('localhost', 'root', 'sailee99');

mysqli_select_db($conn, 'financial_yaari');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from users where username = '$username' && password = '$password'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $username;
	header('location:home.php');
}
else
{
	echo "incorrect username and/or password";
}

?>