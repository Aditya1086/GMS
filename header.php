<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    
</head>
<body>
    
<header class="header">
        <a href="" class="logo"><i class="fas fa-shopping-basket"></i> GMS</a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#features">features</a>
            <a href="#products">products</a>
            <a href="#categories">categories</a>
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
        <form action="" class="search-form">
            <input type="text" id="search-box" placeholder="search here..." />
            <label for="search-box" class="fas fa-search"></label>
        </form>
        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="images/products-3.png" alt="" />
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">₹150/KG</span>
                    <span class="quantity">Qty:1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="images/onion.png" alt="" />
                <div class="content">
                    <h3>onion</h3>
                    <span class="price">₹40/KG</span>
                    <span class="quantity">qty:1</span>
                </div>
            </div>

            <div class="total">total: ₹190/-</div>
            <a href="#" class="btn">check out</a>
        </div>

        <!-- login form  -->
        <form action="login.php" class="login-form" id="signin" method="post">
            <h3>Login Now</h3>
            <input type="email" placeholder="E Mail" name="mail" class="box" />
            <input type="password" placeholder="Password" name="pwd" class="box" />
            <p>forget your password <a href="mailto:adityasri1086@gmail.com">click here</a></p>
            <p>don't have an account <a href="register.php">create now</a></p>
            <input type="submit" value="login" class="btn" />
        </form>

    </header>
    <script src="script.js"></script>
</body>
</html>