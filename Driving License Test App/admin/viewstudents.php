<?php
include '../database.php';
?>

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

$query = "SELECT * FROM `users`";
$res = $mysqli->query($query) or die($mysqli->error . __LINE__);
$query = "SELECT * FROM `user_status`";
$runstatusquery = $mysqli->query($query);
$result = mysqli_query($mysqli, "SELECT u.id, u.username, u.email, u.birthdate, u.gender, u.firstname, u.lastname, u.phoneNumber, s.score FROM users u LEFT JOIN user_status s ON u.id = s.id");
if (mysqli_num_rows($result) > 0) {
    // Create the table
    echo '<table border = "5">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Username</th>';
    echo '<th>Email</th>';
    echo '<th>Birthdate</th>';
    echo '<th>Gender</th>';
    echo '<th>Firstname</th>';
    echo '<th>Lastname</th>';
    echo '<th>Phone Number</th>';
    echo '<th>Score</th>';
    echo '<th>Delete</th>';
    echo '</tr>';

    // Loop through the results
    while ($row = mysqli_fetch_assoc($result)) {
        // Display the user and score
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['birthdate'] . '</td>';
        echo '<td>' . $row['gender'] . '</td>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['phoneNumber'] . '</td>';
        echo '<td>';
        if ($row['score'] !== NULL) {
            // Display the score if it exists
            echo $row['score'];
        } else {
            // Display a message if there is no score
            echo 'No score';
        }
        echo '</td>';
        echo "<td><a href='deletestudent.php?id=$row[id]'><img src='delete.svg' alt='delete'/></a></td>";

        echo '</tr>';
    }

    // Close the table
    echo '</table>';
} else {
    // No results were found
    echo 'No users were found.';
}



?>

</div>
</body>

</html>

