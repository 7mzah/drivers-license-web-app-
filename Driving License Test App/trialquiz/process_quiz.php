<?php
// Connect to the database
include 'database.php';
$score = 0;
foreach ($_POST['choices'] as $question_number => $choice_ids) {
  $correct_choices = mysqli_query($mysqli, "SELECT * FROM easychoices WHERE question_number = {$question_number} AND is_correct = 1");
  $correct_choice_ids = [];
  while ($correct_choice = mysqli_fetch_assoc($correct_choices)) {
    $correct_choice_ids[] = $correct_choice['id'];
  }
  if ($choice_ids == $correct_choice_ids) {
    $score++;
  }
}

// Redirect to the results page
header("Location: results.php?score={$score}");
exit;
