<?php

include '../database.php';
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $phonenumber = $_POST['phonenumber'];
    $query = "INSERT INTO `users`(firstname,lastname,username,email,`password`,birthdate,gender,phoneNumber) VALUES ('$firstname', '$lastname','$username','$email','$password','$birthdate','$gender','$phonenumber') ";
    $res = $mysqli->query($query) or die($mysqli->error.__LINE__);
    if ($res) {

        echo 'added successfully';
    
    }
}



?>

<html>

<head>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="addstudents.php" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>User Name</td>
                <td>E-mail</td>
                <td>Password</td>
                <td>Birthdate</td>
                <td>Gender</td>
                <td>Phone Number</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="firstname"></td>
                <td><input type="text" name="lastname"></td>
                <td><input type="text" name="username"></td>
                <td><input type="text" name="email"></td>
                <td><input type="text" name="password"></td>
                <td><input type="text" name="birthdate"></td>
                <td><input type="text" name="gender"></td>
                <td><input type="text" name="phonenumber"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>