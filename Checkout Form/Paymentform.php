<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Style.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>
<body>
<div class="main">
<h2 class="sign" align="center">Card Details Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state">
              </div>
              <div class="col-50">
                <label for="zip">Postel Code</label>
                <input type="text" id="zip" name="zip">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear">
              </div>
              <div class="col-50">
                <label for="cvv">CCV</label>
                <input type="text" id="cvv" name="cvv">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="submit">
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>
