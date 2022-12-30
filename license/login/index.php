<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="frm">
            <form action="process.php" method="POST">
                <p>
                    <label>Username:</label><!-- comment -->
                    <input type="text" id="user" name="user"/><!-- comment -->
                </p>
                 <p>
                    <label>Password:</label><!-- comment -->
                    <input type="password" id="pass" name="pass"/><!-- comment -->
                </p>
                 <p>
                    <input type="submit" id="btn" name="Login"/><!-- comment -->
                </p>
                
            </form>
                
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
