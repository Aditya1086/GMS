<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td,
        tr,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;

        }

        .main {

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: larger;
        }

        .ui-btn {
            cursor: pointer;
            border-radius: 5px;
            color: black;
            border-style: solid;
            background-color: transparent;
            border-color: rgb(219, 218, 218);
            width: 120px;
            height: 40px;
            transition: 0.2s ease;
            text-transform: uppercase;
            border-width: 2px;
            font-weight: 500;
            font-size: 18px;
            letter-spacing: 2px;
        }

        .ui-btn:hover {
            color: rgb(247, 247, 247);
            background-color: rgb(202, 25, 25);
            border-color: rgb(202, 25, 25);
            text-shadow: 0 0 50px white, 0 0 20px white, 0 0 15px white;
            box-shadow: 0 0 50px rgb(202, 25, 25), 0 0 30px rgb(202, 25, 25),
                0 0 60px rgb(202, 25, 25), 0 0 120px rgb(202, 25, 25);
            font-size: 20px;
            width: 130px;
            height: 50px;
            letter-spacing: 3px;
        }

        .ui-btn:active {
            width: 115px;
            height: 38px;
            letter-spacing: 0px;
        }


        .ui-btn1 {
            cursor: pointer;
            border-radius: 5px;
            color: black;
            border-style: solid;
            background-color: transparent;
            border-color: rgb(219, 218, 218);
            width: 120px;
            height: 40px;
            transition: 0.2s ease;
            text-transform: uppercase;
            border-width: 2px;
            font-weight: 500;
            font-size: 18px;
            letter-spacing: 2px;
        }

        .ui-btn1:hover {
            color: rgb(247, 247, 247);
            background-color: rgb(0, 81, 255);
            border-color: rgb(0, 81, 255);
            text-shadow: 0 0 50px white, 0 0 20px white, 0 0 15px white;
            box-shadow: 0 0 50px rgb(0, 81, 255), 0 0 30px rgb(0, 81, 255),
                0 0 60px rgb(0, 81, 255), 0 0 120px rgb(0, 81, 255);
            font-size: 20px;
            width: 130px;
            height: 50px;
            letter-spacing: 3px;
        }

        .ui-btn1:active {
            width: 115px;
            height: 38px;
            letter-spacing: 0px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <th>Action1</th>
                <th>Action2</th>
            </tr>
            <h4>
                <tr>
                    <td>Onion</td>
                    <td>Rs. 100 /KG</td>
                    <td>5</td>
                    <td>
                        <a href="./edit.php"><i class="fa-regular fa-pen-to-square" style="color: blue;"><button
                                    class="ui-btn1">Edit</button></a></i>
                    </td>
                    <td> <a href="./delete.php"> <i class="fa-solid fa-trash" style="color: red;"><button
                                    class="ui-btn">Delete</button></a></i>
                    </td>
                </tr>
        </table>
        </h4>
    </div>

</body>

</html>