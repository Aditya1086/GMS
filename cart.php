
<?php
session_start();
$uname=$_SESSION['user_name'];

if(!isset($uname)){
    header("location:./index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cart Table</title>



    <link rel="stylesheet" href="cart.css">


</head>

<body>
    <h1><u>Cart</u></h1>
    <table>
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action1</th>
                <th>Action2</th>
            </tr>
            <thead>
                <tbody>
                    <tr>
                        <td>Onion</td>
                        <td>Rs. 100 /KG</td>
                        <td>5</td>
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

    <!-- <blockquote> Responsive Table </blockquote> -->


</body>

</html>