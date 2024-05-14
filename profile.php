<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>

    <main>
        <div class="container">
            <div class="left">
                <div class="top-container">
                    <div class="image-container">
                        <img src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/profile-pic-male_4811a1.svg" alt="" style="height: 50px; width: 50px;">
                    </div>
                    <div class="name">
                        <span class="hello">HEllO,</span><br>
                        <span class="user-name">Harsh Sahu</span>
                    </div>
                </div><br>

                <div class="middle-container">
                    <div class="my-orders">
                        <img src="download.svg" alt="" style="width: 25px;height: 25px; ">
                        <a href="" style="margin-right: 60px;"><span>MY ORDERS </span></a>
                    </div>
                    <div class="account-settings">
                        <div class="box1">
                            <img src="profile.svg" alt="" style="height: 25px;width: 25px;">
                            <span>Account Settings</span>
                        </div>
                        <a href="#personal-info"><span class="account">Profile Information</span></a><br>
                        <a href="#address"><span class="account">Manage Addresses</span></a>
                    </div>
                </div>

                <div class="bottom-container">
                    <a href="logout.php"  id="logout_btn_link">
                        <div class="log_out-btn"><i class="fa-solid fa-power-off" ></i> Log out</div>
                    </a>
                </div>
            </div>

            <div class="right">
                <div id="personal-info">
                    <h1>Personal Information </h1>
                    <div class="boxes-container">
                        <input type="text" placeholder="First name" name="" id="" class="box" disabled>
                        <input type="text" placeholder="Last name" name="" id="" class="box" disabled>
                    </div>
                </div>
                <div class="email-add">
                    <h1>Email Address </h1>
                    <input type="email" placeholder="E-mail Id" name="" id="" class="box" disabled>
                </div>
                <div class="mobile-number">
                    <h1>Mobile Number </h1>
                    <input type="number" placeholder="Mobile number" name="" id="" class="box" disabled>
                </div><br><br>
                <div class="border-btm"></div><br><br>
                <div class="addresses" id="address">
                    <h1>MANAGE ADDRESS </h1><br>
                    <div class="sections">
                        <div class="section-1">
                            <input type="text" name="" placeholder="Name" id="" class="box" disabled>
                            <input type="number" name="" placeholder="Mobile Number" maxlength="10" id="" class="box" disabled>
                        </div>

                        <div class="section-2">
                            <input type="number" name="" placeholder="Pin code" maxlength="6" id="" class="box" disabled>
                            <input type="text" name="" placeholder="Locality" id="" class="box" disabled>
                        </div>
                    </div>

                    <div class="section-3">
                        <textarea name="" placeholder="Address(Area and Street)" id="" cols="30" rows="5" disabled></textarea>
                    </div>

                    <div class="section-4">
                        <input type="text" placeholder="City" name="" id="" class="box" disabled>
                        <select name="" id="" class="box" disabled>
                            <option value="">Select State</option>
                            <option value="">Uttar Pradesh</option>
                            <option value="">Madhya Pradesh</option>
                            <option value="">Arunachal Pradesh</option>
                            <option value="">Himachal Pradesh</option>
                        </select>
                    </div>

                    <div class="section-5">
                        <input type="text" placeholder="Landmark" name="" id="" class="box" disabled>
                        <input type="tel" placeholder="Alternate moblie number" name="" id="" class="box" disabled>
                    </div>
                </div>
                <div class="buttons">
                    <div class="edit btn btns">Edit</div>
                    <div class="save btn btns">Save</div>
                </div>
            </div>
        </div>
    </main><br><br>

    <!---Footer Section-->
    <?php
    include "./footer.php";
    ?>
</body>

</html>