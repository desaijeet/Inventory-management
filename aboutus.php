<!DOCTYPE>
<html>
<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>One Stop</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!-- Begin JavaScript -->

		<style type="text/css">
#footer_bg #wrap #content .index_content_bg .lisence_content_right div strong {
	font-weight: bold;
}
</style>
    </head>
    <body>
        <div id="footer_bg">
            <div id="wrap">
                <div id="logo">
                    <h1><a href="index.php">ONE STOP</a></h1>
                    <p><a href="index.php"><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--live comfortably</small></a></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
              </div>
<div align="right">

<?php
if(isset($_SESSION['user']))
     {
	 echo "<u><h4><font color='#FFFFFF'>Welcome -- ". $_SESSION['user']."</font></h4></u>";
	 echo "<a href = 'logout.php' ><input type='button' value='====L O G O U T===='></a></div>";
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

              <div style="clear: both; padding-top: 17px;"></div>
              <div style="clear: both; padding-top: 17px;"></div>
	<div id="header">
                    <div id="menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutus.php" class="active">About Us</a></li>
                            <li><a href="gallery.php">Product Gallery</a></li>
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
                    <div class="index_content_bg">
                        <div class="index_content_left">
                            <div class="about">
                                <h1>Founder -  Ankit Vora</h1>
                                <img src="images/pic10.jpg" alt="" title="" style="float: left; padding-right: 20px;"/>
                                <p><strong>Ankit Vora</strong> is the founder of this company. His contribution to this company is not measurable. Under his leadership the company won many awards. The credit of most of the company's achievements directly or indirectly goes for his dedication for the company.</p>
                                <p>&nbsp;</p>
                              <p>&nbsp;</p>
<br />
                                <h1>Co-Founder - Jeet Desai</h1>

                          <img src="images/pic11.jpg" alt="" title="" style="float: left; padding-right: 20px;"/><strong>Jeet Desai</strong> is the co-founder of this company. His silent contribution to this company is not measurable. Under his leadership the company won many awards. The credit of most of the company's achievements directly or indirectly goes for his dedication for the company.</div>
                        </div>
                        <div class="lisence_content_right">
                            <h1>Some words:</h1>

                            <p>&nbsp;                                </p>
                            <p><em><strong>&quot;Efforts are worth only if happiness resides&quot;--this is absolutely true but my happiness resides in this company.</strong></em></p>
                            <div style="padding-left: 20px;"">
                              <p>-- <strong>Ankit</strong></p>
                              <p>&nbsp;</p>
                              <p><br />
                              </p>
                          </div>
                            <div class="white_hr"></div>

                            <p>&nbsp;</p>
                            <p><em><strong>The bricks of hardwork were rightly supported by the perspiration of all persons involved.</strong></em></p>
                            <div style="padding-left: 20px;"">
                              <p>-- <strong>Jeet</strong></p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                            </div>
                            <div class="white_hr"></div>
                      </div>
                        <div style="clear: both;"></div>
                    </div>
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
                    <p>Copyright  2012. <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p><!-- end of copyright notice-->
                </div>
            </div>
        </div>
    </body>
</html>