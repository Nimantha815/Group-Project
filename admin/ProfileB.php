<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
    <title>
        Admin Dashboard
    </title>
    <meta charset="utf-8">
    <meta name="keywords" content="Handloom,Handicrafts">
    <meta name="description" content="Online shopping platform">
    <meta http-equiv="refresh" content="300">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profileB.css">\
    <link rel="stylesheet" type="text/css" href="..\css\indexs.css">
    <link rel="stylesheet" type="text/css" href="..\css\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

<!-- <?php //include("../php/header1.php");?> -->
    <div class="main-container">

    
        <!-- LEFT-CONTAINER -->
        <div class="left-container container">
            
                <h2 class="titular">PENDING</h2>
                <ul class="menu-box-menu">
                    <li>
                        <a class="menu-box-tab" href="#6"><span class="icon fontawesome-envelope scnd-font-color"></span>Messages<div class="menu-box-number"></div></a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="producttable.php"><span class="icon entypo-paper-plane scnd-font-color"></span>Products<div class="menu-box-number"></div></a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="ordertable.php"><span class="icon entypo-calendar scnd-font-color"></span>Orders<div class="menu-box-number"></div></a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="posttable.php"><span class="icon entypo-cog scnd-font-color"></span>Posts</a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="#13">
                            <sapn class="icon entypo-chart-line scnd-font-color"></sapn>Pending list</a>
                    </li>
                </ul>
            
                <h2 class="titular">EDIT DETAILS IN YOUR ACCOUNT</h2>
                <a class="sign-in button" href="#22">EDIT PROFILE</a>
                <a class="sign-in button" href="changeA.php">CHANGE PASSWORD</a>
                <a class="sign-in button" href="logout.php">LOG OUT</a>

            
        </div>

        
        <div class="middle-container container">
            
                <h1 class="user-name"><?php 
                echo $_SESSION['email'];
        ?></h1>
        
                
                    <!-- <p class="scnd-font-color">Lorem ipsum dolor sit amet consectetuer adipiscing</p> -->

        </div>

        <!-- RIGHT-CONTAINER -->
        <div class="right-container container">
            
                <h2 class="titular">MENU BOX</h2>
                <ul class="menu-box-menu">
                    <li>
                        <a class="menu-box-tab" href="sellers.php"><span class="icon fontawesome-envelope scnd-font-color"></span>Sellers<div class="menu-box-number"></div></a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="buyers.php"><span class="icon entypo-paper-plane scnd-font-color"></span>Buyers<div class="menu-box-number"></div></a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="delivery.php"><span class="icon entypo-calendar scnd-font-color"></span>Delivery Service<div class="menu-box-number"></div></a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="productA.php"><span class="icon entypo-cog scnd-font-color"></span>Products</a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="postA.php">
                            <sapn class="icon entypo-chart-line scnd-font-color"></sapn>Posts</a>
                    </li>
                </ul>
            
                <h2 class="titular">SIGN IN TO YOUR ACCOUNT</h2>
                <a class="sign-in button" href="#22">ADD EVENT</a>
                <a class="sign-in button" href="#22">ADD EVENT</a>
                <a class="sign-in button" href="#22">ADD POST</a>
            
            <!-- end calendar-month block -->
        </div>
        <!-- end right-container -->
    </div>
    <!-- end main-container -->
    <!-- <?php //include("../php/footer.php");?> -->
</body>

</html>