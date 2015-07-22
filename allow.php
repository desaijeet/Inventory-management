<?php
if(!isset($_SESSION['user']))
     header("Location:index.php");
?>
<html>
<body>
<?php
$name=$_GET['a'];
$cost=$_GET['prs'];
$des=$_GET['b'];
$img=$_GET['abc'];
$unit=$_GET['unit'];
$id=$_GET['cid'];

mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("inventory") or die(mysql_error());

mysql_query("INSERT INTO 					product_details(Product_name,Product_description,Product_cost,Product_img) VALUES('$name','$des','$cost','$img') ") or die(mysql_error()); 
		
mysql_query("ALTER TABLE `company_product` ADD `$name` INT( 20) NOT NULL") or die(mysql_error());


mysql_query("UPDATE `inventory`.`company_product` SET `$name`='$unit' WHERE`company_product`.`company_id`='$id'") or die(mysql_error());


mysql_query("ALTER TABLE `sell_product` ADD `$name` INT( 20) NOT NULL") or die(mysql_error());

mysql_query("DELETE FROM `inventory`.`allow_product` WHERE `allow_product`.`Product_name` = '$name' ");


header("Location:admingallary.php");
?>

</body>
</html>