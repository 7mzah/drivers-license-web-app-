<?php

include 'database.php';
if(isset($_POST['username']) && !empty($_POST['username'])
        && isset($_POST['password']) && !empty($_POST['password']))
{
    $u=$_POST['username'];
    $p=$_POST['password'];
    
    $query="SELECT * FROM `users` WHERE `username`='$u' and `password`='$p' ";
    
    $res= $mysqli->query($query);
    $id = $res->fetch_assoc();
    $userid = $id['id'];
    $nbrows= $res->num_rows;


    if($nbrows==1)
    {
        session_start();
        $_SESSION['isloggedin']=1;
        $_SESSION['username']=$u;
        $_SESSION['id'] = $userid;
        header("Location:user/UserDashboard.php");
        
    }
 else {
     header("Location:index.php");
 }
}?>

