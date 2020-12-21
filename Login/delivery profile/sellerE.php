<!DOCTYPE html>
<?php 


require("ImConnect.php");
if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    
    $email = $_POST['email'];
    $p_code = $_POST['p_code'];
    $a_line_1 = $_POST['a_line_1'];
    $a_line_2 = $_POST['a_line_2'];
    $a_line_3 = $_POST['a_line_3'];
    $province = $_POST['province'];

    $query = "UPDATE sellers SET  email='$email', p_code='$p_code',a_line_1='$a_line_1',a_line_2='$a_line_2',a_line_3='$a_line_3',province='$province' WHERE s_id='$id' ";

    $query_run = mysqli_query($connection,$query);
echo "print";
    if($query_run){
        echo  '<script type="text/javascript">alert "Data Updated"</script>';
        $_SESSION["shopname"];
        header("Location:profile.php");

    }
    else{
        echo '<script type="text/javascript">alert "Data Not Updated"</script>';
    }
}

?>
<html>

<head>
    <title>Edit Profile</title>

    <meta charset="utf-8">
    <meta name="keywords" content="Handloom,Handicrafts">
    <meta name="description" content="Online shopping platform">
    <meta http-equiv="refresh" content="300">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="01.css">
</head>

<body>

    <h1>
        <p title="Registration Details"><b>USER DETAILS</b></p>
    </h1>
    <hr>

    <div class="form_wrapper" method="POST" >
        <div class="form_container">
            <div class="title_container">
                 <h2><?php
        session_start();
        echo $_SESSION["shopname"];
       
        
        ?></h2>
         
<div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                 <h2>EDIT DETAILS</h2>
         <div class="row clearfix">
                <div class="">
                    <form action=sellerE.php method="post">
                        <div class="row clearfix">
                        
           
                        <div class="row clearfix">
                            <div class="col_half">

       
        <?php require("ImConnect.php") ?>
        <?php 
       
         $name = $_SESSION["shopname"];
         
            $sql = "SELECT * FROM sellers WHERE shop_name= '$name' LIMIT 1";

            $result = mysqli_query($connection,$sql);
            $row=mysqli_fetch_array($result);
            
         

             
        ?>

                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>" placeholder="id">
                                </div> 



                       <!--  <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i> </span>
                            <input type="text" id="phone01" name="phone" value="<?php// echo $row['tel_no'];?>" placeholder="TelePhone"  required>
                        </div>
                         -->

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" value="<?php echo $row['email'];?>" placeholder="Email" required />
                        </div>

                       <!--  <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="text" name="address" value="<?php?>" placeholder="address" required />
                        </div> -->

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="text" name="province" value="<?php echo $row['province'];?>"placeholder="Username" required />
                        </div>


                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="text" name="a_line_1" value="<?php echo $row['a_line_1'];?>" placeholder="a_line_1" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="text" name="a_line_2" value="<?php echo $row['a_line_2'];?>" placeholder="a_line_2" required />
                        </div>

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="text" name="a_line_3" value="<?php echo $row['a_line_3'];?>" placeholder="a_line_3" required />
                        </div>

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="text" name="p_code" value="<?php echo $row['p_code'];?>" placeholder="Re-type Password" required />
                        </div>
                          <button class="button" type="submit" name="update" >update</button>
         
   
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

