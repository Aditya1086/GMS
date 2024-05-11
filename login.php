<?php
include"./connect.php";
session_start();


// if(isset($_REQUEST['submit'])){

    $email = mysqli_real_escape_string($conn, $_REQUEST['mail']);
    $pass = mysqli_real_escape_string($conn, ($_REQUEST['pwd']));
 
    $query = mysqli_query($conn, "SELECT * FROM user WHERE mail = '$email' AND pwd = '$pass'") ;
 
    if(mysqli_num_rows($query) > 0){
 
       $row = mysqli_fetch_assoc($query);
 
       if($row['mail'] == 'admin@gms.com'){
 
          $_SESSION['admin_name'] = $row['fname'];
          $_SESSION['admin_email'] = $row['mail'];
          $_SESSION['admin_id'] = $row['ID'];
          header('location:./admindashboard.php');
 
       }else{
 
          $_SESSION['user_name'] = $row['fname'];
          $_SESSION['user_email'] = $row['mail'];
          $_SESSION['user_id'] = $row['ID'];
          header('location:home.php');
 
       }}
    // }
    else{
      header("location:./index.php");
    }



?>