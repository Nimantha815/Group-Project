<?php session_start(); ?>
<?php require_once ('ImConnect.php'); ?>

<?php 

    if(isset($_POST['submit'])){
        $C_name = $_POST['Cname'];
        $f_name = $_POST['fname'];
        $l_name = $_POST['lname'];
        $tel_no = $_POST['phone'];
        $gender = $_POST['radiogroup1'];
        $email = $_POST['email'];
        $line1 = $_POST['line1'];
        $line2 = $_POST['line2'];
        $line3 = $_POST['line3'];
        $p_code = $_POST['postal'];
        $province = $_POST['province'];
        $password = sha1($_POST['password']);
        $rpassword = sha1($_POST['rpassword']);

        $insert = "insert into sellers values ('NULL','$C_name','$password','$rpassword','$f_name','$l_name','$email','$gender','$province', '$line1','$line2','$line3','$p_code','$tel_no')";
        if(mysqli_query($connection,$insert)){
            echo "Successfull";
        }
        else{
            echo "UnSuccessfull";
        }


    }



?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Registration
        <!--page title-->
    </title>
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

    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Seller Registration Form</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="seller.php" method="POST">
                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="Cname" placeholder="Seller/Company Name" />
                                </div>
                            </div>
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="address" name="fname" placeholder="firstname" required />
                        </div>
                         <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="address" name="lname" placeholder="lastname" required />
                        </div>


                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i> </span>
                            <input type="text" name="phone" placeholder="TelePhone" required>
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="input_field radio_option">
                            <input type="radio" name="radiogroup1" id="rd1" value="m">
                            <label for="rd1">Male</label>
                            <input type="radio" name="radiogroup1" id="rd2" value="f">
                            <label for="rd2">Female</label>
                        </div>


                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="address" name="line1" placeholder="address line 1" required />
                        </div>
                         <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="address" name="line2" placeholder="address line 2" required />
                        </div>
                         <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="address" name="line3" placeholder="address line 3" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="address" name="postal" placeholder="postal code" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="address" name="province" placeholder="province" required />
                        </div>

                        <!-- <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="text" name="username" placeholder="Username" required />
                        </div> -->


                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="rpassword" placeholder="Re-type Password" required />
                        </div>





                        <div class="input_field checkbox_option">
                            <input type="checkbox" id="cb1">
                            <label for="cb1">I agree with terms and conditions</label>
                        </div>

                        <input class="button" name="submit" type="submit" value="Register" />
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>