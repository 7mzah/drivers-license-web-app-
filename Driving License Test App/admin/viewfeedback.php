

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
include '../database.php';
$feedbacks = mysqli_query($mysqli,"SELECT * FROM `feedbacks`");
if (mysqli_num_rows($feedbacks) > 0) {
    // Create the table
    echo '<table border = "1">';
    echo '<tr>';
    echo '<th>User name</th>';
    echo '<th>Feedback</th>';
    echo '</tr>';

    // Loop through the results
    while ($row = mysqli_fetch_assoc($feedbacks)) {
        // Display the user and score
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['feedback'] . '</td>';
        
        echo '</tr>';
    }
    // Close the table
    echo '</table>';
} else {
    // No results were found
    echo 'No Feedbacks were found.';
}



?>
</div>
</body>

</html>



