<!DOCTYPE html>
<?php session_start();?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5185b86103.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="usercss/style.css" type="text/css">
    <title>User Page</title>

</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2><?php

            echo $_SESSION['username'];
            ?></h2>
            <ul>
                <li>
                    <div class="dropdown"><i class="fa-solid fa-memo"></i>Theoretical Practice Tests

                        <div class="dropdown-content">
                            <a href="../theoreticalPracticeTests/easytest/index.php"> Easy Test
                            </a>
                            <a href="../theoreticalPracticeTests/moderatetest/index.php">Moderate Test</a>
                            <a href="../theoreticalPracticeTests/challengingtest/index.php">Challenging Test</a>
                        </div>
                    </div>
                </li>


                <li>
                    <div class="dropdown"><i class="fa-solid fa-memo"></i>Road Signs Practice Tests

                        <div class="dropdown-content">
                            <a href="../theoreticalPracticeTests/easytest/index.php"> Easy Test
                            </a>
                            <a href="../theoreticalPracticeTests/moderatetest/index.php">Moderate Test</a>
                            <a href="../theoreticalPracticeTests/challengingtest/index.php">Challenging Test</a>
                        </div>
                    </div>
                </li>





            </ul>
        </div>


    </div>

</body>

</html>