<?php session_start(); ?>
<?php include 'database.php' ?>
<?php

$query = "SELECT * FROM `questions`";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);

$queryChoice = "SELECT * FROM `choices` WHERE is_correct = 1";
$choices = $mysqli->query($queryChoice) or die($mysqli->error . __LINE__);



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
            <form action="index.php" method="post">
                <h2>Road Rules Test is over</h2> <!-- difficulty type(Easy, Medium, Hard) should be dynamic  -->
                <p>Final Score:
                    <?php echo $_SESSION['score']; ?>
                </p>
                <table>


                    <?php while ($questions = $result->fetch_assoc() AND $answers = $choices->fetch_assoc()): ?>
                    <tr>
                        <td>
                            <p>
                                <?php echo $questions['question_number'] . "." . " " . $questions['text'] . " " . $answers['text']; ?>
                            </p>
                        </td>

                        
                        

                    </tr>
                    <?php endwhile; ?>



                    <?php while ($answers = $choices->fetch_assoc()): ?>
                    <tr>
                        <td>
                            <p>
                                <?php echo $answers['text'] ?>
                            </p>
                        </td>
                    </tr>
                    <?php endwhile; ?>



                </table>
                <input type="submit" name="proceed" value="Proceed">
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