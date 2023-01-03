<?php include '../../database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>hello</p>
<?php
echo '<h2>'; 
session_start();
echo $_SESSION['username'];
echo '</h2>'
?>

<a href="../theoreticalPracticeTests/easytest/index.php">Easy practice Test</a>
<a href="../theoreticalPracticeTests/moderatetest/index.php">Moderate Practice test</a>
<a href="../theoreticalPracticeTests/challengingtest/index.php">challenging practice test</a>

<p><a href="../roadSignsPracticeTests/easyTest/index.php">Easy signs practice test</a></p>
<p><a href="../roadSignsPracticeTests/moderateTest/index.php">Moderate signs practice test</a></p>
<p><a href="../roadSignsPracticeTests/challengingTest/index.php">Challenging signs practice test</a></p>


    
</body>
</html>