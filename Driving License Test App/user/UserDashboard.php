<?php include '../database.php';

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
<div class="side-menu">
    <div class="brand-name">
        <img src="../images/Driving Academy-logos_transparent_1.png" class="logo" width="310px" height="auto"
            background-size="1000px" max-height="25%" max-width="100%"><!-- comment -->

    </div>
    <ul>
        <li onclick="window.location.href='UserDashboard.php'"><img src="../images/dashboard (2).png"
                alt="">&nbsp;&nbsp;<span>Dashboard</span></li>
        <li onclick="window.location.href='TakeTests.php'"><img src="../images/reading-book (1).png"
                alt="">&nbsp;&nbsp;<span>Take Tests</span></li>

        <li onclick="window.location.href='MainTestRequest.php'" id="edit"><img src="../images/teacher2.png"
                alt="">&nbsp;&nbsp;<span>Take Main Test</span> </li>
        <li onclick="window.location.href='SubmitFeedback.php'"><img src="../images/school.png"
                alt="">&nbsp;&nbsp;<span>Submit Feedback</span> </li>
        <li onclick="window.location.href='Settings.php'"><img src="../images/settings.png"
                alt="">&nbsp;&nbsp;</a>Settings</li>
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
                
                <div class="img-case">
                    <?php
                $userid = $_SESSION['id'];
                $query = "SELECT * FROM `user_status` WHERE id = $userid";
                $res = $mysqli->query($query);
                $userstatus = $res->fetch_assoc();
                $score = $userstatus['score'];

                $query = "SELECT * FROM `mainexamquestions`";
                $res = $mysqli->query($query);
                $nbrows = $res->num_rows;
                if ($userstatus['taken_exam'] == 0) {
                    echo "Your exam is yet to be published";
                }
                else{
                    echo 'Your score is ' . $score . "/" . $nbrows;
                }
                ?>
                </div>
            </div>
        </div>
    </div>

    <body>
        <div class="dashboardContainer">
            <div class="box">
               <button>Go Study Material</button>
               <button>Additional References</button>

                
                
            </div>
        </div>
    </body>

</html>