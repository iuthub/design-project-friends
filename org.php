<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Flower Shopping </title>
	<link rel="stylesheet" type="text/css"  href="org.css" > 

</head>
<body style="	background-image: url(615.jpg);
				width: 100%;
    			height: 400px;
    			background-size: cover;">
	

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
  <a href="#">About</a>		
  <a href="#">Services</a>		
  <a href="#">Clients</a>		
  <a href="#">Contact</a>			
</div>
<div class="container">
	
<ul>
<li><span style="font-size:30px;  padding-left: 15px; padding-top: 10px; padding-left: 15px;" onclick="openNav()">☰ MENU</span></li>

  <li><a   padding-left: 15px; padding-top: 10px; href="#home">Home</a></li>
  <li><a href="#news">Join Us</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#about">Sign In</a></li>

</ul>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>

     <div class="container light">
     	<div class="wrapper">
     		
     		<div id="logo_right">
     		
     		</div>
    	 </div>


<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="C:\Users\SHAKHZOD\Desktop\P\images\gif1.gif" width="1000" height="480">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="C:\Users\SHAKHZOD\Desktop\P\images\gif2.gif" width="1000" height="480">
 <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="C:\Users\SHAKHZOD\Desktop\P\images\animated-rose-image-0067.gif" width="1000" height="480">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</div>


</body>
</html>