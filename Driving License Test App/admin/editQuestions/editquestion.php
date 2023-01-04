<?php
session_start();
/*if($_SESSION['isloggedin']!=1)
{
header("Location:index.php");
} 
else{ */
include '../../database.php';
$question_number = $_GET['question_number'];
$answerquery = "SELECT * FROM `easychoices` WHERE question_number = $question_number";
$answerres = $mysqli->query($answerquery);
$questionquery = "SELECT * FROM `easyquestions` WHERE question_number = $question_number";
$questionres = $mysqli->query($questionquery);
if (!$questionres) {
    die("Query failed: " . mysqli_error());
} else {
    $nbrows = mysqli_num_rows($questionres);
    $questions = mysqli_fetch_assoc($questionres);
    $nbofanswers = $answerres->num_rows;
    echo "<form method='POST' action='editprocess.php'>";
    echo "<table border='5'>";
    echo "<tr>";
    echo "<td>question</td>";
    echo "<td>Answers</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><input type='text' name='question' value='$questions[text_]' ></td>";
    while ($answers = $answerres->fetch_assoc()):
    echo "<td><input type='text' name='answer' value='$answers[text_]' ></td>";


    endwhile;

    echo "</tr>";
    echo "<tr>";
    echo "<td colspan='3'><input type='submit' value='Update'/></td>";
    echo "</tr>";
    echo "</table>";
    echo "</form>";


}
//}