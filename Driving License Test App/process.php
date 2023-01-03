<?php

require_once 'connection.php';
if(isset($_POST['username']) && !empty($_POST['username'])
        && isset($_POST['password']) && !empty($_POST['password']))
{
    $u=$_POST['username'];
    $p=$_POST['password'];
    
    $query="SELECT * FROM `users` WHERE `username`='$u' and `password`='$p' ";
    $res= mysqli_query($con, $query);
    $nbrows= mysqli_num_rows($res);
    if($nbrows==1)
    {
        //session_start();
        //$_SESSION['isloggedin']=1;
        //$_SESSION['username']=$u;
        header("Location:UserDashboard.php");
    }
 else {
     header("Location:Login.php");
 }
}?>

