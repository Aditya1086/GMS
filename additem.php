
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .addItem{
    height: 100vh;
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
    background-color: skyblue;
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

    </style>
</head>
<body>
  <div class="addItem"> 
    <form class="form" action="">
        <h3>
            <p class="title">Add Item </p><br></h3>
        <p class="message">Add Items for Your customers. </p><br>
        <div class="flex">
            <label>
                <input class="input" type="text" placeholder="" required="" name="itemname">
                <span>Item Name</span>
            </label>

            <label>
                <input class="input" name="Quantity" type="number" placeholder="" required="">
                <span>Quantity</span>
            </label>
        </div>

        <label>
            <input class="input" name="itemprice" maxlength="10" type="number" placeholder="" required="">
            <span>Price</span>
        </label>

        <label>
            <input class="input" type="file" name="itemimg" placeholder="" required="" accept="Image/*"  >
            <span>Item Image</span>
        </label>
        <label>
            <input class="input" type="date" name="exp" placeholder="" required="">
            <span>Expiry Date</span>
        </label>
        <label>
            <input class="input" type="date" name="mfg" placeholder="" required="">
            <span>Manufacturing Date</span>
        </label><br>
        <button class="submit" style="background-color: skyblue;">Add Item</button>
 </div> 
</body>
</html>
<?php

?>