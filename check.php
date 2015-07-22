<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head />
<body>

<?php
$con = mysql_connect("localhost","934330","naincybordia");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("934330db2", $con);


$result = mysql_query("SELECT password,priority FROM signin WHERE id='$_POST[uid]'");
$row = mysql_fetch_array($result);
$go=$row['priority'];

$usr=$_REQUEST['uid'];

if(($row['password']  == trim($_POST['pw'])))
	{
		
		session_start();
		$_SESSION['user']=$usr;
		if($row['priority'] == '1')
    		header("Location:admingallary.php");
			
		else if($row['priority'] == '0')
    		header("Location:gallery.php");
	}

else
   		echo "Your p/w or Username is incorrect.."

  ?>

</body>
</html>