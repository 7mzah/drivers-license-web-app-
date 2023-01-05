<?php
include '../../database';
$question = $_POST['question'];
$question_number = $_GET['question_number'];
$choices = array();
$choices[1] = $_POST['choice1'];
$choices[2] = $_POST['choice2'];
$choices[3] = $_POST['choice3'];
$choices[4] = $_POST['choice4'];
$choices[5] = $_POST['choice5'];

$updatequestionquery = " UPDATE `easyquestions` SET text_ = $question WHERE question_number = $question_number";
$updatequestionres = $mysqli->query($updatequestionquery) or die($mysqli . error . __LINE__);


if ($updatequestionres) {
    foreach ($choices as $choice => $value) {
        $updateanswerquery = "UPDATE `easychoices` SET text_ = $value WHERE question_number = $question_number";
        $updateanswerres = $mysqli->query($updateanswerquery);
    }

    header("Location:../adminDashboard.php ");
    
} else {

    echo 'update operation not working';
}

