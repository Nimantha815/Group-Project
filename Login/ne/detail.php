<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <element event="some JavaScript"></element>
    <title>Buyer Profile</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="..\Add Post\style.css">
    <link type="text/css" rel="stylesheet" href="..\..\css\header.css">
    <link type="text/css" rel="stylesheet" href="soori_dashboard.css">
    <link type="text/css" rel="stylesheet" href="..\css\footer.css">
    
</head>

<body>
    <?php include('../../php/header1.php');?>

    <div class="content">
        <article class="left">
            <section class="list">
                <ul>
                    <h3>Shortcuts</h3>
                    <li><a href="#">My Orders</a></li>
                    <li><a href="#">Manage Feedback</a></li>
                    <li><a href="../Add Post/index.php">Make Post</a></li>
                    <li><a href="logoutb.php">Log Out</a></li>
                    <li><a href="changep.php">Change Password</a></li>
                    <li><a href="buyerE.php">Edit Profile</a></li>
                </ul>
            </section>

        </article>

        <article class="right">
            <header>
                <img src="" width="70px" height="70px">
                <div class="account">
                    <h2>
                        <?php
        session_start();
        echo $_SESSION["username"];
        ?>
                    </h2>
                    
                </div>

                <div class="summary">
                    <ul class="text-center">
                        <li><span class="value">29</span> All Orders</li>
                        <li><span class="value">0</span> Awaiting Payment</li>
                        <li><span class="value">0</span> Awaiting Shipment</li>
                        <li><span class="value">12</span> Awaiting delivery</li>
                        <li><span class="value">4</span> Awaiting Feedback</li>
                        <li><span class="value">0</span> Disputes</li>
                    </ul>
                </div>

                <div class="items">
                    <h3>Logistics Information</h3>
                    <div class="data">
                        <img src="https://image.ibb.co/j7Q6Wk/nike.jpg" />
                        <p>8 Received by line-haul (2017-06-25 16:38 GMT+7)</p>
                        <span class="details">View details</span>
                    </div>

                    <div class="data">
                        <img class="fl-left" src="https://image.ibb.co/m7wPHQ/watch.jpg" />
                        <p>8 Received by line-haul (2017-06-25 16:38 GMT+7)</p>
                        <span class="details">View details</span>
                    </div>
                    <div class="data">
                        <img class="fl-left" src="https://image.ibb.co/iT40rk/iphone.jpg" />
                        <p>8 Received by line-haul (2017-06-25 16:38 GMT+7)</p>
                        <span class="details">View details</span>
                    </div>
                    <div class="showmore text-center">
                        <a href="#">Show more<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    </div>
                </div>
            </header>
        </article>
    </div>

    <div class="float-icons">
        <span title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></span>
        <span title="Delete"><i class="fa fa-times" aria-hidden="true"></i></span>
    </div>

</body>
<!-- <?php //include('../php/footer.php');?> -->
</html>