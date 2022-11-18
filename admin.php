<?php
session_start();
include("connection.php");
if(isset($_POST['submit'])){
 $id = $_POST['Id'];
 $pass= $_POST['password'];


 $sql = "SELECT * FROM admin WHERE  Id='$id' AND password='$pass'";
 $res = mysqli_query($connect,$sql);

 if(mysqli_num_rows($res) > 0){
     
    //  $_SESSION['Id']= $id;   
     $_SESSION['success'] = "login success";
    //  echo $_SESSION['success'];
     header("location: adminlogin.php");
    //  echo $_SESSION['Id'];
    // echo $_SESSION['success'];

 }
 else{
      echo '<script>
    alert("ID and password doesnot match please try again!!");
    window.location = "../mid_term1/admin.php";
</script>';
 }

}

?>
<html>

<head>

    <title>login </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="msgCard.css">


</head>

<body>
    <div class="MsgCard <?php if(isset($_SESSION['addedMsg'])) echo "showCard"?>">
        <p class="msg"><?php echo $_SESSION['addedMsg']; unset($_SESSION['addedMsg']);?></p>
        <button class="crossBtn">X</button>
    </div>
    <nav>

        <label class="logo"><a href="register.php"> Admin </a></label>
        <ul>
            <li><button><a href="index.php">Home </a></button></li>

        </ul><br><br>
    </nav>
    <center>

        <div class="main">
            <div class="form">
                <h2>Login Here</h2>

                <form action="admin.php" method="POST" enctype="multipart/form-data">

                    <input type="name" name="Id" placeholder=" admin id  " required="required"><br><br>
                    <input type="password" name="password" placeholder=" Password"><br><br>
                    <button id="btn" type="submit" name="submit">login</button><br>


            </div>


            <script src="./msgCard.js"></script>
</body>

</html>