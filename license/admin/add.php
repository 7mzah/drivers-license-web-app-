<?php
include '../database.php'
?>
<?php
if (isset($_POST['submit'])) {
    //get post variables
    // $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    //Create a choices array
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];
    $choices[5] = $_POST['choice5'];

    // Escape the entered data so that someone can enter don't, can't etc.
    $escaped_question_text = $mysqli->real_escape_string($question_text);
    $query = "INSERT INTO `easyquestions`(text_) VALUES ('$escaped_question_text')";
    $run_query = $mysqli->query($query) or die($mysqli->error . __LINE__);
    //validate the insert
    
    if ($run_query) { //number of the choice and $value is the value of the choice number
        $id = $mysqli->insert_id;
        foreach ($choices as $choice => $value) {
            if ($value != '') {
                if ($correct_choice == $choice) {
                    $is_correct = 1;

                } else {

                    $is_correct = 0;
                }
                $escaped_value = $mysqli->real_escape_string($value);
                //choice query
                $query = "INSERT INTO `easychoices` (question_number, is_correct, text_) VALUES ('$id','$is_correct','$escaped_value')";
                $run_query = $mysqli->query($query) or die($mysqli->error . ' ' . __LINE__);

                if ($run_query) {
                    continue;
                } else {
                    die('Error : (' . $mysqli->errno . ') ' . $mysqli->error);
                }

            }


        }
        header("Location:add.php");
        exit;
    }

}

/*
 *   Get total question
 */
// $query = "SELECT * FROM `easyquestions`";
// $results = $mysqli->query($query) or die($mysqli->error . ' Line: ' . __LINE__);
// The following code isn't going to work for a real application
// $total = $results->num_rows;
// $next = $total + 1;
/*
Think about this.
If you have multiple users on this page and there are 10 questions in the database, 
then they will all have 11 as the next id for the question they are about to insert.
The table does not have a primary key so question ids can be duplicated.
The database will end up with multiple questions with the same id.
Solution:
Don't let the user enter the id. Let the database assign it using auto increment.
Once you insert the question you can ask the database for the last inserted id
and you can use that as the foreign key for the answers.
*/
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

            <form action="add.php" method="post">
                
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