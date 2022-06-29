<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="./img/Hình-nền-cute-dễ-thương-1024x576.jpg" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/fan.css">
    <script src="./js/control.js"></script>
    <script src="./js/index.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-block">
                <div class="block-trademark">
                    <img src="./img/wind_logo.png" alt="" class="block-lg">
                    <h2 class="block-name">FAFL</h2>
                </div>
                <h3 class="block-slogan">Feeling Air Feeling Life</h3>
            </div>
            <div class="header-block header-block2">
                <div class="block-search">
                    <input type="search" name="" id="" class="block-search-bar">
                    <button type="submit" class="block-search-btn"><i class="fa-solid fa-magnifying-glass ico"></i></button>
                </div>
                <div class="block-profile">
                    <p class="block-profile-name">Cinderella</p>
                    <img src="./img/Hình-nền-cute-dễ-thương-1024x576.jpg" alt="" class="block-profile-avt">
                </div>
            </div>
        </div>
        <ul class="menu-bar">
            <li class="menu-item item1"><a href="index.php" class="item-linker">Home</a></li>
            <li class="menu-item item2"><a href="?page=fan" class="item-linker">Fan</a></li>
            <li class="menu-item item3"><a href="?page=airconditioner" class="item-linker">Air Conditioner</a></li>
            <li class="menu-item item4"><a href="?page=heater" class="item-linker">Heater</a></li>
            <li class="menu-item item5"><a href="?page=airpurifier" class="item-linker">Air Purifier</a></li>
            <li class="menu-item item6"><a href="?page=vacuumcleaner" class="item-linker">Vacuum Cleaner</a></li>
        </ul>


        <?php

            if(isset($_GET['page']))
            {
                $page = $_GET['page'];
                if($page=="fan"){
                    include_once("fan.php");
                }
            }

        ?>

        




        <div class="footer">
            <h3 class="ft-block">&copy;Copyright by FAFL</h3>
        </div>
    </div>
</body>
</html>