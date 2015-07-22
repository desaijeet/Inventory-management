<?php
if(!isset($_SESSION['user']))
     header("Location:index.php");
?>
<html>
<body>
<?php

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000000000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    
    if (file_exists("images/product/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/product/" . $_FILES["file"]["name"]);
	  	$name=$_POST['p_name'];
		$des=$_POST['p_des'];
		$cost=$_POST['p_cost'];
		$units=$_POST['p_units'];
		$cid=$_SESSION['user'];
		$img="images/product/" . $_FILES["file"]["name"];
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("inventory") or die(mysql_error());
		
		mysql_query("INSERT INTO 					allow_product(Product_name,Product_description,Product_cost,Product_img, Product_units,company_id) VALUES('$name','$des','$cost','$img','$units','$cid') ") or die(mysql_error()); 
		
		
		header("location:gallery.php");      
      }
    }
  }
else
  {
  echo "Invalid file";
  }


?> 
</body>
</html>
