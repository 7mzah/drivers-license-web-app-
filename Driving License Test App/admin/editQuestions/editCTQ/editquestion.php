<?php
session_start();
include 'database.php';
if (isset($_POST['submit'])) {
    // Get the form data
    $question_number = $_POST['question_number'];
    $text = $_POST['text'];
    $choices = $_POST['choices'];
    $is_correct = $_POST['is_correct'];


    mysqli_query($mysqli, "UPDATE challengingchoices SET is_correct = 0 WHERE question_number = {$question_number}");
    // Update the question in the database
    mysqli_query($mysqli, "UPDATE challengingquestions SET text_ = '{$text}' WHERE question_number = {$question_number}");

    // Delete the existing choices for this question

    // Insert the new choices for this question

    foreach ($choices as $id => $choice) {
        mysqli_query($mysqli, "UPDATE challengingchoices SET is_correct = {$is_correct[$id]} WHERE id = {$id}");
      }
      foreach ($choices as $id => $choice) {
        mysqli_query($mysqli, "UPDATE challengingchoices SET text_ = '{$choice}' WHERE id = {$id}");
      }
    

    // Redirect to the edit page
    header("Location: editCTQ.php?question_number={$question_number}&success=true");
    exit;
}


$question_number = $_GET['question_number'];
$question = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM challengingquestions WHERE question_number = {$question_number}"));
$choices = mysqli_query($mysqli, "SELECT * FROM challengingchoices WHERE question_number = {$question_number}");

?>
<form method='POST' action='editquestion.php'>
    <input type="hidden" name="question_number" value="<?php echo $question_number; ?>">
    <label for="text">Question:</label>
    <textarea name="text"><?php echo $question['text_']; ?></textarea>
    <h3>Choices:</h3>
    <ul>
        <?php while ($choice = mysqli_fetch_assoc($choices)) { ?>
            <li>
                <input type="checkbox" name="is_correct[<?php echo $choice['id']; ?>]"
                    value="1"<?php if ($choice['is_correct'])
                      echo 'checked'; ?>>
                <input type="text" name="choices[<?php echo $choice['id']; ?>]" value="<?php echo $choice['text_']; ?>">
            </li>
            <?php } ?>
    </ul>
    <input type="submit" name="submit" value="Update">
</form>