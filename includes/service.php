<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Josefin Sans', sans-serif;
}

.info{
  background-size: cover;
  margin-bottom: 40px;
}

.inn {
  width: 100%;
  max-width: 1200px;
  margin: auto;
 
  overflow: hidden;
}



.serv {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.sbox {
  max-width: 25%;
  padding: 20px;
  text-align: center;
  /*color: #ddd;*/
  cursor: pointer;
}

.service-icon {
  display: inline-block;
  width: 70px;
  height: 70px;
  
  margin-bottom: 30px;
  margin-top: 16px;
}

.sicon img{
  width: 65px;
  height: 65px;
}

.sicon i {
  line-height: 70px;
  transform: rotate(-45deg);
  font-size: 26px;
}


.stitle {
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 10px;
.description {
  font-size: 14px;
}

@media screen and (max-width:960px) {
  .sbox {
    max-width: 45%;
  }
}

@media screen and (max-width:768px) {
  .sbox {
    max-width: 50%;
  }
}

@media screen and (max-width:480px) {
  .sbox {
    max-width: 100%;
  }
}
</style>
<body>
  <div class='info'>
  <div class='inn'>
   <!--  <h1 class='section-title'>Information</h1> -->
    <div class='border'></div>
      <div class='serv'>
        
        <div class='sbox'>
          <div class='sicon'>
            <!-- <i class='fa fa-paint-brush'></i> -->
            <img src="free.svg" alt="">
          </div>
          <div class='stitle'>secure payments</div>
          <div class='description'>
            Lorem ipsum dolor sit amet, consectetur adipiscing              elit, sed do eiusmod tempor incididunt ut labore              et dolore magna aliqua
          </div>
        </div>
        
        <div class='sbox'>
          <div class='sicon'>
            <!-- <i class='fa fa-code'></i> -->
            <img src="truck.svg" alt="">

          </div>
          <div class='stitle'>Track your package</div>
          <div class='description'>
            Lorem ipsum dolor sit amet, consectetur adipiscing              elit, sed do eiusmod tempor incididunt ut labore              et dolore magna aliqua
          </div>
        </div>
        
        <div class='sbox'>
          <div class='sicon'>
            <!-- <i class='fa fa-cut'></i> -->
            <img src="sale.svg" alt="">
          </div>
          <div class='stitle'> Estimated import Fees </div>
          <div class='description'>
            Lorem ipsum dolor sit amet, consectetur adipiscing              elit, sed do eiusmod tempor incididunt ut labore              et dolore magna aliqua
          </div>
        </div>
        
        <div class='sbox'>
          <div class='sicon'>
            <!-- <i class='fa fa-object-ungroup'></i> -->
            <img src="time.svg" alt="">
          </div>
          <div class='stitle'>24/7 customer service</div>
          <div class='description'>
            Lorem ipsum dolor sit amet, consectetur adipiscing              elit, sed do eiusmod tempor incididunt ut labore              et dolore magna aliqua
          </div>
        </div>
        
      </div>
    </div>
  </div>

</body>
</html>