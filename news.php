<?php
	include_once('header.php');
	include_once('connection.php');
	?>

    <div class="container">
        <header class="jumbotron hero-spacer">
	<?php
	$query = "SELECT * FROM news";/* ORDER BY id DESC LIMIT 10*/
	$result = mysql_query($query)or die(mysql_error());
	while($fetch=mysql_fetch_array($result)){
	?>
            <h1> <?php echo $fetch['news_title']; ?></h1>
            <p> <?php echo $fetch['news_content']; ?> </p>
             <hr>
      		<?php } ?>
			  </header>
        <hr>
        <hr>

<?php
include_once('footer.php');
?>
      