<?php
include '../database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

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