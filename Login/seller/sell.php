<?php session_start();

require_once ('../sellers/php/CreateDb.php');
require_once ('../sellers/php/component.php');

$database = new CreateDb("pdoduct", "product");

 ?>
<!DOCTYPE html>

<html>

<head>
    <link type="text/css" rel="stylesheet" href="profileS1.css" />
     <link rel="stylesheet" href="product.css">
     
    <!--  <link rel="stylesheet" href="css/indexs.css"> -->
    <title>Seller Profile</title>
    

</head>

<body>

    <div class="heads">
        <div class="coverpadx">
        <img src="https://image.shutterstock.com/image-photo/typical-souvenirs-handicrafts-bali-famous-260nw-1513777076.jpg" width="1300px" height="400px" />
    </div>
    <div class="profilepic"></div>

    <div class="profilepicx">
        <img src="http://3.bp.blogspot.com/-CrWqZorCP2Y/UWrcGU_f_8I/AAAAAAAAClI/unXrkG-AEfs/s1600/facebook-profile-pictures36.jpg" height="140px" />
    </div>

    <div class="username"><b>Malmi arts</b> </div>

    <div class="boxbtn">
        <div class="box11"><a href="../../add/addproduct.php">Add Product</a></div>

    <div class="box11"><a href="sellerE.php">Edit Profile</div>

    <div class="box11"><a href="sellerE.php">Add Post</div>

    <div class="box11"><a href="logouts.php">Log Out</div>
    </div>
    </div>
    


    <div class="aboutpad">
        <ul>
            <li>
                Works at Not Yet Working!! Am Still Studying!!</i>
            </li>

            <li>
                <i> Ginigathena Central College</i>
            </li>

            <li>
                <i> in Colombo, Sri Lanka</i>
            </li>

            <li>
                <i> From Colombo, Sri Lanka</i>
            </li>

            <li>
                <i> Exsample@gmail.com</i>
            </li>

            <li>
                <i> +9471560755</i>
            </li>
        </ul>
    </div>

    <div class="container">
    
    <div class="product">
    
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    button3($row['p_name'], $row['p_price'], $row['p_path1'],$row['p_des'], $row['p_id']);
                }
            ?>
       
    </div>
</div>
</body>

</html>