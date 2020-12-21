<?php session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');

$database = new CreateDb("pdoduct", "product");

 ?>
<!DOCTYPE html>

<html>

<head>
    <link type="text/css" rel="stylesheet" href="profileS.css" />
     <link rel="stylesheet" href="css/product.css">
     
    <!--  <link rel="stylesheet" href="css/indexs.css"> -->
    <title>Seller Profile</title>
    

</head>

<body>

    <div class="heads">
        <div class="coverpadx">
        <img src="https://cdn.thedesigninspiration.com/wp-content/uploads/2012/06/Facebook-Covers-004.jpg" width="1300px" height="400px" />
    </div>
    <div class="profilepic"></div>

    <div class="profilepicx">
        <img src="http://3.bp.blogspot.com/-CrWqZorCP2Y/UWrcGU_f_8I/AAAAAAAAClI/unXrkG-AEfs/s1600/facebook-profile-pictures36.jpg" height="140px" />
    </div>

    <div class="username">Malmi Arts </div>

    
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
                    button1($row['p_name'], $row['p_price'], $row['p_path1'],$row['p_des'], $row['p_id']);
                }
            ?>
       
    </div>
</div>
</body>

</html>