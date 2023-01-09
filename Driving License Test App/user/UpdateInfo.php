<?php include '../database.php';

session_start();
$u=$_SESSION['username'];
if(isset($_GET['firstname']) && !empty($_GET['firstname'])){
    $fn=$_GET['firstname'];
    $query = "UPDATE `users` SET `firstname`='$fn' WHERE `users`.`username`='$u'";
    $res = mysqli_query($con, $query);
    if($res){
        ?>
        <script type="text/javascript">
            alert("First Name Updated Successfully!");
            window.location.href = "UpdateInfo.php";
            </script>
            <?php
    }
}
if(isset($_GET['lastname']) && !empty($_GET['lastname'])){
    $ln=$_GET['lastname'];
    $query = "UPDATE `users` SET `lastname`='$ln' WHERE `users`.`username`='$u'";
    $res = mysqli_query($con, $query);
    if($res){
        ?>
        <script type="text/javascript">
            alert("Last Name Updated Successfully!");
            window.location.href = "UpdateInfo.php";
            </script>
            <?php
    }
}

if(isset($_GET['email']) && !empty($_GET['email'])){
    $e=$_GET['email'];
    $query = "UPDATE `users` SET `email`='$e' WHERE `users`.`username`='$u'";
    $res = mysqli_query($con, $query);
    if($res){
        ?>
        <script type="text/javascript">
            alert("E-mail Updated Successfully!");
            window.location.href = "UpdateInfo.php";
            </script>
            <?php
    }
}

if(isset($_GET['phoneNumber']) && !empty($_GET['phoneNumber'])){
    $pn=$_GET['phoneNumber'];
    $query = "UPDATE `users` SET `phoneNumber`='$pn' WHERE `users`.`username`='$u'";
    $res = mysqli_query($con, $query);
    if($res){
        ?>
        <script type="text/javascript">
            alert("Phone Number Updated Successfully!");
            window.location.href = "UpdateInfo.php";
            </script>
            <?php
    }
}

if(isset($_GET['birthdate']) && !empty($_GET['birthdate'])){
    $bd=$_GET['birthdate'];
    $query = "UPDATE `users` SET `birthdate`='$bd' WHERE `users`.`username`='$u'";
    $res = mysqli_query($con, $query);
    if($res){
        ?>
        <script type="text/javascript">
            alert("Birthdate Updated Successfully!");
            window.location.href = "UpdateInfo.php";
            </script>
            <?php
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
            
            <li onclick="window.location.href='MainTestRequest.php'" id="edit"><img src="../images/teacher2.png" alt="">&nbsp;&nbsp;<span>Take Main Test</span> </li>
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

echo $_SESSION['username'];

echo '</p>';

?>
                    <!--<a href="#" class="btn">Add New</a>-->
                    
                </div>
            </div>
        </div>
        
<div class="dashboardContainer">
<div class="box1">
 
<form method="get" action="UpdateInfo.php">
    <p>Update First Name</p>
<input type="text" name="firstname">&nbsp;&nbsp;
<button class="update">Update</button>
</form>
<br>
<br>
<form method="get" action="UpdateInfo.php">
    <p>Update Last Name</p>
<input type="text" name="lastname" > &nbsp;&nbsp;
<button class="update">Update</button>
</form>
<br>
<br>
<form method="get" action="UpdateInfo.php">
    <p>Update E-mail</p>
<input type="text" name="email">&nbsp;&nbsp;
<button class="update">Update</button>
</form>
<br>
<br>
<form method="get" action="UpdateInfo.php">
    <p>Update Phone Number </p>
<input type="text" name="phoneNumber">&nbsp;&nbsp;
<button class="update">Update</button>
</form>
<br>
<br>
<form method="get" action="UpdateInfo.php">
    <p>Update Birth Date</p>
<input type="date" name="birthdate">&nbsp;&nbsp;
<button class="update">Update</button>
</form>

</div>
</div>






    
</body>
</html>