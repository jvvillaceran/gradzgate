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
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$contact = $_POST['contact'];

echo $pass;
$uid = uniqid (rand(), true);
$id = md5($uid);

$database->insert("user_tbl", ["user_guid" => $id, "user_id" => "NULL", "username" => $username, "password" => $pass, "usertype" => "3", "verified" => "0"]);
$database->insert("user_credentials", ["user_credid" => $id, "user_id" => "NULL", "username" => $username, "password"=> $pass, "usertype" => "3", "verified" => "0", "deleted" => "0", "fname" => $fname, "mname" => $mname, "lname" => $lname, "address" => $address, "contact" => $contact, "userlevel" => "1", "photo" => "NULL"]);
;
//
?>