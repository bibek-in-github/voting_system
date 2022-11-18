
<?php
  session_start();
  if(!isset($_SESSION['success'])) {
    header("location:login.php");
  } else {
// print_r($_SESSION);
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vote </title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <div class="MsgCard <?php if(isset($_SESSION['username']))echo "showCard";  unset($_SESSION['username']);?>">
        <p class="msg">Login Successfull</p>
        <button class="crossBtn">X</button>
    </div>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </label>
        <label class="logo"><a href="result.php"> Vote your prefered candidate </a></label>
        <ul>
            <li><button><a href="logout.php">log out </a></button></li>

        </ul><br><br>
    </nav>
    <?php

   include("connection.php");
   if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['Age'];
    $photo=$_POST['photo'];
    


    // print_r($_POST);

    // $sql = "SELECT * FROM candidate_info WHERE name ='$name',$age='$age' AND photo='$photo'";
    
   }
?>
    <html>

    <head>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="vote.css">
        <link rel="stylesheet" href="result.css">
        <link rel="stylesheet" href="./msgCard.css">

    </head>

    <body>

        <div class="about-section">

        </div>
        <div class="column">

            <?php
  $sql = "select * from candidates";
  $res = mysqli_query($connect, $sql);
  if(mysqli_num_rows($res) > 0){
    // echo "data found";
    while($candidates = mysqli_fetch_assoc($res)){
      // echo $candidates['name'] . "<br>";
      // echo $candidates['Age'] . "<br>";
      // echo $candidates['photo'] . "<br>";
    
    ?>

            <div class="card">
                <img src="uploads/<?php echo $candidates['photo']?>" alt="Student2" class="resut-img-style">
                <div class="details-sec">
                    <h2>Name: <?php echo $candidates['name']?></h2>
                    <p class="title">Age: <?php echo $candidates['Age']?> years</p>

                    <a href="count_vote.php?candidate_id=<?php echo $candidates['id'] ?>"> <button>vote </button></a>
                </div>
            </div>

            <?php
    }
  }else{?>
            <div class="card">
                <p>Candidates are not found!!!</p>
            </div>
            <?php }
  ?>
        </div>


        <!-- <form>
    <input type="hidden" value="< " >
        <button type="submit" name="vote"></button>
    </form> -->
        <script src="./msgCard.js"></script>

    </body>

    </html>

    <?php
//   if(isset($_SESSION['username'])){
//     echo '<script>
//         alert("Login Sucessfully");
//     </script>'; 
// }
// unset($_SESSION['success']);
  }
?>