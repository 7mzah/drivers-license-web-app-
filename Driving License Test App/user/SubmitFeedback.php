<?php include '../database.php';
session_start();
$username = $_SESSION['username'];
if (isset($_GET['message']) && !empty($_GET['message']))
 {
    $feedback = $_GET['message'];
    $query = "INSERT INTO `feedbacks`(`username`, `feedback`) VALUES ('$username','$feedback')";
    $res = mysqli_query($con, $query);
    if ($res) {
        ?>
        <script type="text/javascript">
            alert("Feedback Recorded!");
            window.location.href = "SubmitFeedback.php";
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
//session_start();
echo $_SESSION['username'];

echo '</p>';

?>
                    <!--<a href="#" class="btn">Add New</a>-->
                    
                </div>
            </div>
        </div>
        
<div class="dashboardContainer">

    <div class="box">
        <form method="get" action="SubmitFeedback.php">
        
        <textarea name="message" rows="10" cols="50"></textarea><br>
        <input type="submit" name="submit">
        </form>
    </div>
</div>
</div>






    
</body>
</html>