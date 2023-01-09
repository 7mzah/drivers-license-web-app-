<style>
    .container-Policy {
        width: 800px;
        height: 600px;
        margin: auto;
        background-color: transparent;
        border: 1px solid #CCCCCC;
        border-radius: 25px;
        padding: 20px;
        box-shadow: 2px 2px 5px #CCCCCC;
        position: absolute;
        margin-right: 30px;
        margin-top: -25px;
        left: -50px;
        right: 290px;
        margin-bottom: 150px;
        text-align: center;
        bottom: 60px;
        top: 140px;
        transition: transform 0.5s ease-out, box-shadow 0.5s ease-out;  /* Specify the duration and easing of the animations */
        transform: translateY(0);  /* Specify the initial position */
        box-shadow: 0 0 0 rgba(0,0,0,0);  /* Specify the initial shadow */
    }


    .container-Policy:hover {
        transform: translateY(-10px);  /* Specify the final position */
        box-shadow: 0 10px 15px rgba(0,0,0,0.2);  /* Specify the final shadow */
    }
    .paragraph1{
        display:inline;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        color: white;
        font-family: Arial;
        font-style:normal;
        flex-direction: column;  /* align elements vertically within the div */
        text-align: left;
        direction: ltr;
   
    }
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(road2.jpg);
  background-size: 500px 400px;
}
.title{
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 60px;
  color: white;
  font-family: Arial;
  font-style:normal;
}

span{
    display:block;
}


.banner1{
    width: 100%;
    height: 800px;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/road2.jpg);
    background-size: cover;
    background-position: top;
    position: relative;
   
}
.logo{
    width: 400px;
    height: 100px;
    margin-right: 410px;
}
.navbar{  
    width: 100%;
    margin: auto;
    padding-right: 50px;
    padding-left: 10px;
    padding-top: 50px;
    padding-bottom: 10px;
    
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 20px;
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
</style>
<html>
    <head>
        <meta charset="UTF-8"><!-- comment -->
        <title>Privacy Policy</title>
        <link rel="stylesheet" href="styleAbout.css">
    </head>
    <body>
        <div class="banner1">
            <div class="navbar">
                <img src="images/Driving Academy-logos_transparent_1.png" class="logo" width="900px" height="auto" background-size="1000px" max-height="25%" max-width= "100%"><!-- comment -->
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="AboutUs.php">About</a></li><!-- comment -->
                    <li><a href="Contact.php">Contact</a></li><!-- comment -->
                    <li><a href="PrivacyPolicy">Privacy</a></li><!-- comment -->
                </ul>
            </div>
            <div class="container-Policy">
                <p class="title">Privacy Policy</p>
                <br>
                <p class="paragraph1">
                    <span>
                        At Our Driving Academy, we are committed to protecting the privacy of our students and
                        website visitors. This privacy policy explains how we collect, use, and share information
                        when you visit our website or use our services.
                        Information We Collect
                    </span><br>
                    <span style="color:#009688">Information We Collect</span>
                    <span>We may collect personal information (name, email address,phone
                        number...) when you register for our services. </span><br>
                    <span>
                        We may use cookies and other tracking technologies to collect information about your
                        use of our website, such as the pages you visit and the links you click on to help us improve the performance and user experience of our website.</span><!-- comment --><br>
                    <span style="color:#009688">
                        Use of Your Information</span><!-- comment -->
                    <span>
                        We use the information we collect to improve our services, respond to your
                        inquiries. We may also use your information to personalize your experience on our website or to send you targeted
                        marketing messages.</span><br>
                    <span style="color:#009688">
                        Sharing of Your Information</span>
                    <span>
                        We may share your personal information with third parties for the purpose of providing
                        our services, such as with driving instructors or partners who assist us with payment
                        processing, for research and analysis purposes, or as required by law.
                        We take reasonable steps to protect your personal information from unauthorized
                        access or disclosure.</span><br>
                    <span style="color:#009688">Your Choices</span>
                    <span>
                        You have the right to request access to, or correction of, your personal information.</span><br>
                    <span style="color:#009688">Changes to This Privacy Policy</span>
                    <span>
                        We may update this privacy policy from time to time to reflect changes in our practices
                        or legal requirements. We encourage you to review this policy periodically to stay
                        informed about how we are protecting your personal information.</span><br>
                    <span style="color:#009688">Contact Us</span>
                    <span>
                        If you have any questions or concerns about our privacy policy, please contact us using
                        the contact information provided on our website.</span><br>
                </p>

            </div>

        </div>
    </body>
</html>
