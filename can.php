<?php
session_start();
include("connection.php");

$name = $_POST['name'];
$age = $_POST['Age'];

//  $photo=$_POST['photo'];

$photo = $_FILES['photo']['name'];

// print_r($_FILES['photo']);

$path = "./uploads/" . $photo;
// echo "path = " . $path;

if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
   // echo "file uploaded";
   $sql = "INSERT INTO candidates(name,Age,photo) 
      VALUES('$name','$age','$photo')";
   $res = mysqli_query($connect, $sql);

   $candidate_id = (mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM candidates WHERE name='$name' and age = '$age' ")))['id'];
   // echo "candidate id = ".$candidate_id;
   $vote_sql = "INSERT INTO vote (candidate_id, vote_count) VALUES ($candidate_id, 0)";
   $vote_res = mysqli_query($connect, $vote_sql);

   if ($res) {
      $_SESSION['addedMsg'] = "Candidate Added Successfully!!!";
      header("location: admin.php");
   } else {
      header("location: adminlogin.php");
   }
} else {
   echo "file not uploaded";
}
?>