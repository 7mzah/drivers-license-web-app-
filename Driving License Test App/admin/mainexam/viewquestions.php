<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Admin Panel</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <img src="../../images/Driving Academy-logos_transparent_1.png" class="logo" width="310px" height="auto"
                background-size="1000px" max-height="25%" max-width="100%"><!-- comment -->

        </div>
        <ul>
            <li onclick="window.location.href='../adminDashboard.php'"><img src="../../images/dashboard (2).png"
                    alt=""><span>Dashboard</span></li>
            <li onclick="window.location.href='../viewstudents.php'"><img src="../../images/reading-book (1).png"
                    alt=""><span>Users</span></li>
            <li onclick="window.location.href='viewquestions.php'"><img src="../../images/reading-book (1).png"
                    alt=""><span>Edit Tests</span></li>
            <li onclick="window.location.href='../viewfeedback.php'"><span>View feedbacks</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">

            </div>
        </div>
    </div>

    <div class="content">




        <?php
        session_start();
        /*if ($_SESSION['isloggedin'] != 1) {
        header("Location:../../index.php");
        } else {*/

        include 'database.php';

        ?>


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

    </div>
</body>

</html>