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
            <form action="add.php" method="post">
                <p><label>Question Number:</label> <input type="number" name="question_number">
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