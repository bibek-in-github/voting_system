<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="register.css">
    <script src="sweetalert.min.js"></script>

</head>
<?php
    session_start();

    if(isset($_SESSION['already-resgistered'])) {
        echo '<script>alert("already register");
    
    window.location = "../voting/register.php";
</script>'; $_SESSION['already-resgistered'];   
    
    }
    if(isset($_SESSION['StatusMsg'])){
        ?>
        <script>
            swal(
                {
                    title:"<?php echo$_SESSION['StatusMsg']; ?>",
                    text : "You Clicked the button!",
                    icon: "sucess",
                    button:"Aww Yiss!",
                }
            );
            </script>
            <?php 
            unset($_SESSION['StatusMsg']);

    }
    ?>
    <!-- <?php
    if(isset($_SESSION['StatusMsg'])){
        ?>
        <script>
            swal(
                {
                    title:"<?php echo$_SESSION['StatusMsg']; ?>",
                    text : "You Clicked the button!",
                    icon: "sucess",
                    button:"Aww Yiss!",
                }
            );
        </script>
            <?php 
            unset($_SESSION['StatusMsg']);

    }
    ?> -->
<body>

    <nav>


        <ul>
            <li><button><a href="login.php">login </a></button></li>

        </ul>

    </nav>

    <div class="main">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <div class="form">
            <h2>Register Here</h2>

            <form action="reg.php" method="POST" enctype="multipart/form-data">

                <input type="text" name="fname" pattern="[A-Za-z ]{2,}" title="Something is wrong in Name" placeholder=" full name " trim="remove space" required="required">
                <input type="text" name="adrs" pattern="[A-Za-z]{3,}" title="Something is wrong Address" placeholder=" Address " required="required">

                <input type="text" name="username"   pattern="^[D|I|T][A-Za-z0-9]+{13}$" maxlength=13 minlength=13 placeholder=" Registration Number" required="required">
                <input type="password" id="id_password" name="pwd"  title="eight or more characters" placeholder=" Password" required="required">
                <i class="far fa-eye" id="togglePassword" style="margin-left: -50px; cursor: pointer;"></i>

                <button id="btn" type="submit" name="submit"><a href="login.php"></a>Register</button><br><br>
                <script>
                    const togglePassword = document.querySelector('#togglePassword');
                    const password = document.querySelector('#id_password');
                        togglePassword.addEventListener('click', function (e) {
                       // toggle the type attribute
                                           const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                       password.setAttribute('type', type);
                       // toggle the eye slash icon
                       this.classList.toggle('fa-eye-slash');
                
});

      
                </script>
        </div>

</body>

</html>

<?php unset($_SESSION['already-resgistered']); ?>