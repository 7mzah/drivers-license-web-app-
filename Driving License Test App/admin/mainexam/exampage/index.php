<?php include '../../../database.php'; ?>
<?php session_start(); ?>
<?php
$_SESSION['score'] = 0;
$_SESSION['istaken'] = 0;
?>
<?php
/*
 *Get the total number of questions
 */
$query = "SELECT * FROM mainexamquestions";

//get results
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;
$time = $total * 0.25 ;
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
            <h2>Official exam</h2> <!-- difficulty type(Easy, Medium, Hard) should be dynamic  -->
            <ul>
                <li><strong>Number of Questions: </strong>
                    <?php echo $total; ?>
                </li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated Time: </strong>
                    <?php echo $time > 1 ? "$time Minutes" : " $time Minute"; ?>
                </li>


            </ul>
            <a href="question.php?" class="start">Start Test</a>
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