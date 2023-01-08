<?php
include '../database.php';
session_start();
if (isset($_POST['submit'])) {
    // Get the new values from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone_number = $_POST['phoneNumber'];

    // Validate the new values
    if (strlen($password) < 8) {
        // Password is too short
        $error = 'Password must be at least 8 characters long.';
    } else {
        // Update the user's information in the database
        mysqli_query($mysqli, "UPDATE `users` SET `username` = '{$username}', `password` = '{$password}', `email` = '{$email}', `birthdate` = '{$birthdate}', `gender` = '{$gender}', `firstname` = '{$firstname}', `lastname` = '{$lastname}', `phoneNumber` = '{$phone_number}' WHERE `id` = {$_SESSION['id']}");
        $success = 'Your information has been updated successfully.';
    }
}

// Get the current information for the user
$result = mysqli_query($mysqli, "SELECT * FROM `users` WHERE id = {$_SESSION['id']}");
$row = mysqli_fetch_assoc($result);

// Display the form
echo '<form method="post" action = "../index.php">';
echo '<label>Username:</label>';
echo '<input type="text" name="username" value="' . $row['username'] . '"><br>';
echo '<label>Password:</label>';
echo '<input type="password" name="password"><br>';
echo '<label>Email:</label>';
echo '<input type="email" name="email" value="' . $row['email'] . '"><br>';
echo '<label>Birthdate:</label>';
echo '<input type="date" name="birthdate" value="' . $row['birthdate'] . '"><br>';
echo '<label>Gender:</label>';
echo '<input type="radio" name="gender" value="M" ' . ($row['gender'] == 'M' ? 'checked' : '') . '>Male';
echo '<input type="radio" name="gender" value="F" ' . ($row['gender'] == 'F' ? 'checked' : '') . '>Female<br>';
echo '<label>First name:</label>';
echo '<input type="text" name="firstname" value="' . $row['firstname'] . '"><br>';
echo '<label>Last name:</label>';
echo '<input type="text" name="lastname" value="' . $row['lastname'] . '"><br>';
echo '<label>Phone number:</label>';
echo '<input type="text" name="phoneNumber" value="' . $row['phoneNumber'] . '"><br>';
echo '<input type="submit" name="submit" value="Update">';
echo '</form>';

// Display any error or success messages
if (isset($error)) {
    echo '<p style="color:red">' . $error . '</p>';
} elseif (isset($success)) {
    echo '<p style="color:green">' . $success . '</p>';
}

// Close the connection to the database
mysqli_close($mysqli);

?>