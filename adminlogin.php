<?php
session_start();
// var_dump($_SESSION);

if(!isset($_SESSION['success']))
    header('location: admin.php');
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin </title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    </div>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </label>

        <!-- <label class="logo"><a href="Admin.php"> Admin </a></label> -->
        <ul>
            <li><button><a href="logout.php">log out </a></button></li>
            <li><button><a href="candidate.php">
                        <font size="2">candidate </font>
                    </a></button></li>
            <li><button><a href="result.php">Result </a></button></li>

        </ul><br><br>
    </nav>


</body>

</html>