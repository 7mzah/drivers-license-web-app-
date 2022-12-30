<?php include '../../database.php'; ?>
<?php session_start(); ?>


<?php
//Set question number
$number = (int) $_GET['n'];


/*
 *   Get total question
 */
$query = "SELECT * FROM `challengingquestions`";
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;

/*
 *       Get question
 */

$query = "SELECT * FROM `challengingquestions` WHERE  question_number = $number";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);

$question = $result->fetch_assoc(); // that is going to give us an associative array with our data that we requested that can be used dynamically in our app


/*
 *       Get choices
 */

$query = "SELECT * FROM `challengingchoices` WHERE  question_number = $number";
$choices = $mysqli->query($query) or die($mysqli->error . __LINE__);


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
            <div class="current">Question <?php echo $question['question_number'] ?>  </div>
            <p class="questions">
                <?php
                echo $question['text'];
                ?>
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()): ?>
                    <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?>
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
            Copyright &copy; 2022, Driving License Trainer
        </div>
    </footer>
</body>
<div id=timer></div>
        <script type="text/javascript">
            const startingMinutes = <?php echo $total*0.5?>;
            let time = startingMinutes * 60;
            const countdownEL = document.getElementById('timer');

            setInterval(updateCountdown, 1000);

            function updateCountdown() {
                const minutes = Math.floor(time / 60);
                let seconds = time % 60;

                seconds = seconds < 10 ? '0' + seconds : seconds;
                countdownEL.innerHTML = `${minutes}:${seconds}`;
                time--;
            }</script>
</html>