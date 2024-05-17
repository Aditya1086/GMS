<?php
include "./head.php";
include "./connect.php";
session_start();
if (!isset($_SESSION["user_name"])) {
    header("location:./index.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive Table</title>
  
  
  
      <link rel="stylesheet" href="cart.css">

  
</head>

<body>
  <h1><u>Cart</u></h1>
      <table>
      <thead>
        <tr>
          <th>item Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Action1</th>
          <th>Action2</th>
        </tr>
      <thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
</table>
      
    
  
  
</body>
</html>
