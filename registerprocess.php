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
//if else existing or not
echo $username ."<br>";
echo $pass;
$uid = uniqid (rand(), true);
$id = md5($uid);


$database->insert("user_tbl", ["user_guid" => $id, "user_id" => "NULL", "username" => $username, "password" => $pass, "usertype" => "1", "verified" => "0"]);
$database->insert("user_credentials", ["user_credid" => $id, "user_id" => "NULL", "username" => $username, "password"=> $pass, "usertype" => "1", "verified" => "0", "userlevel" => "1", "photo" => "NULL"]);
;

?>