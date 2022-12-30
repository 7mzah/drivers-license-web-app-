<?php
require_once '../database.php';
if (
    isset($_POST['user']) && !empty($_POST['user'])
    && isset($_POST['pass']) && !empty($_POST['pass'])
) {
    $u = $_POST['user'];
    $p = $_POST['pass'];

    $query = "SELECT * FROM `users` WHERE `username`='$u' and `password`='$p' ";
    $res = $mysqli->query($query);
    $nbrows = $res->num_rows;

    if ($nbrows == 1) {
        session_start();
        $_SESSION['isloggedin'] = 1;
        $_SESSION['username'] = $u;
        header("Location:userPage.php");
    } else if ($u = "admin" and $p = "admin") {
        header("Location:../admin/adminDashboard.php");


    } else {
        header("Location:index.php");
    }
}