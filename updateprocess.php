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

$username =  $_SESSION['username'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$address = $_POST['address'];

$userid = $database->select("user_credentials", "*",["username" => $username]);
foreach ($userid as $row) 
{
	$credid = $row["user_credid"];
}
$database->update("user_credentials", ["fname" => $fname, "mname" => $mname, "lname" => $lname, "contact" => $contact, "address" => $address],["user_credid" => $credid]);

if(isset($_FILES['photo']))
{
  $name_array = $_FILES['photo']['name'];
  $tmp_name_array = $_FILES['photo']['tmp_name'];
  $type_array = $_FILES['photo']['type'];
  $size_array = $_FILES['photo']['size'];
  $error_array = $_FILES['photo']['error'];
  for ($i = 0; $i < count($tmp_name_array); $i++)
  {
    if(move_uploaded_file($tmp_name_array[$i], "photos/".$name_array[$i]))
    {
      echo "CHECK >>>" . $name_array[$i]. "upload is complete <br>";
      $file = $database->select("user_credentials", "*", ["user_credid" => $credid]);
      foreach ($file as $row)
       {
        $file[$i] = "photos/".$name_array[$i];
        echo "ID >>>" . $credid . "<br>";
        echo "PATH >>>" . $file[$i];
        // $database->query("INSERT INTO `doc_file` (`user_credid`, `doc_filecontrol`, `doc_filename`) VALUES (NULL, '$doccontrol', '$file[$i]');");
        $database->update("user_credentials", ["photo" => $file[$i]],["user_credid" => $credid]); 
        // if(empty($row["doc_file"]))
        // {          
        //   $database->query("UPDATE `doc_tbl` SET `doc_file` = '$file[$i]' WHERE `doc_tbl`.`doc_id` = $docid;");
        // }
        // else
        // {
        //   $database->query("UPDATE `doc_tbl` SET `doc_file` = '$file[$i]' WHERE `doc_tbl`.`doc_id` = $docid;");
        // }
       }    
    }
    else
    {
      echo "move_uploaded_file function failed <br>";
    }
  }
}
//header ("Location: update.php");	
?>