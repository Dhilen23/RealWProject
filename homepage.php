<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Homepage</title>
    
<style>
	
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
	scroll-behavior: smooth;
}

body{
	min-height: 100vh;
	background: linear-gradient(#2b1055,#7597de);
	overflow-x: hidden;
}

header{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	padding: 30px 100px;
	display: flex;
	justify-content: space-between;
	align-items: center;
z-index: 10000;
}

header .logo{
	color:  #fff;
	font-weight: 700;
	text-decoration: none;
	font-size: 2em;
	text-transform: uppercase;
	letter-spacing:2px ;
}

header ul{
	display: flex;
	justify-content: center;
	align-items: center;

} 

header ul li{
	list-style: none;
	margin-left: 20px;
}

header ul li a{
	text-decoration:none;
	padding: 6px 15px;
	color:  #fff;
   border-radius: 20px;
}

header ul li a:hover,
header ul li a.active
{
	background:  #fff;
	color: #2b1055;


}

section{
	position:  relative;
	width: 100%;
	height: 100vh;
	padding: 100px;
display: flex;
justify-content: center;
align-items: center;
overflow: hidden;
}

section::before{
	content: '';
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 100px;
	background: linear-gradient(to top, #1c0522, transparent);
	z-index: 1000;

}

section img{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
	pointer-events: none;

}

section img#moon{
	mix-blend-mode:screen ;
}

section img#mountain_front{
	z-index: 10;

}


#text{
	position: absolute;
	color: #fff;
	right:-265px ;
	white-space: nowrap;
	font-size: 7.5vw;
    z-index: 9;

}

.sec{
	position: relative;
	background: #1c0522;
	padding: 100px;

}

.sec h2{
	font-size: 3.5em;
	margin-bottom: 10px;
	color:  #fff;

}

.sec p{
	font-size: 1.2em;
	color: #fff;

}


/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.0s;
  animation-name: fade;
  animation-duration: 1.0s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


</style>



</head>

<body>
	<header> 
		<a href="#" class="logo">GORP</a>

		<ul>
			<li><a href="#" class="active">Home</a></li>
			<li><a href="submit.php">Submit Events</a></li>
			<li><a href="view.php">View Events</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="logout.php" class="active">LOG OUT</a></li>



		</ul>
	</header>
 <section>
 	<img src="images/mainmenu/stars.png" id="stars">
 	<img src="images/mainmenu/moon.png" id="moon">
 	<img src="images/mainmenu/mountains_behind.png" id="mountain_behind">
 	<h2 id="text">Event<br>Sneaks</h2>
 	<img src="images/mainmenu/mountains_front.png" id="mountain_front">
 </section>
<div class="sec" id="sec">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/mainmenu/sconafa.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/mainmenu/homedec.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/mainmenu/art.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/mainmenu/food.jpg" style="width:100%">
  <div class="text">Caption Four</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>
<br><br><br>	
<h2>Gorp's Event Previews</h2>
<p>Founded in 2011, GORP was created out of a love for dynamic events managements and ticket bookings. Our goal is to provide unparalleled event services, accurate informations about events and give the best ticket prices for our customers .<br><br><br>Why Gorp? Because with us, there are infinite possibilities. Big or small, we are committed to creating one-of-a-kind events that your guests will remember for years to come. We work with the best vendors in the SPICE EVENTS to provide planning and design services at the venue of your dreams, and we also offer full services at few live concerts, food exhibihitons, and The Homedec Exhibitions throughout Malaysia and has exclusive ticket coupons and discounts for our customers.</p><br><br><br><br><br><br><br><br>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<br><br><hr><br><br><br><br>

<p><img src="images/mainmenu/image02.png" alt="" width="200px" height="200px" align="left" /><b><br>Ease of Use</b><br><br>Registering an event is so  simple and hassle free<br> for event managers.And ticket buyers will be given<br> discount prices and exact informations about the upcoming<br> events.Input the required information and let our system go to work.</p>
<br><br><br><br><br><br><br><br>

<p align="right"><img src="images/mainmenu/image03.png" alt="" width="200px" height="200px" align="right" /><b><br>Intelligent Promotion</b><br><br>Our GORP event promoting system intelligently<br>finds and locates the best social media platforms <br>to promote the registered events by the event managers and try<br> to sell the tickets to customers at the best price.</p>
<br><br><br><br><br><br><br><br>


<p><img src="images/mainmenu/image04.png" alt="" width="200px" height="200px" align="left" /><b><br>Out Reach</b><br><br>Our GORP With our multi-level platform,<br> your event registration or submission will <br>automatically be sent to local businesses and individuals.

</p>
<br><br><br><br><br><br><br><br><br>
<center><h2>Promote Your Event Now!</h2></center>



</div>



<script>
	let stars = document.getElementById('stars');
	let moon = document.getElementById('moon');
	let mountain_behind = document.getElementById('mountain_behind');
	let mountain_front = document.getElementById('mountain_front');
	let text = document.getElementById('text');
	let header = document.querySelector('header');

	window.addEventListener('scroll', function(){
		let value = window.scrollY;
	    stars.style.left = value * 0.25 +'px';
	    moon.style.top = value * 1.05 +'px';
	    mountain_behind.style.top = value * 0.5 +'px';
	    mountain_front.style.top = value * 0 +'px';
	    text.style.marginRight =  value* 4 +'px';
	    text.style.marginTop = value * 1.5 +'px';
	    header.style.top = value * 0.5 + 'px';


	})
</script>


</body>

</html>