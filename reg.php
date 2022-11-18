<?php
session_start();
    @include('connection.php');

   //  print_r($_POST);
    $firstname=$_POST['fname'];
    $address=$_POST['adrs'];
    $username=$_POST['username'];
     $password=md5($_POST['pwd']);
    
     $sql_fetch = "select * from voters_info where username='$username'";
     $res_fetch = mysqli_query($connect, $sql_fetch) or die("Could not fetch from database");

     if(mysqli_num_rows($res_fetch) > 0) {
      $_SESSION['already-resgistered'] = "User is already registered";
      header("location:register.php");
     }
     else {
      $sql="INSERT INTO voters_info(fname,adrs,username,pwd, flag) 
    VALUES('$firstname','$address','$username','$password',0)";
       $res = mysqli_query($connect, $sql) or die('connection failed');

     }
    
     if($res){
      $_SESSION['addedMsg'] = "Register Successfull!!!";
      header("location: login.php");
      //   header("location:login.php");
     }
     
     else {
      $_SESSION['staterror']="Register Unsecussful";
        header("location:register.php");
     }
    
      

?>