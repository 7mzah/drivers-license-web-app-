<?php include '../../database.php' ?>
<?php session_start(); ?>

<?php
//Check to see if score is set
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
 }

if ($_POST) {
    $Qnumber = $_POST['number']; //question number
    $selected_choice = $_POST['choice'];
    $next = $Qnumber + 1;
    

}


/*
 *   Get total question
 */

$query = "SELECT * FROM `moderatequestions`";
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;

/*
 *   Get correct choice
 */

$query = "SELECT * FROM `moderatechoices` WHERE question_number = $Qnumber AND is_correct = 1";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);

$row = $result->fetch_assoc();

$correct_choice = $row['id'];

if ($correct_choice == $selected_choice) {

    $_SESSION['score']++;

}

if ($Qnumber == $total) {

    header("Location: final.php");
    

} else {
    header("Location: question.php?n=$next");
}

