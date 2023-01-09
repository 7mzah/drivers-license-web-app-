<?php include '../database.php';

?>
<?php
require_once '../database.php';
if (
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['confirm']) && !empty($_POST['confirm']) &&
    isset($_POST['old']) && !empty($_POST['old'])
) {
    $op = $_POST['old'];
    session_start();
    $username = $_SESSION['username'];
    $p = $_POST['password'];
    $cp = $_POST['confirm'];
    $query = "SELECT * FROM `users` WHERE `users`.`username` = '$username' AND `users`.`password`='$op'  ";
    $res = mysqli_query($con, $query);
    $nbrows = mysqli_num_rows($res);
    if ($nbrows == 0) {
        ?>
               <script type="text/javascript">
                alert("Wrong Password");
                window.location.href = "Settings.php";
                </script>
                <?php
    } else if ($nbrows == 1 && $p != $cp) {
        ?>
               <script type="text/javascript">
                alert("Passwords don't match!");
                window.location.href = "Settings.php";
                </script>
                <?php
    } else {

        $query = "UPDATE `users` SET `password` = '$p' WHERE `users`.`username` = '$username'";
        $res = mysqli_query($con, $query);
        if ($res) {
            ?>
            <script type="text/javascript">
                alert("Password Changed Successfully!");
                window.location.href = "Settings.php";
                </script>
                <?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="side-menu">
        <div class="brand-name">
            <img src="../images/Driving Academy-logos_transparent_1.png" class="logo" width="310px" height="auto" background-size="1000px" max-height="25%" max-width= "100%"><!-- comment -->

        </div>
        <ul>
            <li onclick="window.location.href='UserDashboard.php'"><img src="../images/dashboard (2).png" alt="">&nbsp;&nbsp;<span>Dashboard</span></li> 
            <li onclick="window.location.href='TakeTests.php'"><img src="../images/reading-book (1).png" alt="">&nbsp;&nbsp;<span>Take Tests</span></li>
            
            <li onclick="window.location.href='MainTestRequest.php'" id="edit"><img src="../images/teacher2.png" alt="">&nbsp;&nbsp;<span>Test Main Test</span> </li>
            <li onclick="window.location.href='SubmitFeedback.php'"><img src="../images/school.png" alt="">&nbsp;&nbsp;<span>Submit Feedback</span> </li>
            <li onclick="window.location.href='Settings.php'"><img src="../images/settings.png" alt="">&nbsp;&nbsp;</a>Settings</li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
              
                <div class="user">
                <p class="welcome"><b>Welcome </b></p>
<?php
echo '<p class="username">'; 
session_start();
echo $_SESSION['username'];

echo '</p>';

?>
                    <!--<a href="#" class="btn">Add New</a>-->
                    
                </div>
            </div>
        </div>
        
<div class="dashboardContainer">
<div class="box">
<a class="link" onclick="toggleDiv()"><button>Change Password</button></a>
<div id="ChangePass">
    <form method="post" action="Settings.php">
    <input type="password" name="old"  placeholder="Old Password">
     	       <br>
        <input type=password name="password" placeholder="Change Password">
        <input type=password name="confirm" placeholder="Confirm Password">
        <br>
        <input type=submit name="Change">
</form>
<script>
  function toggleDiv() {
    var div = document.getElementById("ChangePass");
   // div.style.display="none";
    if (div.style.display === "none") {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }  }
</script>
</div><br>
<a class="link" href="UpdateInfo.php"><button>Update Info</button></a><br>

<a class="link" href="logout.php"><button>Log Out</button></a><br>

</div>
   
</div>








    
</body>
</html>