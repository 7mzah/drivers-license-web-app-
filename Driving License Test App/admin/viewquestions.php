<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>

</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <img src="../images/Driving Academy-logos_transparent_1.png" class="logo" width="310px" height="auto"
                background-size="1000px" max-height="25%" max-width="100%"><!-- comment -->

        </div>
        <ul>
            <li onclick="window.location.href='adminDashboard.php'"><img src="../images/dashboard (2).png"
                    alt=""><span>Dashboard</span></li>
            <li onclick="window.location.href='viewstudents.php'"><img src="../images/reading-book (1).png"
                    alt=""><span>Users</span></li>
            <li onclick="window.location.href='viewquestions.php'"><img src="../images/reading-book (1).png"
                    alt=""><span>Edit Tests</span></li>
            <li onclick="window.location.href='viewfeedback.php'"><span>View feedbacks</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">

            </div>
        </div>
    </div>

    <div class="content">
        <a onclick=toggleDiv()><button>Edit Theoretical Questions</button></a>

        <div id="theoretical">
            <a href= "editQuestions/editETQ/editETQ.php"><button>Easy</button></a>
            <a href = "editQuestions/editMTQ/editMTQ.php"><button>Moderate</button></a>
            <a href = "editQuestions/editCTQ/editCTQ.php"><button>Challenging</button></a>
            <br>

            
            <script>
                    function toggleDiv() {
                        var div = document.getElementById("theoretical");
                        // div.style.display="none";
                        if (div.style.display === "none") {
                            div.style.display = "block";
                        } else {
                            div.style.display = "none";
                        }
                    }
                </script>

        </div>
        <br>
        <a onclick=toggleDiv1()><button>Edit Road Signs Questions</button></a>
        <div id="sign">
                <a href="editQuestions/editESQ/editESQ.php"><button>Easy</button></a>
                <a href="editQuestions/editMSQ/editMSQ.php"><button>Moderate</button></a>
                <a href = "editQuestions/editCSQ/editCSQ.php"><button>Challenging</button></a>
                <script>
                    function toggleDiv1() {
                        var div = document.getElementById("sign");
                        // div.style.display="none";
                        if (div.style.display === "none") {
                            div.style.display = "block";
                        } else {
                            div.style.display = "none";
                        }
                    }
                </script>

            </div>

            <a ref = "mainexam/editquestions.php"><button>Edit main exam questions</button></a>
       
</body>

</html>