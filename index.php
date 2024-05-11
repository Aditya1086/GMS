<!DOCTYPE html>
<html lang="en">

<?php
include "./head.php";
?>
<body>
   <?php
   include "./header.php";
   ?>
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
                <a href="vegetable.php" class="btn">shop now</a>
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

   
    <?php
    include "./footer.php";
    ?>
     <!---Footer Section-->

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>

</html>