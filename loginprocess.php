<?php
require 'medoo/medoo.php';
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'gradzgate',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8'
]);

session_start();

$username = $_POST['username'];
$pass = $_POST['password'];

$login = $database->select("user_tbl", "*", ["AND" => ["username" => $username, "password" => $pass]]);
if(count($login) == "1")
{
	$_SESSION['username'] = $username;
	header("Location: alumni/alumniprofile.php");
	echo "user exists";
}
else
{
	echo "Username/Password is incorrect";
}
?>