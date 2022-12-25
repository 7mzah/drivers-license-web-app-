<?php
/*
 *Get the total number of questions
 */
$query = "SELECT * FROM easyquestions";

//get results
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
while ($total = $results->num_rows) {
    $time = $total * 0.5;

}
echo json_encode($time);
?>