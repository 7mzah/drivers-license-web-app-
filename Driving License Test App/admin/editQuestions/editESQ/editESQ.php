<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <img src="../images/Driving Academy-logos_transparent_1.png" class="logo" width="310px" height="auto"
                background-size="1000px" max-height="25%" max-width="100%"><!-- comment -->

        </div>
        <ul>
            <li onclick="window.location.href='adminDashboard.php'"><img src="../images/dashboard (2).png"
                    alt=""><span>Dashboard</span></li>
            <li onclick="window.location.href='viewstudents.php'"><img src="../images/reading-book (1).png"
                    alt=""><span>Users</span></li>
            <li onclick="window.location.href='mainexam/viewquestions.php'"><img src="../images/reading-book (1).png"
                    alt=""><span>Edit Tests</span></li>
            <li onclick="window.location.href='viewfeedback.php'"><span>View feedbacks</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">

                </div>
            </div>
        </div>

<div class = "content" >


<?php
session_start();
/*if ($_SESSION['isloggedin'] != 1) {
    header("Location:../../index.php");
} else {*/

    include 'database.php';

    ?>
   
    <?php
    $answersquery = "SELECT * FROM `easysignchoices` WHERE is_correct = 1";
    $answersqueryrun = $mysqli->query($answersquery);
    $questionsquery = "SELECT * FROM `easysignquestions`";
    $questionsqueryrun = mysqli_query($mysqli,$questionsquery);
    if (!$questionsqueryrun) {
        die("Query failed: " . mysqli_error());
    } else {
        $nbrows = $questionsqueryrun->num_rows;


        echo "<table border='5'>";
        echo "<tr>";
        echo "<td>Question</td>";
        echo "<td>Answer</td>";
        echo "<td>EDIT</td>";
        echo "<td>DELETE</td>";
        echo "</tr>";
        for ($i = 0; $i < $nbrows; $i++) {
            echo "<tr>";
            $questions = $questionsqueryrun->fetch_assoc();
            $answers = $answersqueryrun->fetch_assoc();
            echo "<td>". '<img src = "data:image;base64,' . base64_encode($questions['image_']) . '" alt = "Image" style = "width:100px; height: 100px;">'."</td>";
            echo "<td>$answers[text_]</td>";
            echo "<td><a href='editquestion.php?question_number=$questions[question_number]'><img src='edit.svg' alt='edit'/></a></td>";
            echo "<td><a href='deletequestion.php?question_number=$questions[question_number]'><img src='delete.svg' alt='delete'/></a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
//}?>

</div>
</body>

</html>


