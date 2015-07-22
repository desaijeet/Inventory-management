<html>
<body>
<?php
$nm=$_POST['cname'];
$em=$_POST['email'];
$no=$_POST['num'];
$add=$_POST['cadd'];
$id=$_POST['com_id'];
$pw=$_POST['com_pw'];


mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("inventory") or die(mysql_error());


mysql_query("INSERT INTO companydetails(id,Company_Name,Company_Address,Company_phno,Company_Email) VALUES('$id','$nm','$add','$no','$em') ") or die(mysql_error()); 

mysql_query("INSERT INTO signin(id,password) VALUES('$id','$pw') ") or die(mysql_error()); 

session_start();
$_SESSION['user']=$nm;


header("Location:stock.php");
?>

</body>
</html>