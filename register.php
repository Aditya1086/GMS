<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php include "./head.php"; ?>
</head>
<?php
include "./header.php";
?>

<body class="register">
    <form class="form" action="signup.php">
        <h3>
            <p class="title">Register </p><br>
        </h3>
        <p class="message">Signup now and get full access to our app. </p><br>
        <div class="flex">
            <label>
                <input class="input" type="text" placeholder="" required="" name="fname">
                <span>Firstname</span>
            </label>

<body>
    <div class="register">
        <div class="left">
            <div class="up">
                <h1>Looks Like You Are New Here!</h1><br>
                <h3>Sign up with your mobile number to get started</h3>
            </div>
            <div class="logo">
                <a href="" class="logo"><i class="fas fa-shopping-basket"></i> GMS</a>
            </div>
        </div>
        <form class="form" action="signup.php">
            <div class="flex">
                <label>
                    <input class="input" type="text" placeholder="" required="" name="fname">
                    <span>Firstname</span>
                </label>

                <label>
                    <input class="input" name="lname" type="text" placeholder="" required="">
                    <span>Lastname</span>
                </label>
            </div>

            <label>
                <input class="input" name="mobile" maxlength="10" type="tel" placeholder="" required="">
                <span>Mobile</span>
            </label>
            <label>
                <input class="input" type="password" name="pwd" placeholder="" required="">
                <span>Set Password</span>
            </label>
            <label>
                <input class="input" type="password" name="cpwd" placeholder="" required="">
                <span>Confirm password</span>
            </label><br>
            <button class="submit">Sign Up</button>
            <p class="signin">Already have an account ?
                <a href="index.html?id=signin"> <u>Login</u> </a>
            </p>
        </form>
    </div>

        <label>
            <input class="input" name="mail" type="email" placeholder="" required="">
            <span>Email</span>
        </label>
        <label>
            <input class="input" type="password" name="pwd" placeholder="" required="">
            <span>Password</span>
        </label>
        <label>
            <input class="input" type="password" name="cpwd" placeholder="" required="">
            <span>Confirm password</span>
        </label><br>
        <button class="submit">Sign Up</button>
        <p class="signin">Already have an acount ?
            <a href="index.html?id=signin"> <u>Login</u> </a>
        </p>
    </form>

    <script>
        let mobile = document.getElementsByName("mobile")
        mobile.addeventlistener("click", () => {
            if (typeof (mobile.values) != "number") {
                alert("Please Enter only Numbers in Mobile number Field")
            }
        })
    </script>

</body>

</html>