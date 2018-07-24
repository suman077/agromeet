//admin pannnel
<?php
include_once("connection.php");
session_start();
 $username =mysql_real_escape_string($_POST['username']);
 $password =mysql_real_escape_string($_POST['password']);
 $sql ="select * from user where user_name='$username' && user_password='$password'";
 $results  = mysql_query($sql) or die("Error on application: ".mysql_error());
 $rowcount = mysql_num_rows($results);
 if($rowcount>0)
 {
    $fetch=mysql_fetch_array($results);
	if($fetch['user_type']=="2"){
 	  	$_SESSION['username']=$fetch['username'];
		$_SESSION['status']=="login";
	   	header("Location:admin_home.php");
}
	//specialist
	//farmers
 else
 {
  //Invalied User 
 $error="Invalid Username or Password";
 include('index.php');
 }}
  else
 {
  //Invalied User 
 $error="Invalid Username or Password";
include('index.php');
 }
?>