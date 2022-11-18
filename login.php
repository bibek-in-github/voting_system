<?php

session_start();
include("connection.php");
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pass = md5($_POST['pwd']);

    // print_r($_POST);

    $sql = "SELECT * FROM  voters_info WHERE username ='$uname' AND pwd='$pass'";
    $res = mysqli_query($connect, $sql);

    if (mysqli_num_rows($res) > 0) {
        $data = mysqli_fetch_assoc($res);
        $flag = $data['flag'];

        if ($flag == 0) {
            $_SESSION['username'] = $uname;
            // 
            $_SESSION['success'] = "login success";
            header("location: vote.php");
        //     echo '<script>
        //     alert("Login Sucessfully");
        //     window.location = "../final/vote.php";
        // </script>';
            echo $_SESSION['username'];
            $id = $data['reg_no'];
            $updateSql = "update voters_info set flag = 1 where reg_no = $id";
            $updateRes = mysqli_query($connect, $updateSql);
          
       } else {
        echo '<script>
        alert("Already logined ");
        window.location = "../voting/login.php";
     </script>';
        //   echo "you have already logged in.";
    }
} else {
    echo '<script>
    alert("Something is wrong with password or username!");
    window.location = "../voting/login.php";
</script>';
}
}
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="msgCard.css">
</head>

<body>
    <div class="MsgCard <?php if(isset($_SESSION['addedMsg'])) echo "showCard"?>">
        <p class="msg"><?php echo $_SESSION['addedMsg']; unset($_SESSION['addedMsg']);?></p>
        <button class="crossBtn">X</button>
    </div>
    <nav>
        <input type="checkbox" id="check">


        <label for="check" class="checkbtn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </label>


        <ul>
            <li><button><a href="index.php">Home </a></button></li>

        </ul><br><br>
    </nav>
    <div class="main">
        <div class="form">
            <h2>Login Here</h2>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
            <form action="" method="post">
                <input type="name" name="uname" placeholder=" user name" required="required"><br><br>
                <input type="password" id="id_password" name="pwd" placeholder=" Password" required="required">
                <i class="far fa-eye" id="togglePassword" style="margin-left: -50px; cursor: pointer;"></i>

               <br> <button id="btn" type="submit" name="submit">login</button><br>

               <script>const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

        </script>

                new user? <a href=register.php>Register Here</a>     

        </div>
   
        <script src="./msgCard.js"></script>

</body>

</html> 
