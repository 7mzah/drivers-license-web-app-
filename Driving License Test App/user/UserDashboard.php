<?php include '../database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>helo</p>
<?php
echo '<h2>'; 
session_start();
echo $_SESSION['username'];
echo '</h2>';

?>

<a href="../theoreticalPracticeTests/easytest/index.php">Easy practice Test</a>
<a href="../theoreticalPracticeTests/moderatetest/index.php">Moderate Practice test</a>
<a href="../theoreticalPracticeTests/challengingtest/index.php">challenging practice test</a>

<p><a href="../roadSignsPracticeTests/easyTest/index.php">Easy signs practice test</a></p>
<p><a href="../roadSignsPracticeTests/moderateTest/index.php">Moderate signs practice test</a></p>
<p><a href="../roadSignsPracticeTests/challengingTest/index.php">Challenging signs practice test</a></p>
<?php

$userid = $_SESSION['id'];
$query = "SELECT * FROM `user_status` WHERE id = $userid";
$res = $mysqli->query($query);
$userstatus = $res->fetch_assoc();
$score = $userstatus['score'];

$query = "SELECT * FROM `mainexamquestions`";
$res = $mysqli->query($query);
$nbrows = $res->num_rows;

echo 'Your score is ' . $score ."/". $nbrows;

?>
<?php
$userid = $_SESSION['id'];
$query = "SELECT * FROM `user_status` WHERE id = $userid";
$res = $mysqli->query($query);
$takenexam = $res->fetch_assoc();
$query = "SELECT * FROM `quizzes_table` WHERE id = 1";
$res = $mysqli->query($query);
$ispublished = $res->fetch_assoc();

if ($ispublished['published'] == 1 and $takenexam['taken_exam']==0) {
    echo '<p><a href="../admin/mainexam/exampage/index.php">Main exam</a></p>';
} else {

    echo '<div hidden><p><a href="../admin/mainexam/exampage/index.php">Main exam</a></p></div>';
}




?>





    
</body>
</html>