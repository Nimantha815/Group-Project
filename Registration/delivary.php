<?php session_start(); ?>
<?php require_once ('ImConnect.php'); ?>

<?php 

    if(isset($_POST['submit'])){
        $C_name = $_POST['Dname'];
        $contact = $_POST['phone'];
        $email = $_POST['email'];
        $line1 = $_POST['line1'];
        $line2 = $_POST['line2'];
        $line3 = $_POST['line3'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];

        $insert = "insert into delivery values ('NULL','$C_name','$email', '$contact','$line1','$line2','$line3','$username','$password','$rpassword')";
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
                <h2>Delivery Service Registration Form</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="delivary.php" method="POST">
                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="Dname" placeholder="Company Name" />
                                </div>
                            </div>
                        </div>

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i> </span>
                            <input type="text" name="phone" placeholder="TelePhone" required>
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" required />
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
                            <input type="text" name="username" placeholder="Username" required />
                        </div>


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