<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("newdb", "product");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              //echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/header.css" />
<link rel="stylesheet" href="css/footer.css" />
         <!-- <link rel="stylesheet" href="css/cart.css" />-->
   
    
   <link rel="stylesheet" href="css/stylecart.css">
  <!--<link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/indexs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-light">

<?php
 require_once ('php/header1.php');
    //require_once ('php/header.php');

?>


   
         <!--   <div class="shopping-cart">
                <h6>My Cart</h6>-->
                
                <div class="wrap cf">
 
  <div class="heading cf">
    <h1>My Cart</h1>
    <a href="#" class="continue">Continue Shopping</a>
  </div>
</div>


        <section class="container content-section">
            
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
            </div>
            <div class="cart-items">
            </div>
            </section>
            <div class="cart-items">
                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['p_id'] == $id){
                                    cartElement1($row['p_path1'], $row['p_name'],$row['p_price'], $row['p_id']);
                                    $total = $total + (int)$row['p_price'];
                                }
                            }
                        }
                        
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>
                </div>
            <div class="cart-total">
                <section class="container content-section">
                    <div class="wrap cf">
        <div class="subtotal cf">
                <strong class="cart-total-title">PRICE DETAILS</strong>
                <hr>
                
                    
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                  
                    
                        <h6>RS<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>RS<?php
                            echo  $total;
                            ?></h6>
                   </section>
            </div>
            <div class="wrap cf">
 
  <div class="heading cf">
   
    <a href="Checkout Form/Paymentform.php" class="continue">Purchase Items</a>
  </div>
</div>
           

        </div>
    </div>
</div>


<?php require_once ('php/footer.php');?>
</body>
</html>
