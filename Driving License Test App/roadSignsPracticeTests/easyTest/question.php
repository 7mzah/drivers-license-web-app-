<?php include '../../database.php'; ?>
<?php session_start();

if ($_SESSION['isloggedin'] != 1) {
    header("Location:index.php");
}
?>


<?php
//Set question number
$number = (int) $_GET['n'];


/*
 *   Get total question
 */
$query = "SELECT * FROM `easysignquestions`";
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;

/*
 *       Get question
 */

$query = "SELECT * FROM `easysignquestions` WHERE  question_number = $number";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);

$question = $result->fetch_assoc(); // that is going to give us an associative array with our data that we requested that can be used dynamically in our app


/*
 *       Get choices
 */

$query = "SELECT * FROM `easysignchoices` WHERE  question_number = $number";
$choices = $mysqli->query($query) or die($mysqli->error . __LINE__);

$question_number = $_SESSION['question_number'];
$next = $number + 1;
if($number == $question_number){
    header("Location: question.php?n=$next");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Road Rules Signs test</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
    <header>
        <div class="container">
            <h1>Road Rules Signs Test</h1>
        </div>
    </header>
    <hr>

    <main>
        <div class="container">
            <div class="current">Question <?php echo $question['question_number'] ?> </div>
            <div class="picture">
            <p class="questions">
            <form action="process.php" method="post" enctype="multipart/form-data">
                <?php
                echo '<img src = "data:image;base64,' . base64_encode($question['image_']) . '" alt = "Image" style = "width:100px; height: 100px;">';
                ?>
                </p>
</div>
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()): ?>
                        <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>">
                            <?php echo $row['text_']; ?>
                        </li>
                        <?php endwhile; ?>

                </ul>
                <input name="submit" type="submit" value="Submit" class="Nsubmit">
                <input type="hidden" name="number" value="<?php echo $number; ?>">
            </form>

        </div>
    </main>
    <hr>
    <footer>

        <div class="container">
            Copyright &copy; 2023, Driving License Trainer
        </div>
    </footer>
</body>

</html>