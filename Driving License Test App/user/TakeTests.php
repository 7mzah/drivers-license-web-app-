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
<a onclick="toggleDiv()"><button>Theoretical Tests</button></a>
<div id="theo">
<a href="../theoreticalPracticeTests/easytest/index.php"><button class="but">Easy</button></a><br>
<a href="../theoreticalPracticeTests/moderatetest/index.php"><button class="but">Moderate</button></a><br>
<a href="../theoreticalPracticeTests/challengingtest/index.php"><button class="but">Challenging</button></a>

<script>
  function toggleDiv() {
    var div = document.getElementById("theo");
    var div1 = document.getElementById("Road");
   // div.style.display="none";
    if (div.style.display === "none") {
      div.style.display = "block";
      div1.style.display = "none";
    } else {
      div.style.display = "none";
      div1.style.display = "none";
    }  }
</script>
</div>
<a onclick="toggleDiv1()"><button>Road Signs Tests</button></a>
<div id="Road">
<p><a class="but" href="../roadSignsPracticeTests/easyTest/index.php"><button class="but">Easy</button></a></p>
<p><a class="but" href="../roadSignsPracticeTests/moderateTest/index.php"><button class="but">Moderate</button></a></p>
<p><a class="but" href="../roadSignsPracticeTests/challengingTest/index.php"><button class="but">Challenging</button></a></p>
<script>
  function toggleDiv1() {
    var div = document.getElementById("Road");
    var div1 = document.getElementById("theo");
   // div.style.display="none";
    if (div.style.display === "none") {
      div.style.display = "block";
      div1.style.display="none";
    } else {
      div.style.display = "none";
      div1.style.display="none";
    }  }
</script>
</div>
</div>
</div>
<?php

$userid = $_SESSION['id'];
$query = "SELECT * FROM `user_status` WHERE id = $userid";
$res = $mysqli->query($query);
$userstatus = $res->fetch_assoc();
$score = $userstatus['score'];

$query = "SELECT * FROM `mainexamquestions`";
$res = $mysqli->query($query);
$nbrows = $res->num_rows;

echo 'Your score is ' . $score ."/". $nbrows;

?>
<?php
$userid = $_SESSION['id'];
$query = "SELECT * FROM `user_status` WHERE id = $userid";
$res = $mysqli->query($query);
$takenexam = $res->fetch_assoc();
$query = "SELECT * FROM `quizzes_table` WHERE id = 1";
$res = $mysqli->query($query);
$ispublished = $res->fetch_assoc();

if ($ispublished['published'] == 1 and $takenexam['taken_exam']==0) {
    echo '<p><a href="../admin/mainexam/exampage/index.php">Main exam</a></p>';
} else {

    echo '<div hidden><p><a href="../admin/mainexam/exampage/index.php">Main exam</a></p></div>';
}




?>





    
</body>
</html>