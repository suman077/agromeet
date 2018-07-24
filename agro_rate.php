<?php
include_once('header.php');
include_once('connection.php');
?>
<div class="container1"> 
<header class="jumbotron hero-spacer"> 
  <div style="text-align:center; float:center;">
  <table align="center" width="95%" border="1">
  <tr style="font-size:25px; text-align:center;" bgcolor="#666666">
    <th>S.N</th>
    <th>Product</th>
	<th>Unit</th>
    <th>Selling price</th>
	<th>Buying price</th>
  </tr>
  	<?php
	$query = "SELECT * FROM agro_rate";/* ORDER BY id DESC LIMIT 10*/
	$result = mysql_query($query)or die(mysql_error());
	while($fetch=mysql_fetch_array($result)){
	?>
  <tr style="font-size:25px; color:#fff; text-align:center;" bgcolor="#333">
   
    <td><?php echo $fetch['product_id']; ?></td>
    <td><?php echo $fetch['product']; ?></td>
	<td><?php echo $fetch['unit']; ?></td>
    <td><?php echo $fetch['selling_rate']; ?></td>
    <td><?php echo $fetch['buying_rate']; ?></td>
  </tr>
  <?php } ?>
</table>

  </div>
  <hr>
  </header> 
  <hr>
<?php
include_once('footer.php');
?>
      
