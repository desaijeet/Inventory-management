
<!DOCTYPE>
<?php
if(!isset($_SESSION['user']))
     header("Location:index.php");
else if($_SESSION['user']!='admin')
	header("Location:report.php");
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>One Stop</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!-- Begin JavaScript -->


	
    </head>
    <body>
        <div id="footer_bg">
            <div id="wrap">
                <div id="logo">
                    <h1><a href="index.php">ONE STOP</a></h1>
                    <a href="index.php"><small>--live comfortably</small></a>
                </div>

<div align="right">

<?php
if(isset($_SESSION['user']))
     {
	 echo "<u><h4><font color='#FFFFFF'>Welcome -- ". $_SESSION['user']."</font></h4></u>";
	 echo "<a href = 'logout.php' ><input type='button' value='====L O G O U T===='></a>";
echo "</div>";
	 }

?>           


                <div id="header">
                    <div id="menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="gallery.php">Product Gallery</a></li>
                            <li><a href="adminreport.php">Report</a></li>
                            <li><a href="adminallow.php">Allow Product</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div id="header_bg">
							<div id="slider_bg">
								<div class="waveshow">
								<img src="images/header.jpg" width="100%" height="275" /></div> <!-- waveshow -->
							</div> <!-- slider_bg -->
					
					</div>
                </div>
                <div style="clear: both; padding-top: 17px;"></div>
                <div id="content">
                  <div class="content_top"></div>
                  <div class="content_bg">
                    
                    
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("inventory", $con);
echo "<br/><br/>
<div align='center'>
                            
                            <h1 ><u><font size='+2'>REPORT</font></u></h1>
</div>
<br/>";
echo "<table border='1' bordercolor='#FFFFFF' width='50%' align='center'>";
echo "<tr><u><font size='+1'>
		<th bgcolor='#00CCCC'>Customer id</th>
		<th bgcolor='#00CCCC'>Product name</th>
		<th bgcolor='#00CCCC'>Available Stock</th>
		</font></u>
	</tr>";


$result = mysql_query("SELECT Product_name FROM product_details");
$i=1;
while($row = mysql_fetch_array($result))
{
	$a[$i]=$row['Product_name'];
	$i++;
}




$k=$i-1;

$result1 = mysql_query("SELECT * FROM company_product");

while($row = mysql_fetch_array($result1))
{
	
	$j=1;
	while($j<$i)
		{
		echo "<tr>";
		if($j==1)
			echo "<th rowspan='$k'>".$row['company_id']."";
		echo "<th><font size='+1'>".$a[$j]."</font></th>";
		echo "<th>".$row[$a[$j]]."</th>";
		$j++;
		echo "</tr>";
		}
	

}
echo "</table>";

echo "<br/><br/><br/><br/>";


  ?>
                      
                      <div style="clear: both"></div>
                    </div>
                    <div style="clear: both;"></div>
                  </div>
                  <div class="content_bot"></div>
                </div>
                <div class="foot_col">
                <div class="foot_col2">
                <div class="foot_pad"></div>
                   </div>
                  <div class="foot_col2">
                    <h2>Share with Others</h2>
                        <div class="foot_pad">
                            <div class="link1"><a href="#">Subscribe to Blog</a></div>
                            <div class="link2"><a href="#">Be a fan on Facebook</a></div>
                            <div class="link3"><a href="#">RSS Feed</a></div>
                            <div class="link4"><a href="#">Follow us on Twitter</a></div>
                        </div><h2></h2>
                  </div>
                  <div style="clear: both; padding-top: 17px;"></div>
              </div>
                <div id="footer">
                  <div class="red_hr"></div>
                    <p>Copyright  2012. <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p><!-- end of copyright notice-->
                </div>
            </div>
        </div>
    </body>
</html>
