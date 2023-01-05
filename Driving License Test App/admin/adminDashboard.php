<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=safari">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css " type="text/css">
    <title>Admin Dashboard</title>
</head>

<body>
    <h1>Admin Page</h1>
    <ul>
        <li class="parent">Add Questions
            <ul class="child">
                <li class="parent">Theoretical<span class="expand">»</span>
                    <ul class="child">
                        <li><a href="addQuestions/addETQ.php">Easy</a></li>
                        <li><a href="addQuestions/addMTQ.php">Moderate</a></li>
                        <li><a href="addQuestions/addCTQ.php">Challenging</a></li>
                    </ul>

                </li>
                <li class="parent">Signs<span class="expand">»</span>
                    <ul class="child">
                        <li><a href="addQuestions/addESQ.php">Easy</a></li>
                        <li><a href="addQuestions/addMSQ.php">Moderate</a></li>
                        <li><a href="addQuestions/addCSQ.php">Challenging</a></li>
                    </ul>
                </li>
            </ul>





        </li>
    </ul>
    <ul>
        <li class="parent">Edit Questions
            <ul class="child">
                <li class="parent">Theoretical<span class="expand">»</span>
                    <ul class="child">
                        <li><a href="editQuestions/editETQ.php">Easy</a></li>
                        <li><a href="addMTQ.php">Moderate</a></li>
                        <li><a href="addCTQ.php">Challenging</a></li>
                    </ul>

                </li>
                <li class="parent">Signs<span class="expand">»</span>
                    <ul class="child">
                        <li><a href="addESQ.php">Easy</a></li>
                        <li><a href="addMSQ.php">Moderate</a></li>
                        <li><a href="addCSQ.php">Challenging</a></li>
                    </ul>
                </li>
            </ul>





        </li>
    </ul>
    <ul>

        <li class="parent">Students
            <ul class="child">
                <li><a href="viewstudents.php">registered students</a><span class="expand">»</span>
                </li>
                <li><a href="addstudents.php">add students</a><span class="expand">»</span>

                </li>

            </ul>

            <ul>
                <li class="parent">Main exam
                    <ul class="child">
                        <li><a href="mainexam/viewquestions.php">View questions</a><span class="expand">»</span>
                        </li>
                        <li><a href="mainexam/addquestions.php">add questions</a><span class="expand">»</span>

                        </li>

                    </ul>
                    <p>Publish main exam
                    <form method = "POST" action = "ispublished.php">
                        

                        <input type="submit" name="submit" value="Publish">
                        <input type="submit" name="conceal" value ="Conceal">
                    </form>
                    </p>
                    <?php
                    include '../database.php';

                    $query = "SELECT * FROM `quizzes_table` WHERE id = 1";
                    $res = $mysqli->query($query);
                    $ispublished = $res->fetch_assoc();

                    if ($ispublished['published'] == 1) {
                        echo '<p>Main exam is published</p>';
                    } else {

                        echo '<p>Main exam is not published</p>';
                    }


                    ?>

</body>

</html>

<?php
/*include '../database.php';
$query = "SELECT * FROM `users`";
$res = $mysqli->query($query) or die($mysqli->error . __LINE__);
if ($res) {
$nbrows = $res->num_rows;
echo '<p>Number of students is : ' . $nbrows . "</p>";
}
?>