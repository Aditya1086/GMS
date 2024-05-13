<?php
include"./connect.php";
session_start();


// if(isset($_REQUEST['submit'])){

    $mobile = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
    $pass = mysqli_real_escape_string($conn, ($_REQUEST['pwd']));
 
    $query = mysqli_query($conn, "SELECT * FROM user WHERE mobile = '$mobile' AND pwd = '$pass'") ;
 
    if(mysqli_num_rows($query) > 0){
 
       $row = mysqli_fetch_assoc($query);
 
       if($row['mobile'] == '7235047914'){
 
          $_SESSION['admin_name'] = $row['fname'];
          $_SESSION['admin_mobile'] = $row['mobile'];
          $_SESSION['admin_id'] = $row['ID'];
          header('location:./admindashboard.php');
 
       }else{
 
          $_SESSION['user_name'] = $row['fname'];
          $_SESSION['user_mobile'] = $row['mobile'];
          $_SESSION['user_id'] = $row['ID'];
          header('location:home.php');
 
       }}
    // }
    else{
      header("location:./index.php");
    }



?>