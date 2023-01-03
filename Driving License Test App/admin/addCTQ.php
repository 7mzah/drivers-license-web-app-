<?php
include '../database.php'
    ?>

<?php
if (isset($_POST['submit'])) {
    //get post variables
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    //Create a choices array
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];
    $choices[5] = $_POST['choice5'];

    $query = "INSERT INTO `challengingquestions`(question_number, text_) VALUES ('$question_number', '$question_text')";
    $run_query = $mysqli->query($query) or die($mysqli->error . __LINE__);

    //validate the insert

    if ($run_query) { //number of the choice and $value is the value of the choice number
        foreach ($choices as $choice => $value) {
            if ($value != '') {
                if ($correct_choice == $choice) {
                    $is_correct = 1;

                } else {

                    $is_correct = 0;
                }

                //choice query
                $query = "INSERT INTO `challengingchoices` (question_number, is_correct, text_) VALUES ('$question_number','$is_correct','$value')";
                $run_query = $mysqli->query($query) or die($mysqli->error . __LINE__);

                if ($run_query) {
                    continue;
                } else {
                    die('Error : (' . $mysqli->errno . ') ' . $mysqli->error);
                }

            }


        }
        header("Location:addCTQ.php");
        die();
    }

}

/*
 *   Get total question
 */
$query = "SELECT * FROM `challengingquestions`";
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;
$next = $total + 1;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Road Rules test</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
    <header>
        <div class="container">
            <h1>Road Rules Test</h1>
        </div>
    </header>
    <hr>

    <main>
        <div class="container">
            <h2>Add A Quesetion</h2>

            <?php

            if (isset($msg)) {
                echo '<p>' . $msg . '<p>';
            }


            ?>

            <form action="addCTQ.php" method="post">
                <p><label>Question Number:</label> <input type="number" value="<?php echo $next ?>"
                        name="question_number">
                </p>
                <p> <label>Question Text:</label><input type="text" name="question_text">
                </p>
                <p> <label>Choice #1:</label><input type="text" name="choice1">
                </p>
                <p> <label>Choice #2:</label><input type="text" name="choice2">
                </p>
                <p> <label>Choice #3:</label><input type="text" name="choice3">
                </p>
                <p> <label>Choice #4:</label><input type="text" name="choice4">
                </p>
                <p> <label>Choice #5:</label><input type="text" name="choice5">
                </p>
                <p> <label>Correct Choice Number:</label><input type="number" name="correct_choice" class="add"></p>
                <input type="submit" name="submit" value="Submit" class="Asubmit">
            </form>

        </div>
    </main>
    <hr>
    <footer>

        <div class="container">
            Copyright &copy; 2022, Driving License Trainer
        </div>
    </footer>
</body>

</html>