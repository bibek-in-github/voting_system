<?php
include "connection.php";
    print_r($_GET);
    $candidate_id = $_GET['candidate_id'];
    $vote_count = (mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM vote WHERE candidate_id = $candidate_id")))['vote_count'];
    // echo "vote count = " . $vote_count;

    $vote_count +=1;
    
    $update_vote_count = "UPDATE vote SET candidate_id = $candidate_id, vote_count = $vote_count where candidate_id = $candidate_id";
    $update_vote_count_res = mysqli_query($connect, $update_vote_count);
    if($update_vote_count_res){
        echo "successfully voted";
        header("location: login.php");
    }else{
        echo "sorry, something went wrong";
    }
?>