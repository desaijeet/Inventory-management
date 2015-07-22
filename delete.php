<?php
if(!isset($_SESSION['user']))
     header("Location:index.php");
?>
<html>
<body>
<?php
$abc=$_GET['a'];

mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("inventory") or die(mysql_error());

$result=mysql_query("DELETE FROM `inventory`.`product_details` WHERE `product_details`.`Product_name` = '$abc' ");

$result=mysql_query("ALTER TABLE `company_product`
  DROP $abc");

$result=mysql_query("ALTER TABLE `sell_product`
  DROP $abc");



header("Location:admingallary.php");
?>

</body>
</html>