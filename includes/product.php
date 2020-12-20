<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('php/component.php');


// create instance of Createdb class
$database = new CreateDb("newdb", "product");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "p_id");

        if(in_array($_POST['p_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'p_id' => $_POST['p_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
ini_set('session.gc_maxlifetime', 30*24*60*60);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    
 <!--   <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css\product.css">
     
      <link rel="stylesheet" href="css\indexs.css">

</head>
<body>

<?php require_once ("../php/header1.php"); ?>
<?php //require_once ("php/header.php"); ?>


<div class="product">
            <?php

                $result = $database->getData();
                $query = "SELECT FROM product where p_cat = 'Home & Living'";
                while ($row = mysqli_fetch_assoc($query)){
                    button1($row['p_name'], $row['p_price'], $row['p_path1'],$row['p_des'], $row['p_id']);
                }
            ?>
       
</div>






</body>
</html>
