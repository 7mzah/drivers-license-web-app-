<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'dquizApp';
$db_user = 'root';
$db_pass = '';

//create mysqpli object (object oriented way)
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//Error handler
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


