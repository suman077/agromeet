<?php
include_once('connection.php');
	//if empty 
	if(!isset($username)){
	echo "username cannot be empty";
	}
$user=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$contact=mysql_real_escape_string($_POST['contact']);
$type=mysql_real_escape_string($_POST['type']);
echo $type;
$query="INSERT INTO `user` 
		(`user_name`, `user_password`, `user_type`, `user_contact`)
 		VALUES
 		 ('$user', '$password', '$type', '$contact')";
$result=mysql_query($query)or die(mysql_error());
if($result)
{
header("location:index.php");

}
?>