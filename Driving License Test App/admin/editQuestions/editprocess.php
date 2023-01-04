<?php
include '../../database';
$question = $_POST['question'];
$answer = $_POST['answer'];
$question_number = $_POST['question_number'];

$updatequestionquery=" UPDATE `easyquestions` SET text_ = $question WHERE question_number = $question_number";
$updatequestionres = $mysqli->query($updatequestionquery);
$updateanswerquery = "UPDATE `easychoices` SET text_ = $answer WHERE question_number = $question_number";
$updateanswerres = $mysqli->query($updateanswerquery);

if($updateanswerres and $updatequestionres){
    header("Location:../adminDashboard.php ");
} else {

    echo 'update operation not working';
}

?>