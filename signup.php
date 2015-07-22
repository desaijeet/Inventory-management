<!DOCTYPE>
<?php
if(isset($_SESSION['user']))
     header("Location:index.php");
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>One Stop</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="js/signup.js"></script>
		
	
    </head>
    <body>
        <div id="footer_bg">
            <div id="wrap">
                <div id="logo">
                    <h1><a href="index.php">ONE STOP</a></h1>
                    <a href="index.php"><small>--live comfortably</small></a>
                </div>

                <div id="header">
                    <div id="menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="gallery.php">Product Gallery</a></li>
                            <li><a href="report.php">Report</a></li>
                            <li><a href="product.php">Add Product</a></li>
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
                            <h1><u>SIGNUP FORM</u>(Step-1) :</h1>
                          <div class="contact">
                            <br />
                                <div id="contact_form">
                                  <form name="signup"action="dataentry.php" onSubmit="return validate_form(this)" method="post">
                                        <fieldset>
                                            <label>Company's Name:</label><br/>
                                            <input id="cname" type="text" name="cname" onBlur="validate_com(this)"/><br />
                                                                                       <label>Email:</label><br />
                                            <input id="email" type="text" name="email" onBlur="validate_email(this)"/><br />
                                            <label>Your Phone No.:</label><br />
                                            <input id="num" type="text" name="num" onBlur="validate_number(this)"/><br />
                                                                                      <label>Comany Address:</label><br />
                                          <textarea name="cadd" id="cadd" rows="5" cols="65" onBlur="validate_cadd(this)" /></textarea><br/>
                                          <label>User id:</label>
                                            <input id="com_id" type="text" name="com_id" onBlur="validate_id(this)"/>
                                            <label>Password:</label>
                                            <input id="com_pw" type="password" name="com_pw" onBlur="validate_pw(this)"/><br/>
                                            
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
