<?php
if(!isset($_SESSION['user']))
     header("Location:index.php");
?>

<html>
<body>
<?php
$n=$_REQUEST['name'];
$a=$_REQUEST['act'];
$u=$_REQUEST['unit'];
$usr=$_SESSION['user'];

$p=$_POST['cus'];

mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("inventory") or die(mysql_error());

$result=mysql_query("SELECT Product_cost FROM product_details WHERE Product_name='$n'");

while($row = mysql_fetch_array($result))
{
	$c = $row['Product_cost'];
	
}

$ded= $u*$c;

$result=mysql_query("SELECT balance FROM companydetails WHERE id='$usr'");

while($row = mysql_fetch_array($result))
{
	$cur = $row['balance'];
}
	$bal = $cur - $ded - 10;
		

mysql_query("UPDATE`inventory`.`companydetails`SET`balance`='$bal' WHERE`companydetails`.`id`='$usr'");


$result=mysql_query("SELECT * FROM company_product WHERE company_id='$usr'");

while($row = mysql_fetch_array($result))
{
	$pro = $row[$n];
}


		$cpd = $pro + $u;
		

mysql_query("UPDATE`inventory`.`company_product`SET`$n`='$cpd' WHERE`company_product`.`company_id`='$usr'");


$result=mysql_query("SELECT * FROM sell_product WHERE company_id='$usr'");

while($row = mysql_fetch_array($result))
{
	$pro = $row[$n];
}


		$cpd = $pro + $u;
		

mysql_query("UPDATE`inventory`.`sell_product`SET`$n`='$cpd' WHERE`company_product`.`company_id`='$usr'");




$result=mysql_query("SELECT balance FROM companydetails WHERE id='$p'");

while($row = mysql_fetch_array($result))
{
	$cur = $row['balance'];
}

		$bal = $cur + $ded - 10;

mysql_query("UPDATE`inventory`.`companydetails`SET`balance`='$bal' WHERE`companydetails`.`id`='$p'");


$result=mysql_query("SELECT * FROM company_product WHERE company_id='$p'");

while($row = mysql_fetch_array($result))
{
	$pro = $row[$n];
}

		$cpd = $pro - $u;
		


mysql_query("UPDATE`inventory`.`company_product`SET`$n`='$cpd' WHERE`company_product`.`company_id`='$p'");

$result1=mysql_query("SELECT * FROM sell_product WHERE company_id='$p'");

while($row1 = mysql_fetch_array($result1))
{
	$pro = $row1[$n];
}

		$cpd = $pro - $u;
		

mysql_query("UPDATE`inventory`.`sell_product`SET`$n`='$cpd' WHERE`sell_product`.`company_id`='jeet'");




header("Location:report.php?flag='1'");
?>

</body>
</html>