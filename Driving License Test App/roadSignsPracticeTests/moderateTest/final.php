<?php session_start(); ?>
<?php include '../../database.php' ?>
<?php

$query = "SELECT * FROM `moderatesignquestions`";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);

$queryChoice = "SELECT * FROM `moderatesignchoices` WHERE is_correct = 1";
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
            <h1>Road Rules Signs Test</h1>
        </div>
    </header>
    <hr>

    <main>
        <div class="container">
            <form action="../../user/UserDashboard.php" method="post">
                <h2 class="TestOver">Road Rules Test is over</h2> 
                <p>Final Score:
                    <?php echo $_SESSION['score']; ?>
                </p>
                <table>


                    <?php while ($questions = $result->fetch_assoc() and $answers = $choices->fetch_assoc()): ?>
                    <tr>
                        <td>
                            <p>
                                <?php echo $questions['question_number'] . "." . " " . '<img src = "data:image;base64,' . base64_encode($questions['image_']) . '" alt = "Image" style = "width:100px; height: 100px;">' . " " . $answers['text_']; ?>
                            </p>
                        </td>




                    </tr>
                    <?php endwhile; ?>







                </table>
                <input class="proceed" type="submit" name="proceed" value="Proceed">
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