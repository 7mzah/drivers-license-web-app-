<style>
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
.paragraph{
  display:inline;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  color: white;
  font-family: Arial;
  font-style:normal;
  flex-direction: column;  /* align elements vertically within the div */
  text-align: left;
  direction: ltr;
}
span{
    display:block;
}
.container-AboutUs {
  width: 800px;
  height: 560px;
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
  top: 160px;
  transition: transform 0.5s ease-out, box-shadow 0.5s ease-out;  /* Specify the duration and easing of the animations */
  transform: translateY(0);  /* Specify the initial position */
  box-shadow: 0 0 0 rgba(0,0,0,0);  /* Specify the initial shadow */
}


.container-AboutUs:hover {
  transform: translateY(-10px);  /* Specify the final position */
  box-shadow: 0 10px 15px rgba(0,0,0,0.2);  /* Specify the final shadow */
}

.banner1{
    width: 100%;
    height: 800px;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/road2.jpg);
    background-size: cover;
    background-position: center;
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
    padding-right: 40px;
    padding-left: 50px;
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
        <title>About Us</title>
    </head>
    <body>
        <div class="banner1">
            <div class="navbar">
                <img src="images/Driving Academy-logos_transparent_1.png" class="logo" width="900px" height="auto" background-size="1000px" max-height="25%" max-width= "100%"><!-- comment -->
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="AboutUs.php">About</a></li><!-- comment -->
                    <li><a href="Contact.php">Contact</a></li><!-- comment -->
                    <li><a href="PrivacyPolicy.php">Privacy</a></li><!-- comment -->
                </ul>
            </div>
            <div class="container-AboutUs">
                <p class="title">About Us</p>
                <br>
                <p class="paragraph">
                    <span>Welcome to Our Driving Academy!</span>
                    <span> Our driving academy was founded with the goal of providing top-quality driver
                        education to students of all ages.</span><br>
                    <span>We believe that safe and responsible driving is essential for
                        everyone, and our team of experienced instructors is dedicated to helping our students
                        become confident and skilled drivers.</span><br>
                    <span>
                        Our program includes both classroom instruction and behind-the-wheel training, and we
                        offer a variety of courses to meet the needs of different students. From our beginner
                        driver education course for teens, to our advanced defensive driving course for
                        experienced drivers, we have something for everyone.</span><!-- comment --><br>
                    <span>
                        At Our Driving Academy, we are committed to safety, professionalism, and customer
                        satisfaction. Our instructors are all licensed and certified, and we use only the most
                        modern and well-maintained vehicles for our training.</span><!-- comment --><br>
                    <span>
                        Thank you for choosing Our Driving Academy for your driver education needs. We look
                        forward to helping you become a safe and skilled driver on the roads.</span><br></p>
            </div>
           
        </div>
    </body>
</html>