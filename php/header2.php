<button onclick="topFunction()" id="scr" title="Go to top">^</button>
<div class="container">
        <dev class="sear search">   
             <input id="searchbar" class="searchbar" placeholder="Search in...">
      <a id="press" class="press"><i class="fa fa-search" aria-hidden="true"></i></a>
        </dev>

        <div class="sear logo"> 
          <img src=" logo.png" alt="logo" width="200px" height="50px"> 
        </div>

        <div class="sear headericon"> 
        <a href="Login/login4.php">
            <i class="fa fa-user-circle" ></i></a>  
    <a href="cart.php" class="nav-item nav-link active">
           <i class="fa fa-shopping-cart"  aria-hidden="false"></i>
            
             
                    
                        
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\"><b>$count</b></span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\"><b>0</b></span>";
                        }

                        ?>
                   
                </a>
                
        </div>
 
    </div>

    <hr>    
  <header>
      <div id="nave">
           <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="servicepage.php">Services</a></li>
        <li><a href="">Category</a>
            <ul class="dropdown">
                <li><a href="product.php">Home & Living</a></li>
                <li><a href="product.php">Arts & Crafts</a></li>
                <li><a href="product.php">Tools & Home</a></li>
                <li><a href="product.php">Home Gardening</a></li>
                <li><a href="product.php">Toys & Educational</a></li>
                <li><a href="product.php">Kitchen & Dining</a></li>
            </ul>
        </li>
        <li><a href="Login/praveen.php">Sell</a></li>
        <li><a href="About Us/aboutus.php">About Us</a></li>
        <li><a href="postview/index.php">Timeline</a></li>

       
    </ul>  
      </div>
    </header>
    <hr>    
   
