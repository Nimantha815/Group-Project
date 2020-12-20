<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<style>
.carosel {
  min-height: 500px;
  width: 100%;
  padding: 20px 0 20px;
  background: #fff;
  color: #014a6a;
  text-align: center;
  position: relative;
}

.carosel__image-wrapper {
  position: relative;
  width: 100%;
  height: 400px;
  margin: 20px auto;
  box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
  overflow-x: hidden;
}
.carosel__image-wrapper img {
 
  width: 100%;
  height: 400px;
  /*min-width: 320px;*/
  object-fit: cover;
  /*display: inline-block;*/
}
.arrow-left {
  position: absolute;
  border-bottom: 3px solid #014a6a;
  border-left: 3px solid #014a6a;
  height: 30px;
  width: 30px;
  left: 30px;
  top: 50%;
  transform: translateY(-150%) rotate(45deg);
  cursor: pointer;
  z-index: 20;
}

.arrow-right {
  position: absolute;
  border-top: 3px solid #014a6a;
  border-right: 3px solid #014a6a;
  height: 30px;
  width: 30px;
  right: 30px;
  top: 50%;
  transform: translateY(-150%) rotate(45deg);
  cursor: pointer;
  z-index: 20;
}

.carosel__image-wrapper-image {
  height: auto;
  width: 400px;
  min-width: 320px;
  transition: all .8s;
  display: inline-block;
}

.slide-right {
  animation: right;
  animation-duration: .7s;
}

@keyframes right {
  from {
    left: 100px;
    opacity: .4;
  }
  to{
    left: 0;
    opacity: 1;
  }
}
</style>
<body>
	 <section class="carosel">
    <div class="arrow-left" onclick="plusSlides(1)"></div>
    <div class="carosel__image-wrapper">
      <img src="includes/ws_Carrot_Hands_Pencil_Drawing_852x480.jpg" alt="" class="carosel__image-wrapper-image slide-right">
      <img src="includes/handloom_banner_daca48fc-b79e-442b-8d97-8a02e58dba08_1200x1200.webp" alt="" class="carosel__image-wrapper-image slide-right">
      <img src="includes/GDG-banner-tools-PLAIN-RT-OPT.jpg" alt="" class="carosel__image-wrapper-image slide-right">
       <img src="includes/1548406431_1522157452-main-banner-1-1902x610.jpg" alt="" class="carosel__image-wrapper-image slide-right">
    </div>
    <div class="arrow-right" onclick="plusSlides(1)"></div>
  </section>

  <script type="text/javascript">
  	

let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.querySelectorAll(".carosel__image-wrapper-image");
  
  if(n > slides.length) {
    slideIndex = 1;
  }
  
  for (i=0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slides[slideIndex - 1].style.display = "block";
}


  </script>
</body>
</html>