<?php
include"./connect.php";
$mobile = $_REQUEST['mobile'];
$pwd = $_REQUEST['pwd'];

if($mobile === "7235047914" && $pwd==="123456"){
    header("location:./admindashboard.php");
}
else{
    $query = "SELECT * FROM user WHERE mobile = '$mobile' AND pwd = '$pwd' " ;


$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['mobile'] === $mobile && $row['pwd']=== $pwd){
        header("location:./success.html");
    }
}
$row = mysqli_fetch_assoc($result);
}



?>