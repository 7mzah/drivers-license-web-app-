<?php

include '../database.php';
if (isset($_POST['submit'])) {
    header("Location:adminDashboard.php");
    $query = "UPDATE `quizzes_table` SET published = 1 WHERE id = 1";
    $res = $mysqli->query($query) or die($mysqli . error . __LINE__);
    $ispublished = $res->fetch_assoc();
    if ($ispublished['published'] == 1) {
        echo '<p>Main exam published</p>';
    }
}
    if (isset($_POST['conceal'])) {
        header("Location:adminDashboard.php");
        $query = "UPDATE `quizzes_table` SET published = 0 WHERE id = 1";
        $res = $mysqli->query($query) or die($mysqli . error . __LINE__);
        $ispublished = $res->fetch_assoc();
        if ($ispublished['published'] == 0) {
            echo '<p>Main exam is hidden from user</p>';
        }


    }


