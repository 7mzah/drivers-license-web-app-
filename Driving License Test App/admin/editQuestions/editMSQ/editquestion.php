<?php
session_start();
include 'database.php';
if (isset($_POST['submit'])) {
    // Get the form data
    $question_number = $_POST['question_number'];
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $choices = $_POST['choices'];
    $is_correct = $_POST['is_correct'];

    //set is_correct to zero 
    mysqli_query($mysqli, "UPDATE moderatesignchoices SET `is_correct` = 0 WHERE question_number = {$question_number}");
    // Update the question in the database
    if(!empty($image)){
        mysqli_query($mysqli, "UPDATE moderatesignquestions SET `image_` = '{$image}' WHERE question_number = {$question_number}");
    }

    

    // Insert the new choices for this question

    foreach ($choices as $id => $choice) {
        mysqli_query($mysqli, "UPDATE moderatesignchoices SET is_correct = {$is_correct[$id]} WHERE id = {$id}");
      }
      foreach ($choices as $id => $choice) {
        mysqli_query($mysqli, "UPDATE moderatesignchoices SET text_ = '{$choice}' WHERE id = {$id}");
      }
    

    // Redirect to the edit page
    header("Location: editMSQ.php?question_number={$question_number}&success=true");
    exit;
}


$question_number = $_GET['question_number'];
$question = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM moderatesignquestions WHERE question_number = {$question_number}"));
$choices = mysqli_query($mysqli, "SELECT * FROM moderatesignchoices WHERE question_number = {$question_number}");

?>
<form method='POST' action='editquestion.php' enctype="multipart/form-data">
    <input type="hidden" name="question_number" value="<?php echo $question_number; ?>">
    <label for="text">Question:</label>
    <div ><?php echo '<img src = "data:image;base64,' . base64_encode($question['image_']) . '" alt = "Image" style = "width:100px; height: 100px;">' ?>
    <input type="file" name = "image">
</div>
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