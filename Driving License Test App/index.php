<style>
*{
    margin:0;
    padding: 0;
    font-family: sans-serif;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/road.jpg);
    background-size: cover;
    background-position: center;
    position: relative;
}
.navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;

}

.logo{
    width: 300px;
    height: 100px;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}

.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0%;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after{
    width: 100%;
}

.content{
    width: 100%;
    position: absolute;
    top: 40%;
    transform: translateY(-40%);
    text-align: center;
    color: #fff;
}
.content h1{
    font-size: 70px;
    margin-top: 80px;
}
.content p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}
button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
span{
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span{
    width: 100%;
}
button:hover{
    border: none;
}
.site-footer
{
  background-color:#26272b;
  padding:20px 0 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.box {
      width: 400px;
      height: 100px;
      border: 2px solid white;
      display: flex;
      align-items: start;
      justify-content: center;
      font-size: 15px;
      padding: 0 20px;
      margin-left: auto;
      margin-right: 250px;
      margin-top: 10px;
      flex-direction: column;
      float: right;
     
    }

.box a:before {
      content: "\260E";
      font-size: 24px;
      margin-right: 10px;
    }
.box p {
      text-align: center;
      margin-left: 150px;
    }
.box a[href^="mailto"]:before {
      content: "\2709";
      font-size: 24px;
      margin-right: 10px;
    }
   
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5;
 
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:3px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none;
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
   
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
  
}

.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}

.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Drivers License Website</title>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="images/Driving Academy-logos_transparent_1.png" class="logo" width="1200px" height="auto" background-size="1000px" max-height="25%" max-width= "100%"><!-- comment -->
                <ul>
                    <li><a href="LandingPage.php">Home</a></li>
                    <li><a href="AboutUs.php">About</a></li><!-- comment -->
                    <li><a href="Contact.php">Contact</a></li><!-- comment -->
                    <li><a href="PrivacyPolicy.php">Privacy</a></li><!-- comment -->
                </ul>
            </div>
            <div class="content">
                <h1>DRIVING ACADEMY</h1>
                <P>Prepare yourself to your driver's license test!</br>Press Log In to continue</P>
                <div>
                <a href="LogIn.php"><button type="button"><span></span>Log In</button></a></br>don't have an account? Please Sign Up</br>
                    <a href="SignUp.php"><button type="button"><span></span>Sign Up</button></a>
                </div>
            </div>

        </div>
        <div>
           
            <footer class="site-footer" id="footer1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h6>DRIVING ACADEMY</h6>
                            <p class="text-justify">Don't think twice, it's your chance to learn driving safely for free</p>
                        </div>
                         <div class="box">
                            <p>CONTACT INFO</p>
                            <a href="tel:123-456-7890">+961-81909090</a>
                            <a href="mailto:info@example.com">info@drivingacademy.com</a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <h6>Quick Links</h6>
                            <ul class="footer-links">
                                <li><a href="AboutUs.php">About Us</a></li>
                                <li><class = "contact us" href="#contact">Contact Us</a></li>
                                <li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
                                
                            </ul>
                           
                        </div>
                    </div>
                    <hr>
                </div>
                <div id="contact" class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
                                <a href="#">Scanfcode</a>.
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>



        <?php
        // put your code here
        ?>
    </body>
</html>