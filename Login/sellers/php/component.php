<?php
#  <a class=\"add-to-cart\" name=\"add\" type=\"submit\" >  Add to Cart</a>
function button1($pname,$pprice,$pimg,$pdec,$productid) {
           $elemet="
<form action=\"index.php\" method=\"post\">

                <a href='view.php?id=$productid' name=\"view\"><figure class=\"snip1268\">

  <div class=\"image\"> 
     
    
    <img src=\"../../../add/$pimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
    
   
  <button type=\"submit\" class=\"add-to-cart\" name=\"add\">Add to Cart </button>
  
  </div>
  <figcaption>
    
     <h2 class=\"card-title\">$pname</h2>

    
    <p>$pdec</p>
    <div class=\"price\"> RS $pprice</div>
 <input type='hidden' name='product_id' value='$productid'>
  </figcaption>
</figure></a>
  </form>
                
           ";
            echo $elemet; 
        
        }

function button3($pname,$pprice,$pimg,$pdec,$productid) {
           $elemet="
<form action=\"index.php\" method=\"post\">

                <a href='view.php?id=$productid' name=\"view\"><figure class=\"snip1268\">
  <div class=\"image\"> 
     
    
    <img src=\"../../../add/$pimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
    
   
  
  </div>
  <figcaption>
    <button type=\"submitEdit\" class=\"editBtn\" name=\"add\">Update </button>
  <button type=\"submitDelete\" class=\"deleteBtn\" name=\"add\">Delete </button>
     <h2 class=\"card-title\">$pname</h2>

    
    <p>$pdec</p>
    <div class=\"price\">RS $pprice</div>
 <input type='hidden' name='product_id' value='$productid'>
  </figcaption>
</figure></a>

  </form>
                
           ";
            echo $elemet; 
        
        }


        function buttonx($pname,$pprice,$pimg,$pdec,$productid) {
           $elemet="
<form action=\"../include/product.php\" method=\"post\">

                <a href='../view.php?id=$productid' name=\"view\"><figure class=\"snip1268\">
  <div class=\"image\"> 
     
    
    <img src=\"$pimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
    
   
  <button type=\"submit\" class=\"add-to-cart\" name=\"add\">Add to Cart </button>
  
  </div>
  <figcaption>
    
     <h2 class=\"card-title\">$pname</h2>

    
    <p>$pdec</p>
    <div class=\"price\">$$pprice</div>
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
            <img class=\"cart-item-image\" src=$productimg width=\"100\" height=\"100\">
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


  
function button2($pname,$pprice,$pimg,$pdec,$productid) {
           $elemet="
<form action=\"view.php\" method=\"post\">                    
  <div class=\"container\">
    <div class=\"gridProduct\">
        <div class=\"product-gallery\">
          <div class=\"product-image\">
            <img class=\"active\" src=\"$pimg \">
          </div>
          <ul class=\"image-list\">
           
          </ul>
        </div>
      <div class=\"details\">
        <div class=\"seller\">
          <a><p><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i> P.M Sadun</p></a>
        </div>
        <h1>$pdec
</h1>
        <h2>\"RS $pprice\"</h2>
         

  <div class=\"row\">
      <div class=\"star-rating\">
        <span class=\"fa fa-star-o\" data-rating=\"1\"></span>
        <span class=\"fa fa-star-o\" data-rating=\"2\"></span>
        <span class=\"fa fa-star-o\" data-rating=\"3\"></span>
        <span class=\"fa fa-star-o\" data-rating=\"4\"></span>
        <span class=\"fa fa-star-o\" data-rating=\"5\"></span>
        <input type=\"hidden\" name=\"whatever3\" class=\"rating-value\" value=\"4.1\">
      </div>
  </div>
        <div class=\"description\">
          <p></p>
          <p>$pdec
</p>
        </div>
        <button class=\"add-to-cart\">Add To Cart</button>
        
      </div>

    </div>
    
  </div>

      
           ";
            echo $elemet; 
        
        }


?>