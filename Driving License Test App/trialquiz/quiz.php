<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="process_quiz.php">
  <?php
  include 'database.php';
  // Connect to the database

  // Get the questions and choices from the database
  $questions = mysqli_query($mysqli, "SELECT * FROM easyquestions");
  while ($question = mysqli_fetch_assoc($questions)) {
    $choices = mysqli_query($mysqli, "SELECT * FROM easychoices WHERE question_number = {$question['question_number']}");
    ?>
    <h3><?php echo $question['text_']; ?></h3>
    <ul>
      <?php while ($choice = mysqli_fetch_assoc($choices)) { ?>
        <li>
          <input type="radio" name="choices[<?php echo $question['question_number']; ?>][]" value="<?php echo $choice['id']; ?>">
          <?php echo $choice['text_']; ?>
        </li>
      <?php } ?>
    </ul>
  <?php } ?>
  <input type="submit" value="Submit Quiz">
</form>

</body>
</html>