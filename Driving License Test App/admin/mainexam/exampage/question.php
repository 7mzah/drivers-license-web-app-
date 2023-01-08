<?php include '../../../database.php'; ?>
<?php session_start(); 

if($_SESSION['istaken']==1){

    header("Location: ../../../user/UserDashboard.php");

}?>




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
            <h1>MainExam</h1>
        </div>
    </header>
    <hr>

    <main>
        <form id = "myform" action="process.php" method="post" enctype="multipart/form-data">
            <?php
            $questions = mysqli_query($mysqli, "SELECT * FROM mainexamquestions");
            while ($question = mysqli_fetch_assoc($questions)) {
                $choices = mysqli_query($mysqli, "SELECT * FROM mainexamchoices WHERE question_number = {$question['question_number']}");
                ?>
                <div>
                    <div class="current">Question <?php echo $question['question_number'] ?> </div>
                    <p class="questions">
                        <?php
                        $image = $question['image_'];
                        if (empty($image)) {
                            echo $question['text_'];
                        } else {
                            echo '<p><img src = "data:image;base64,' . base64_encode($question['image_']) . '" alt = "Image" style = "width:100px; height: 100px;"></p>';
                            echo $question['questiontext_'];

                        }

                        ?>
                    </p>

                    <ul class="choices">
                        <?php while ($choice = mysqli_fetch_assoc($choices)) { ?>
                            <li><input type="radio" name="choices[<?php echo $question['question_number']; ?>][]"
                                    value="<?php echo $choice['id']; ?>">
                                <?php echo $choice['choicetext_']; ?>
                            </li>
                            <?php } ?>
                    </ul>
                    <?php } ?>
                <input name="submit" type="submit" value="Submit" class="Nsubmit">
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

</html>

<!-- Get the timer information from the server using an AJAX request -->
<script>

    // Make an AJAX request to get the timer information
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Parse the response
            var response = JSON.parse(this.responseText);
            var time_start = Number(response.time_start) * 1000;
            var timeLimit = Number(response.time_limit) * 1000;


            // Calculate the time when the timer should expire
            var timeExpire = time_start + timeLimit;

            // Update the timer every 1000 milliseconds (1 second)
            setInterval(function () {
                // Calculate the time remaining in minutes and seconds
                var timeRemaining = (timeExpire - Date.now());
                var minutes = Math.floor(timeRemaining / 60000 % 60);
                var seconds = Math.floor(timeRemaining /1000 % 60);

                // Display the timer
                document.getElementById("timer").innerHTML = `${minutes}:${seconds}`;
               


                // Check if the time has expired
                if (timeRemaining < 0) {
                    
                    // Time has expired, redirect the user to a new page
                    document.getElementsByName('submit')[0].click();
                   
                }
            }, 1000);
        }
    };
    xhr.open("GET", "get_timer.php", true);
    xhr.send();
</script>