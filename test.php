<?php
echo'sahjdhsjfas';
include_once('connection.php');
	$query = "SELECT news_content FROM news";/* ORDER BY id DESC LIMIT 10*/
	echo '$query';
	$result = mysql_query($query)or die(mysql_error());
	while($row=mysql_fetch_array($result)){echo $row['news_content'];}
	?>