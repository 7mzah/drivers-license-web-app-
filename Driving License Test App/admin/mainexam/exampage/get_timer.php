<?php

include '../../../database.php';
session_start();

$query = "SELECT * FROM `mainexamquestions`";
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;
$time_limit = $total * 0.5 * 30;
$time_start = time();

$user_id = $_SESSION['id'];

$query = "INSERT INTO `timers` (`user_id`,`time_start`,`time_limit`) VALUES ('$user_id','$time_start','$time_limit')";
if ($mysqli->query($query) === TRUE) {
    $sql = "SELECT * FROM `timers` WHERE `user_id` = '$user_id'";
    $result = mysqli_query($mysqli, $sql);
    $nbrows = $result->num_rows;
    
    if ($nbrows > 0) {
        // Timer information found, return it as a JSON object
        $row = mysqli_fetch_assoc($result);
        $response = array(
            "time_start" => $row['time_start'],
            "time_limit" => $row['time_limit'],
        );
        echo json_encode($response);
    } else {
        // Timer information not found, return an error message
        '{ error: "Timer not found" }';
    }
    
  } else {

    '{ error: "Timer not found" }';
  }
// Get the timer information from the database

?>