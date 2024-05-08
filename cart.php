<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr,th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        
        }
        .main{
            
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: larger;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="main">
    <h1>Cart</h1>
    <table>
        <tr>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        <h4>
        <tr>
            <td>Onion</td>
            <td>Rs. 100 /KG</td>
            <td>5</td>
            <td>
                <a href="./edit.php"><i class="fa-regular fa-pen-to-square" style="color: blue;"></a></i>
                <a href="./delete.php"> <i class="fa-solid fa-trash" style="color: red;"></a></i>
            </td>
        </tr>
    </table>
    </h4>
    </div>

</body>
</html>