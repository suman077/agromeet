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
	
	//if empty 
	if(!isset($username)){
	echo "username cannot be empty";
	}
	
	
	//specialist
	
	
	if($fetch['user_type']=="0"){
 	  	$_SESSION['username']=$fetch['username'];
		$_SESSION['status']=="login";
		$check=$_GET['a'];
		if(isset($check))
		{
			header("Location:home.php");
		}
		else{header("Location:post.php");}
	}
	//farmers
	else if($fetch['user_type']=="1"){	
  		$_SESSION['username']=$fetch['username'];
		$_SESSION['status']=="login";
  		header("Location:home.php");
	}
	
	 else{ 	 
 	 	 $error="Invalid Username or Password";
    	include"login.php";
		}
	}  

 else
 {
  //Invalied User 
  $error="Invalid Username or Password";
  include"login.php";
 }
?>