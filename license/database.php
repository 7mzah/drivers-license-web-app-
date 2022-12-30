<?php
//Create connection credentials
$db_host = '127.0.0.1';
$db_name = 'test1';
$db_user = 'homestead';
$db_pass = 'secret';

//create mysqpli object (object oriented way)
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
//Error handler
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


