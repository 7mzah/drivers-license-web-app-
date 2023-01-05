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
$res = $mysqli->query($query) or die($mysqli->error.__LINE__);

if($res){

    $nbrows = $res->num_rows;
    echo "<table border='5'>";
    echo "<tr>";
    echo "<td>First Name</td>";
    echo "<td>Last Name</td>";
    echo "<td>User Name</td>";
    echo "<td>E-mail</td>";
    echo "<td>Birthdate</td>";
    echo "<td>Gender</td>";
    echo "<td>Phone Number</td>";
    echo "<td>Delete</td>";


    echo "</tr>";
    for ($i = 0; $i < $nbrows; $i++) {
        echo "<tr>";
        $row = mysqli_fetch_assoc($res);
        echo "<td>$row[firstname]</td>";
        echo "<td>$row[lastname]</td>";
        echo "<td>$row[username]</td>";
        echo "<td>$row[email]</td>";
        echo "<td>$row[birthdate]</td>";
        echo "<td>$row[gender]</td>";
        echo "<td>$row[phoneNumber]</td>";
        echo "<td><a href='deletestudent.php?id=$row[id]'><img src='editQuestions/delete.svg' alt='delete'/></a></td>";

        echo "</tr>";
    }
    echo "</table>";

}

?>