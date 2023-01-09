<?php
include 'database.php';
if(isset($_POST['firstname']) && !empty($_POST['firstname']) &&
        isset($_POST['lastname']) && !empty($_POST['lastname']) &&
                isset($_POST['username']) && !empty($_POST['username']) &&
        isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber'])&&
        isset($_POST['birthdate']) && !empty($_POST['birthdate']) &&
        isset($_POST['password']) && !empty($_POST['password'])
        && isset($_POST['cpassword']) && !empty($_POST['cpassword'])&&
        isset($_POST['gender']) && !empty($_POST['gender']))
{
    $fn=$_POST['firstname'];
    $ln=$_POST['lastname'];
    $u=$_POST['username'];
    $e=$_POST['email'];
    $n=$_POST['phoneNumber'];
    $b=$_POST['birthdate'];
    $p=$_POST['password'];
    $c=$_POST['cpassword'];
    $g=$_POST['gender'];
   
    
    
    $query="SELECT * FROM `users` WHERE `username`='$u' ";
    $res= mysqli_query($con, $query);
    $nbrows= mysqli_num_rows($res);
    if($nbrows==1)
    {
       ?>
       <script type="text/javascript">
        alert("Choose another username");
        window.location.href = "SignUp.php";
        </script>
        <?php
    }
    else if ($nbrows==0 && $p!=$c){
        ?>
       <script type="text/javascript">
        alert("Passwords don't match!");
        window.location.href = "SignUp.php";
        </script>
        <?php
    }
    else if($nbrows==0 && $p==$c)
    {
        $query="INSERT INTO `users` (`username`, `password`, `email`, `birthdate`, `gender`, `firstname`, `lastname`, `phoneNumber`)"
                . " VALUES ('$u', '$p', '$e', '$b', '$g', '$fn', '$ln', '$n');";
        $res=mysqli_query($con,$query);
        if($res)
        {
            header("Location:index.php");
        }
        $query = "SELECT * ";
        $users = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM `users` WHERE username = '{$u}'"));
        $userid = $users['id'];

        $initialize = mysqli_query($mysqli, "INSERT INTO `user_status`(`id` , `score`, `taken_exam`) VALUES ($userid, 0, 0) ");
            }
}?>
<style>
*{
    margin:0;
    padding: 0;
    font-family: sans-serif;
}
.banner{
    width: 100%;
    height: 800px;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/road2.jpg);
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
/*.image{
    margin-left: 3px;
    width: 500px;
    cursor:pointer;
    object-fit: cover;
}*/
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

/*.container-SignUp{
  max-width: 700px;
  width: 100%;
  background-color:transparent;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}*/
.container-SignUp{
  width: 630px;
  margin: auto;
  background-color: transparent;
  border: 1px solid #CCCCCC;
  border-radius: 25px;
  padding: 20px;
  box-shadow: 2px 2px 5px #CCCCCC;
  position: absolute;
  margin-right: 130px;
  left: -50px;
  right: 250px;
  margin-bottom: 110px;
  margin-top: 15px;
  text-align: center;
  bottom: -80px;
  top: 130px;
  transition: transform 0.5s ease-out, box-shadow 0.5s ease-out;  /* Specify the duration and easing of the animations */
  transform: translateY(0);  /* Specify the initial position */
  box-shadow: 0 0 0 rgba(0,0,0,0);  /* Specify the initial shadow */
}

.container-SignUp:hover {
  transform: translateY(-10px);  /* Specify the final position */
  box-shadow: 0 10px 15px rgba(0,0,0,0.2);  /* Specify the final shadow */
}
.container-SignUp .title{
  font-size: 40px;
  font-weight: 300;
  text-align: center;
  color: white;
}
.container-SignUp .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: transparent;
}
#Fname{
  font-family: sans-serif;
  font-size: 14px;
  background-color: transparent;
  color: white;
}
#Lname{
  font-family: sans-serif;
  font-size: 14px;
  background-color: transparent;
  color: white;
}
#user{
  font-family: sans-serif;
  font-size: 14px;
  background-color: transparent;
  color: white;
}
#email{
  font-family: sans-serif;
  font-size: 14px;
  background-color: transparent;
  color: white
}

#phone{
  font-family: sans-serif;
  font-size: 14px;
  background-color: transparent;
  color: white;
}
#birth{
  font-family: sans-serif;
  font-size: 14px;
  background-color: transparent;
  color: white;
}
#pass{
  font-family: sans-serif;
  font-size: 14px;
  background-color: transparent;
  color: white;
}
#pass-new{
  font-family: sans-serif;
  font-size: 14px;
  background-color: transparent;
  color: white;
}
input[type="date"]{
    color: grey;
  }
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
/*for the text fields width*/
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
/*for the labels firstname...*/
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
  color:white;
}
/*structure of text-fields*/
.user-details .input-box input{
  height: 40px;
  width: 250px;
  outline: none;
  font-size: 14px;
  border-radius: 25px;
  padding-left: 18px;
  border: 1px solid #CCCCCC;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
/*focus on text-fields--> the border will change from white to blue*/
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #009688;
}
/*to display title gender*/
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
  color: white;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
   margin-left: 50px;
   color:white;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 15px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #009688;
   border-color: white;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0;
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 25px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
/*   background: linear-gradient(135deg, #71b7e6, #9b59b6);*/
   background-color:transparent;
    border: 2px solid #009688;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background-color: #009688;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
   
  }
}
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="images/Driving Academy-logos_transparent_1.png" class="logo" width="900px" height="auto" background-size="1000px" max-height="25%" max-width= "100%"><!-- comment -->
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="AboutUs.php">About</a></li><!-- comment -->
                    <li><a href="Contact.php">Contact</a></li><!-- comment -->
                    <li><a href="PrivacyPolicy.php">Privacy</a></li><!-- comment -->
                </ul>
            </div>
            <div class="container-SignUp">
                <div class="title">Registration</div>
                <div class="content">
                    <form action="
                    " method="post">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">First Name</span>
                                <input type="text" id="Fname" name="firstname" placeholder="Enter your first name" required>
                            </div>
                             <div class="input-box">
                                <span class="details">Last Name</span>
                                <input type="text" id="Lname" name="lastname" placeholder="Enter your last name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Username</span>
                                <input type="text" id="user" name="username" placeholder="Enter your username" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="text"  id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="text" id="phone" id="phone" name="phoneNumber" placeholder="Enter your number" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Birthdate</span>
                                <input type="date" id="birth" name="birthdate" placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="password" id="pass" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Confirm Password</span>
                                <input type="password" id="pass-new" name="cpassword" placeholder="Confirm your password" required>
                            </div>
                           
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" value="M" id="dot-1">
                            <input type="radio" name="gender" value="F" id="dot-2">
                            <input type="radio" name="gender" value="P" id="dot-3">
                            <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Female</span>
                                </label>
                                <label for="dot-3">
                                    <span class="dot three"></span>
                                    <span class="gender">Prefer Not to Say</span>
                                </label>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </body>
</html>