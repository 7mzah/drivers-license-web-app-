<?php

include 'database.php';
$question_number = $_GET['question_number'];

$query = "DELETE FROM `easysignquestions` WHERE question_number = $question_number"; 
$res = mysqli_query($mysqli,$query);

if ($res) {
    header("Location:editESQ.php") or die($mysqli . error . __LINE__);
} else {
    echo 'delete op not working';
}
?>