<html>
<body>
<?php
if(!isset($_SESSION['user']))
     header("Location:index.php");
?>
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
		$img="images/product/" . $_FILES["file"]["name"];
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("inventory") or die(mysql_error());
		
		mysql_query("INSERT INTO 					product_details(Product_name,Product_description,Product_cost,Product_img) VALUES('$name','$des','$cost','$img') ") or die(mysql_error()); 
		
		mysql_query("ALTER TABLE `company_product` ADD `$name` INT( 20) NOT NULL") or die(mysql_error());
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
