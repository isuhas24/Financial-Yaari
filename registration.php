<?php

session_start();

$conn = mysqli_connect('localhost', 'root', 'sailee99');

mysqli_select_db($conn, 'financial_yaari');

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from users where username = '$username'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "username already exists";
}
else
{
	$reg = "insert into users(firstname, middlename, lastname, email
	, phonenumber, username, password) values ('$firstname', '$middlename', '$lastname', '$email', '$phonenumber', '$username', '$password')";
	mysqli_query($conn, $reg);
	echo "Registration successful";
}

?>