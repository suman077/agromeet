<?php
include_once('./header.php');
?>
<div class="container1"> 
<header class="jumbotron hero-spacer"> 
  <div style="text-align:center; float:center;">
  <form name="signup" method="post" action="./signup_ctrl.php">
   <h1>Agro meet</h1>
    User name::
    <input type="text" name="username" value=""></br></br>
    Password ::
    <input type="password" name="password" value=""></br></br>
	Contact No:
	<input type="text" name="contact" value=""></br></br>
	<input type="radio" name="type" value="1" checked> Farmer
	<input type="radio" name="type" value="0">Specialist
    <br>    <br>
    <input type="submit" name="submit" value="Submit">
	<input type="reset" name="resset" value="Reset">
  </form></div>
  <hr>
  </header> 
  <hr>
<?php
include_once('./footer.php');
?>
      
