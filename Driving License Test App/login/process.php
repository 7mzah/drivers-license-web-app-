<?php
require_once 'connection.php';
if(isset($_POST['user']) && !empty($_POST['user'])
        && isset($_POST['pass']) && !empty($_POST['pass']))
{
    $u=$_POST['user'];
    $p=$_POST['pass'];
    
    $query="SELECT * FROM `users` WHERE `username`='$u' and `password`='$p' ";
    $res= mysqli_query($con, $query);
    $nbrows= mysqli_num_rows($res);
    if($nbrows==1)
    {
        session_start();
        $_SESSION['isloggedin']=1;
        $_SESSION['username']=$u;
        header("Location:../userPage/index.php");
    }
 else {
     header("Location:index.php");
 }
}