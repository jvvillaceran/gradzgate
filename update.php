<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
?>
<form method = "POST" enctype="multipart/form-data">
	<label><?php echo $_SESSION['username']?></label>
	<br>
	<input type = "text" name = "fname" placeholder="fname">
	<br>
	<input type = "text" name = "mname" placeholder="mname">
	<br>
	<input type = "text" name = "lname"  placeholder="lname">
	<br>
	<input type = "text" name = "contact"  placeholder="contact">
	<br>
	<input type = "text" name = "address"  placeholder="address">
	<br>
	<input type = "file" name = "photo[]" multiple="" accept="image/*" placeholder="photo">
	<br>
<button type = "submit" formaction = "updateprocess.php">SNED</button>
</form>
</body>
</html>