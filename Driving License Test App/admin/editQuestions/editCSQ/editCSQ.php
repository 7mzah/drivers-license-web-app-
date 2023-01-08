<?php
session_start();
/*if ($_SESSION['isloggedin'] != 1) {
    header("Location:../../index.php");
} else {*/

    include 'database.php';

    ?>
    <!--create a menu of options -->
    <html>

    <head>
        <title>View Courses</title>
        <style type="text/css">
            td.r {
                background-color: lightblue;
            }

            a:onhover {
                color: red;
                background-color: black;
            }
        </style>
    </head>

    <body>
    
    </body>

    </html>
    <?php
    $answersquery = "SELECT * FROM `challengingsignchoices` WHERE is_correct = 1";
    $answersqueryrun = $mysqli->query($answersquery);
    $questionsquery = "SELECT * FROM `challengingsignquestions`";
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
//}