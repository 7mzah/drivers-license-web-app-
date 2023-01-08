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


    <?php

    $result = mysqli_query($mysqli, "SELECT q.question_number, q.questiontext_, q.image_, c.id, c.is_correct, c.choicetext_
FROM mainexamquestions q
LEFT JOIN mainexamchoices c ON q.question_number = c.question_number
WHERE c.is_correct = 1");

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        // Create the table
        echo '<table border="5">';
        echo '<tr>';
        echo '<th>Question</th>';
        echo '<th>Answer</th>';
        echo '<th>Edit</th>';
        echo '<th>Delete</th>';
        echo '</tr>';

        // Loop through the results
        while ($row = mysqli_fetch_assoc($result)) {
            // Display the question and answer
            echo '<tr>';
            echo '<td>';
            if (!empty($row['image_'])) {
                // Display the image
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image_']) . '" alt="Question Image" style = "width:100px; height: 100px;">';
            }
            if (!empty($row['questiontext_'])) {
                // Display the text
                echo $row['questiontext_'];
            }
            echo '</td>';
            echo '<td>';
            if ($row['is_correct']) {
                // Display the correct answer
                echo $row['choicetext_'];
            }
            echo '</td>';
            echo "<td><a href='editquestion.php?question_number=$row[question_number]' ><img src='edit.svg' alt='edit' /></a></td>";
            echo "<td><a href='deletequestion.php?question_number=$row[question_number]'><img src='delete.svg' alt='delete'/></a></td>";
            echo '</tr>';
        }
        echo '</table>';




    }
    ?>


</body>

</html>

