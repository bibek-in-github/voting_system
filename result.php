<?php
session_start();
   include("connection.php");
  //  if(isset($_POST['submit'])){
  //   $name=$_POST['name'];
  //   $age=$_POST['Age'];
  //   $photo=$_POST['photo'];
    


  //   // print_r($_POST);

  //   // $sql = "SELECT * FROM candidate_info WHERE name ='$name',$age='$age' AND photo='$photo'";
    
  //  }
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>result </title>
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="result.css">
</head>

<body>

    <nav>

        <label class="logo"><a href="register.php"> Result</a></label>
        <ul>
            <li><button><a href="index.php">Home </a></button></li>

        </ul><br><br>
    </nav>


    <div class="column">

        <?php
  $sql = "SELECT * from candidates INNER JOIN vote on candidates.id = vote.candidate_id";
  $res = mysqli_query($connect, $sql);
  if(mysqli_num_rows($res) > 0){
    // echo "data found";
    while($candidates = mysqli_fetch_assoc($res)){
      // echo $candidates['name'] . "<br>";
      // echo $candidates['Age'] . "<br>";
      // echo $candidates['photo'] . "<br>";
    
    ?>

        <div class="card">
            <p>
                <img src="uploads/<?php echo $candidates['photo']?>" alt="Student2" class="resut-img-style">
            <div class="details-sec">
                <h2>Name: <?php echo $candidates['name']?></h2>
                <p class="title">Age: <?php echo $candidates['Age']?></p>
                <h3> Total Obtained Vote= <?php echo $candidates['vote_count'] ?></h3>
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


</body>

</html>