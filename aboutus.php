<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>About Us</title>
    
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

.sec h3{
	font-size: 2.5em;
	margin-bottom: 10px;
	color: #fff;
}

.sec p{
	font-size: 1.2em;
	color: #fff;

}

.whitetxt{
	color: #fff;
}

</style>



</head>

<body>
	<header> 
		<a href="#" class="logo">GORP</a>

		<ul>
			<li><a href="homepage.php">Home</a></li>
			<li><a href="submit.php">Submit Events</a></li>
			<li><a href="view.php">View Events</a></li>
			<li><a href="#" class="active">About Us</a></li>
			<li><a href="logout.php" class="active">LOG OUT</a></li>



		</ul>
	</header>
 <section>
 	<img src="images/mainmenu/stars.png" id="stars">
 	<img src="images/mainmenu/moon.png" id="moon">
 	<img src="images/mainmenu/mountains_behind.png" id="mountain_behind">
 	<h2 id="text">About Us</h2>
 	<img src="images/mainmenu/mountains_front.png" id="mountain_front">
 </section>
<div class="sec" id="sec">
<center><h2>What is Gorp About?</h2></center><br><br>
<h3>The simplified Event Publisher</h3><br>
<p>At Gorp Inc., we are solving an age-old problem – Our mission is what drives us everyday to bring communities together and improve the world we live in. That’s why we developed our free, professional-level online ticket sales system that’s incredibly easy-to-use and affordable to all.Designed by event organisers for event organisers, we’ve been in your shoes, experienced the same ticketing challenges and scaled the same ticketing peaks... basically, we get it.

 

Want to know what makes our system so convenient? Here’s what you need to know…</p>

<br><br>
<p>We are not faceless, rather we are good people, both passionate and keen to provide a valued service for the right reasons. If you want, you can talk to us, we’ve been in your shoes. We are heartfelt and we are genuine. We listen, we learn and we care. We are on your side; here to help you sell tickets.<br>

Still based in the Welsh seaside town of Penarth where it all began, TicketSource started with "a lightbulb moment" for our founder, Simon Wilsher. Simon realised he could bring his two interests in amateur theatre and computer science together and offer a solution enabling people to book tickets online. TicketSource was launched in 2004 and transformed the ticket-selling opportunities for local theatre groups.
<br>
Since then, <b>GORP</b> has grown into a fully fledged event ticketing business, handling ticket sales for almost 100s of  events each year, from sporting tournaments to literary festivals and eveything in between.

</p>

<br><br><br><br<br>
<h3>User Features</h3>
<p><ul>


			<li class="whitetxt">Free and easy ticketing</li>
			<li class="whitetxt">Make your own seating plan</li>
			<li class="whitetxt">A service provided by people not robots</li>
			<li class="whitetxt">Fast and easy..Up and running in minutes</li>
			<li class="whitetxt">Receive notification alerts of property that pair’s with your registration</li>
			<li class="whitetxt">Customers can choose their preferred seats from an onscreen layout of your venue</li>
			<li class="whitetxt">We offer print-at-home Etickets, mobile tickets and postal tickets or wristbands dispatched by us</li>
			
			<li class="whitetxt">All of our tickets come with unique QR codes, for secure entry management, eliminating the potential for duplicate tickets.</li>



		</ul>
	<br>

</p>
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