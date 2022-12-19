<?php session_start();?>
<?php include 'database.php'?>
<?php



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
            <p>Final Score: <?php echo $_SESSION['score'];?></p>
            <input type="submit" name="proceed" value="Proceed" >
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

