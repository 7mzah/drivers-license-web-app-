<?php session_start();
$_SESSION['istaken'] = 1;
?>
<?php include '../../../database.php' ?>
<?php

$query = "SELECT * FROM `mainexamquestions`";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);

$queryChoice = "SELECT * FROM `mainexamchoices` WHERE is_correct = 1";
$choices = $mysqli->query($queryChoice) or die($mysqli->error . __LINE__);

$score = $_GET['score'] = null? 0 : $_GET['score'];
$id = $_SESSION['id'];
$query = "UPDATE `user_status` SET `score` = $score, `taken_exam` = 1 WHERE `id` = $id";
$res = $mysqli->query($query);
if($res){
    
}

$user_id = $_SESSION['id'];
$query = "DELETE FROM `timers` WHERE `user_id` = '$user_id'";
$run = $mysqli->query($query);

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
            <form action="../../../user/UserDashboard.php" method="post">
                <h2>Road Rules Test is over</h2> <!-- difficulty type(Easy, Medium, Hard) should be dynamic  -->
                <p>Final Score:
                    <?php echo $score; ?>
                </p>
                <table>


                    <?php while ($questions = $result->fetch_assoc() and $answers = $choices->fetch_assoc()): ?>
                        
                        <tr>
                            <td>
                                <p>
                                    <?php
                                    $image = $questions['image_'];
                                    if (empty($image)) {
                                        echo $questions['question_number'] . "." . " " . $questions['questiontext_'] . " " . $answers['choicetext_'];
                                    } else {
                                        echo $questions['question_number'] . "." . " " . '<img src = "data:image;base64,' . base64_encode($questions['image_']) . '" alt = "Image" style = "width:100px; height: 100px;">' . " " . $answers['choicetext_'];
                                    }
                                    ?>
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