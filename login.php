<?php
include_once('header.php');
?>
    
<div class="container1"> 
<header class="jumbotron hero-spacer"> 
    <div style="text-align:center;">
	<h1>Agro meet</h1>
	<?php
	if(!isset($error)){
	}else
	{echo '<h4 style="color:red;">'. $error.'</h4>';}
	?>
	<form nam="login" method="post" action="loginctrl.php">
    User name::
    <input type="text" name="username" value=""></br></br>
    Password ::
    <input type="password" name="password" value="">
    <br>
    <br>
    <input type="submit" name="login" value="Login">
	<a href="signup.php"><input type="button" name="signup"  value="Signup"></a>
  </form></div>
  <hr>
  </header> 
  <hr>

<?php
include_once('footer.php');
?>
      
