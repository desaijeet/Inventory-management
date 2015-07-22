<!DOCTYPE>
<?php
if(!isset($_SESSION['user']))
     header("Location:index.php");
else if($_SESSION['user']=='admin')
	header("Location:index.php");

?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>One Stop</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		
		
	
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
                            <li><a href="gallery.php">Product Gallery</a></li>
                            <li><a href="report.php">Report</a></li>
                            
                            <li><a href="product.php" class="active">Add Product</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div id="header_bg">
							<div id="slider_bg">
								<div class="waveshow">
								<img src="images/header.jpg" width="100%" height="275" /></div> 
								
					</div>
                </div>
                <div style="clear: both; padding-top: 17px;"></div>
              <div id="content">
                    <div class="content_top"></div>
                    <div class="contact_content_bg">
                        <div class="contact_content_left">
                            <h1>&nbsp;</h1>
                            <h1><u>Add Product form:</u></h1>
                          <div class="contact">
                            <br />
                                <div id="contact_form">
                                  <form name="addproduct" action="allowproduct.php" onSubmit="return validate_form(this)" method="post" enctype="multipart/form-data">
                                        <fieldset><br/><br/>
                                        <label>Product Name :</label><br/>
                                        <input type="text" name="p_name" id="p_name"><br/>
                                        <label>Product Description :</label><br/>
                                        <input type="text" name="p_des" id="p_name"><br/>
                                        <label>No. of Product units available:</label><br/>
                                        <input type="text" name="p_units" id="p_name"><br/>
                                        <label>Product Cost :</label><br/>
                                        <input type="number" name="p_cost" id="p_cost"><br/>
                                        <label>Product image :</label><br/>
                                        <input type="file" name="file" id="file" size="75%">
                                          <br/><br/>
                                            
                                          <input type="submit" id="contact-submit" value="Submit"/>
                                          <input type="reset" id="contact-submit" value="Reset"/>
                                      </fieldset>
                                  </form>
                            </div>
                          </div>
                      </div>
                        <div class="contact_content_right">
                            <h1>Our Location</h1>
                                    <a href="#"><img src="images/contact.jpg" alt="" title="" style="margin-bottom: 10px;"/></a>
                                    <div class="white_hr"></div>
                                    <h4>Our Head Office Address</h4>
                                    <p>12-Street</p>
                                    <p>Backyard, Anand</p>
                                    <p>Phone:  (02692) 678 910</p>
                                    <p>Fax: (02692) 678 910</p>
                                    <a href="http://mail.yahoo.com" class="orange">E-mail: onestop@yahoo.com</a>
                          <div class="white_hr"></div>

                          <h4>Our Service Center Address</h4>
                          <p>12-Street</p>
                                    <p>Backyard, Anand</p>
                                    <p>Phone:  (02692) 678 910</p>
                                    <p>Fax: (02692) 678 910</p>
                                    <p><a href="http://mail.yahoo.com" class="orange">E-mail: onestop@yahoo.com</a>
                                    </p>
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
