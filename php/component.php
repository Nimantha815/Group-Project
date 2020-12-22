<?php
#  <a class=\"add-to-cart\" name=\"add\" type=\"submit\" >  Add to Cart</a>
function button1($pname,$pprice,$pimg,$pdec,$productid) {
           $elemet="
<form action=\"index.php\" method=\"post\">

                <a href='view.php?id=$productid' name=\"view\"><figure class=\"snip1268\">
  <div class=\"image\"> 
     
    
    <img src=\"add/$pimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
    
   
  <button type=\"submit\" class=\"add-to-cart\" name=\"add\">Add to Cart </button>
  
  </div>
  <figcaption>
    
     <h2 class=\"card-title\">$pname</h2>

    
    <p>$pdec</p>
    <div class=\"price\">RS $pprice.00</div>
 <input type='hidden' name='product_id' value='$productid'>
  </figcaption>
</figure></a>
  </form>
                
           ";
            echo $elemet; 
        
        } 

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                   
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                           
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                              
                                <h5 class=\"pt-2\">$$productprice</h5>
                                
                                <button type=\"submit\" class=\"btn btn-danger\" name=\"remove\">Remove</button>
                            </div>
                            </div>


                </form>
    
    ";
    echo  $element;
}

function cartElement1($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                   <section class=\"container content-section\">
                                <div class=\"cart-item cart-column\">
            <img class=\"cart-item-image\" src=add/$productimg width=\"100\" height=\"100\">
            <span class=\"cart-item-title\">$productname</span>
        </div>
        <span class=\"cart-price cart-column\">$productprice</span>
        <div class=\"cart-quantity cart-column\">
            <input class=\"cart-quantity-input\" type=\"number\" value=\"1\">
            <button type=\"submit\" class=\"btn btn-danger\" name=\"remove\">Remove</button>
        </div>
    </div>
              </section>
                     <hr>       
                </form>

    
    ";
    echo  $element;
}




?>