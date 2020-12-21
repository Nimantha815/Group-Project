<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <element event="some JavaScript"></element>
    <title>Delivery Service Profile</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="..\Add Post\style.css">
    <link type="text/css" rel="stylesheet" href="..\..\css\header.css">
    <link type="text/css" rel="stylesheet" href="soori_dashboard.css">
    <link type="text/css" rel="stylesheet" href="..\..\css\footer.css">
    
</head>

<body>
    <?php include('../../php/header1.php');?>
    

    <div class="content">
        <article class="left">
            <section class="list">
                <ul>
                    <h3>Shortcuts</h3>
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
                        <li><span class="value">0</span> Shipment Orders</li>
                        <li><span class="value">0</span> Preparing Orders</li>
                        <li><span class="value">12</span> Awaiting Delivery</li>
                        <li><span class="value">0</span> Disputes</li>
                    </ul>
                </div>

                <div class="items">
                    <h3>Information</h3>
                    <div class="data">
                        <p>To  Asela perera</p><br>
                        <p>NO.20, Bauddaloka Mawatha, Colombo 07</p><br>
                        <a href="detail.php"><span class="details">View details</span></a>
                    </div>
                    <hr>

                    <div class="data">
                        <p>To T.M.U. De Silva</p>
                        <p>NO.100, Walgama, Matara</p><br>
                        <a href="detail.php"><span class="details">View details</span>
                    </div>
                    <hr>

                    <div class="data">
                        <p>To M.N.K. Fernando</p>
                        <p>Horana Road, Panadura</p><br>
                        <span class="details">View details</span>
                    </div>
                    <hr>

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