
<html>
    <head>
        <meta charset="UTF-8"><!-- comment -->
        <title>LogIn</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="banner1">
            <div class="navbar">
                <img src="images/Driving Academy-logos_transparent_1.png" class="logo" width="300px" height="auto" max-height="25%" max-width= "100%"><!-- comment --> 
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li><!-- comment -->
                    <li><a href="#">Contact</a></li><!-- comment -->
                    <li><a href="#">Services</a></li><!-- comment -->
                </ul>
            </div> 
            <div>
                
              
               <div class="login-container">
                   <div>
                        
                       <form action="process.php" method="post">
                    <div class="center">
                        <label id="myLabel" for="inputElement"><b>Login</b></label>
                    </div>
                        <br>
                    <label id="username">Username:</label><br>
                    <input type="text" id="usern" name="username"><br>
                    <label id="password">Password:</label><br>
                    <input type="password" id="pass" name="password"><br>
                    <label id="forget">forget password?</label><br><br>
                    <input type="submit" value="Submit">
                </form> 
                   </div>
            </div>
               </div>
        </div>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

