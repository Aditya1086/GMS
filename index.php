<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GMS</title>
    <link rel="icon" href="./images/shopping-basket-solid.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />
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
        <form action="" class="login-form" id="signin">
            <h3>Login Now</h3>
            <input type="number" placeholder="Mobile No" class="box" />
            <input type="password" placeholder="Password" class="box" />
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="register.html">create now</a></p>
            <input type="submit" value="login now" class="btn" />
        </form>

    </header>
    <section class="home" id="home">
        <div class="content">
            <h3>fresh and <span>organic </span>Products for your</h3>
            <p>
                daily needs. Shop at our grocery website for a wide selection of high-quality fruits, vegetables, dairy, meat, and pantry items. We guarantee freshness and offer fast, reliable delivery to your doorstep. Start shopping today!
            </p>
            <a href="#" class="btn">shop now</a>
        </div>
    </section>
    <section class="features" id="features">
        <h1 class="heading">our <span>features</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/feature-1.png" alt="" style="width: 33rem" />
                <h3>fresh and organic</h3>
            </div>

            <div class="box">
                <img src="images/feature-2.png" alt="" style="width: 29rem" />
                <h3>free delivery</h3>

            </div>
            <div class="box">
                <img src="images/feature-3.png" alt="" style="width: 37rem" />
                <h3>easy payments</h3>

            </div>
        </div>
    </section>

    <section class="products" id="products">
        <h1 class="heading">our <span>products</span></h1>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/products-1.png" alt="" />
                    <h3>fresh oranges</h3>
                    <div class="price">₹100-₹120/-</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="images/products-2.png" alt="" />
                    <h3>fresh onion</h3>
                    <div class="price">₹100-₹120/-</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="images/products-3.png" alt="" />
                    <h3>watermelon</h3>
                    <div class="price">₹100-₹120/-</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="images/products-4.png" alt="" />
                    <h3>fresh cabbage</h3>
                    <div class="price">₹100-₹120/-</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide box">
                        <img src="images/products-5.png" alt="" />
                        <h3>fresh potato</h3>
                        <div class="price">₹100-₹120/-</div>

                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="images/products-6.png" alt="" />
                        <h3>fresh avocado</h3>
                        <div class="price">₹100-₹120/-</div>

                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="images/products-7.png" alt="" />
                        <h3>fresh carrot</h3>
                        <div class="price">₹100-₹120/-</div>

                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="images/products-8.png" alt="" />
                        <h3>green lemon</h3>
                        <div class="price">₹100-₹120/-</div>

                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories" id="categories">
        <h1 class="heading">product <span>categories</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/cat-1.png" alt="" style="width: 30rem; padding-top: 6rem" />
                <h3>vegetables</h3>
                <p>upto 45% off</p>
                <a href="vegetable.html" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="images/cat-2.png" alt="" style="width: 30rem" />
                <h3>fresh fruits</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="images/cat-3.png" alt="" style="width: 30rem; padding-top: 2.5rem" />
                <h3>dairy products</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>
    </section>
   
    <!---Footer Section-->

   
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3> Grocery <i class="fa fa-shopping-basket"></i></h3>
                <p>Feel Free To Follow Us On Our Social Media Handlers All The Links Are Given Below.</p>
                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-twitter"></a>
                    <a href="#" class="fa-brands fa-instagram"></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <h3> Contact Info</h3>
                <a href="#" class="links"><i class= "fa fa-phone"></i>+91 9198113160</a>
                <a href="#" class="links"><i class= "fa fa-phone"></i>+91 9198113160</a>
                <a href="#" class="links"><i class= "fa fa-envelope"></i>info@examole.com</a>
                <a href="#" class="links"><i class= "fa fa-map-marker"></i>Varanasi, India</a>
            </div>
            <div class="box">
                <h3> Quick Links </h3>
                <a href="#" class="links"><i class= ""></i>&#x1f3e0 Home</a>
                <a href="#" class="links"><i class= ""></i>&#128722 Features</a>
                <a href="#" class="links"><i class= ""></i>&#128717 Products</a>
                <a href="#" class="links"><i class= ""></i>&#128230 Categories</a>

            </div>
            <div class="box">
                <h3>Newsletter</h3>
                <p>Subscribes For Latest Updates</p>
                <input type="email" name="" id="" placeholder="Your Email" class="email">
                <input type="submit" value="Subscribe" class="btn"><br>
                <img src="images/payment 1.png" alt="">
                <img src="images/payment 2.png" alt="">
                <img src="images/payment 3.png" alt="">

            </div>
        </div>
        <div class="credit">&#169 Created By <span>Team</span> |All Rights Reserved</div>
    </section>
     <!---Footer Section-->

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>

</html>