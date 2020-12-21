<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('php/component.php');


// create instance of Createdb class
$database = new CreateDb("helakam", "Product");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    
 <!--   <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../css/product.css">
     
      <link rel="stylesheet" href="../css/indexs.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php require_once ("../includes/header1.php"); ?>
<?php //require_once ("php/header.php"); ?>


<div class="product">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    buttonx($row['product_name'], $row['product_price'], $row['product_image'],$row['p_des'], $row['id']);
                }
            ?>
       
</div>






</body>
</html>
