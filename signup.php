<?php

include"./connect.php";
$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$pwd = mysqli_real_escape_string($conn, $_REQUEST['pwd']);
$pwd2 = mysqli_real_escape_string($conn, $_REQUEST['cpwd']);
$mobile = mysqli_real_escape_string($conn, $_REQUEST['mobile']);

// attempt insert query execution
if($pwd = $pwd2){
$sql = "INSERT INTO user VALUES ('$fname', '$lname','$pwd','$mobile')";
	if(mysqli_query($conn, $sql)){
	    
		header('Location: index.php');
	}
} 
else{
   
    header('Location: failed.html');
}
mysqli_close($conn);
?>

