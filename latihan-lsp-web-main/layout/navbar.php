<?php


require 'functions.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>

    <div class="navbar">
        <div class="nav-logo">
            <a href="index.php">Shoppupurinta</a>
        </div>
        <div class="nav-links">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="cart.php">shopping cart</a>
                </li>
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                
                <?php if(isset($_SESSION["username"])) : ?>     
                    <li>
                        <a href="#" class="b">
                            Hello, <?= $_SESSION["name"]; ?>
                        </a>    
                    </li>
                    <li>   
                        <a href="logout.php" class="a">Logout</a>
                    </li>
                
            <?php endif; ?>
            <?php if(!isset($_SESSION["username"])) : ?>
                
                    <li><a href="login/index.php" class="lg">Login</a></li>
                    <li><a href="register/index.php" class="rg">Register</a></li>
            </ul>
            <?php endif; ?>
        </div>
    </div>

    
</body>
</html>