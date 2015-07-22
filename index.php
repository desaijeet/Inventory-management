<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>One Stop</title>
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="js/signin.js"></script>
		
		

	
    </head>
    <body>
        <div id="footer_bg">
            <div id="wrap">
                <div id="logo">
                    <h1><a href="index.php">ONE STOP</a></h1>
                    <p><a href="index.php"><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--live comfortably</small></a></p>
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
                    <div id="menu" align="left">
                        <ul>
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="gallery.php">Product Gallery</a></li>
                            <li><a href="report.php">Report</a></li>
                            <li><a href="product.php">Add Product</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div id="header_bg">
							<div id="slider_bg" >
								<div  class="waveshow">
								<img src="images/header.jpg" width="100%" height="275" />  </div> <!-- waveshow -->
							</div> <!-- slider_bg -->
					
					</div>
                </div>
                <div style="clear: both; padding-top: 17px;"></div>

                <div id="column_box">
                    <div class="column1">
                        <div class="column_title">
                            <h1>History</h1>
                        </div>
                        <div class="col_text">
                          <p align="left"><br/><br/>Not much of the history but has done great work in a short time. </p><br />

                            <p align="left">It is reflected from the records.</p><br />
                            <div class="read"><a href="aboutus.php">read more</a></div>
                        </div>
                    </div>
                    <div class="column2">
                        <div class="column_title">
                            <h1>Notice</h1>
                        </div>
                        <div class="col_text">
                          <p align="left"><br/> Request for new products can be added to the gallary.</p><br />

                            <p align="left">User can buy or sell products with a minority of charges.</p>
                            <p align="left">&nbsp;</p>
                            <br />
                            
                          <div class="read"><a href="aboutus.php">read more</a></div>
                        </div>
                    </div>
                    <div class="column3">
                        <div class="column_title">
                            <h1>Achievements</h1>
                        </div>
                        <div class="col_text">
                          <p align="left"><br/>Achievements need not be explained here. </p><br />

                            <p align="left">More than 10,000 transactions occurs in a month which is a great achievement for a small cap company.</p><br />
                            <div class="read"><a href="aboutus.php">read more</a></div>
                        </div>
                    </div>
                </div>
                <div style="clear: both; padding-top: 17px;"></div>

                <div id="content">
                    <div class="content_top"></div>
                    <div class="index_content_bg">
                        <div class="index_content_left">
                            
                            <img src="images/img1.jpg" alt="" title="" style="float: left; padding-right: 20px;"/>

                            <p>&nbsp;                          </p>
                            <p><strong>One Stop</strong> is an easy-to-use, quick-to-deploy online inventory management system that increases visibility and control of all inventory management processes.
                              Its customers benefit from increased accuracy, improved service levels and reduced inventory management costs</p>
                      </div>
                      <div class="foot_col2">
                          <h2>Share with Others</h2>
                          <div class="foot_pad">
                            <div class="link1"><a href="#">Subscribe to Blog</a></div>
                            <div class="link2"><a href="#">Be a fan on Facebook</a></div>
                            <div class="link3"><a href="#">RSS Feed</a></div>
                            <div class="link4"><a href="#">Follow us on Twitter</a></div>
                          </div>
                      </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="content_bot"></div>
                </div>
                <div id="footer">
                  <div class="red_hr"></div>
                    <p>Copyright  2012. <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p><!-- end of copyright notice-->
                </div>
            </div>
        </div>
    </body>
</html>
