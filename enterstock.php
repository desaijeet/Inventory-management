<?php
if(!isset($_SESSION['user']))
     header("Location:index.php");
?>
<html>
<body>
<?php

mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("inventory") or die(mysql_error());
$result = mysql_query("SELECT * FROM product_details");

$usr=$_SESSION['user'];
$i=1;

mysql_query("INSERT INTO `inventory`.`sell_product` (`company_id`) VALUES ('$usr')");


mysql_query("INSERT INTO `inventory`.`company_product` (`company_id`) VALUES ('$usr')");



while($row = mysql_fetch_array($result))
{
	$a[$i] = $row['Product_name'];
	echo $a[$i];
	
	$x[$i] = $_REQUEST[$row['Product_name']];
	echo $x[$i];
	mysql_query("UPDATE`inventory`.`company_product` SET `$a[$i]`='$x[$i]' WHERE`company_product`.`company_id`='$usr' ");

	
	$i++;

}





header("Location:gallery.php");

?>

</body>
</html>