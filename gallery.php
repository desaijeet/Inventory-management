<!DOCTYPE>
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

else
{
echo "<form name='log_in' action='check.php' onSubmit='return validate_form(this)' method='post'>
  <strong>Username:</strong>
  <input type='text' name='uid' id='uid' size='10' onBlur='return validate_uid(this)'>
           <strong>&nbsp;&nbsp;&nbsp;&nbsp;Password:</strong>
           <input type='password' name='pw' id='pw' size='10' onBlur='return validate_pw(this)'>
           <input type='submit' id='log_in' value='Sign In'>
          </form>


           </div>
           <div align='right'>
             <p>Don't have an Account?..... <a href='signup.php'>SIGN UP...</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</div>
";
}
?>           


                <div id="header">
                    <div id="menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="gallery.php" class="active">Product Gallery</a></li>
                            <li><a href="report.php">Report</a></li>
                            <li><a href="product.php">Add Product</a></li>
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


$result = mysql_query("SELECT * FROM product_details");

echo "<table border='1' bordercolor='#FFFFFF' width='100%'>";
echo "<tr><u><font size='+1'>
		<th bgcolor='#00CCCC'>Product name</th>
		<th bgcolor='#00CCCC'>Product image</th>
		<th bgcolor='#00CCCC'> Description</th>
		<th bgcolor='#00CCCC'>Cost</th>
		<td></td>
		<td></td></font></u>
	</tr>";
while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<th><font size='+1'>".$row['Product_name']."</font></th>";
	echo "<td><img src='".$row['Product_img']."' height='100' width='200'/></td>";
	echo "<td>".$row['Product_description']."</td>";
	echo "<th>Rs ".$row['Product_cost']."/-</th>";
	echo "<td><u><a href='order.php?abc=$row[Product_img]&a=$row[Product_name]&b=BUY&prs=$row[Product_cost]'><input type=button value=BUY></a></u></td>";
	echo "<td><u><a href='order.php?abc=$row[Product_img]&a=$row[Product_name]&b=SELL&prs=$row[Product_cost]'><input type=button value=SELL></a></u></td>";
	echo "</tr>";
}
echo "</table>";

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
