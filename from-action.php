<?php
include_once 'db.php'; 
$first = $_GET['first']; 
$last = $_GET['last'];
$email = $_GET['email'];
$uid = $_GET['uid'];
$pwd = $_GET['pwd'];

$sql = "INSERT INTO users (user_first, user_last, 'user_email', user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
    mysqli_query($conn, $sql);
 //   header("location: ../index.php?signup=success"); 
