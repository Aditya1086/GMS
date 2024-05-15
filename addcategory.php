<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add category</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .addcategory{
 
    width: 100vw;
  
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.title::before {
    width: 18px;
    height: 18px;
}

.title::after {
    width: 18px;
    height: 18px;
    animation: pulse 1s linear infinite;
}

.title::before,
.title::after {
    position: absolute;
    content: "";
    height: 16px;
    width: 16px;
    border-radius: 50%;
    left: 0px;
    background-color: #50C878;
}
@keyframes pulse {
    from {
        transform: scale(0.9);
        opacity: 1;
    }
    to {
        transform: scale(1.8);
        opacity: 0;
    }
}
.form{
    height:auto;
}
    </style>
</head>
<body>
    <div class="main">
    <div class="addcategory"> 
    <form class="form" method="post" action="categoryTable.php">
        <h3>
            <p class="title">Add Category </p><br></h3>
        <p class="message">Add Categories of Items. </p><br>
      

        

        <label>
            <input class="input" type="Text" name="category_name" placeholder="" required   >
            <span>Category Name</span>
        </label>
      
        <button class="submit" type="submit" name="add-category" style="background-color: #50C878;">Add Category</button>
 </div>
    </div>
</body>
</html>
<?php
include "./connect.php";
if(isset($_POST["add-category"])){
$name=$_POST["category_name"];
$select_category_name = mysqli_query($conn, "SELECT category_name FROM `category` WHERE category_name = '$name'") or die('select query failed');
 
if(mysqli_num_rows($select_category_name) > 0){
   $message[] = 'product name already added';
}else{
   $add_category_query = mysqli_query($conn, "INSERT INTO `category` VALUES('','$name')") or die('Insert query failed');}
}?>