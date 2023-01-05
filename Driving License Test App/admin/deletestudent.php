<?php
include '../database.php';
$id = $_GET['id'];
$query = "DELETE FROM `users` WHERE id = $id";

$res = $mysqli->query($query);

if ($res) {
    header("Location:viewstudents.php");
} else {

    echo 'delete op is not working';

}


?>