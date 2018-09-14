<!DOCTYPE html>
<html>
<title>THE CREATIVE WORLD</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
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
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
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
</head><style>
body {
    font-family: "Lato", sans-serif;
}

.sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 40px;
}
.sideba {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 40px;
}

.sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
.sideba a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
.sidebar a:hover {
    color: #f1f1f1;
}
.sideba a:hover {
    color: #f1f1f1;
}

.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.sideba .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.openbtn {
    font-size: 10px;
    cursor: pointer;
    background-color: #111;
    color: red;
    padding: 10px 15px;
    border: none;
}

.openbtn:hover {
    background-color: #444;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
    .sideba {padding-top: 15px;}
    .sideba a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
  <a href="#">About</a>
  <a href="#">Register</a>
  <a href="#">Login</a>
  <a href="#">Contact</a>
  <a href="#">Track</a>
</div>
<div id="mySideba" class="sideba">
  <a href="javascript:void(0)" class="closebtn" onclick="closeN()">x</a>
  <a href="#">Notebooks</a>
  <a href="#">Diaries</a>
  <a href="#">Floor</a>
  <a href="#">Walls</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()"> HoME</button>  
   <button class="openbtn" onclick="openN()"> NEW DESIGN</button> 
</div>

<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
   
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
   
}
function openN() {
   
    document.getElementById("mySideba").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeN() {
    
    document.getElementById("mySideba").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     

     
<!--<body>
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
<div class="w3-col s2">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="n1.jpg" width="30" height="30">
    </div>
<div class="w3-col s2">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s2">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s2">
      <a href="#where" class="w3-button w3-block w3-black">WHERE</a>
    </div>
  </div>
</div>
<br>-->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="n1.jpg" width="1200" height="500">
</div>

<div class="mySlides fade">
 <img src="n2.jpg" width="1200" height="500">
 </div>

<div class="mySlides fade">
<img src="n3.jpg" width="1200" height="500">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
<!-- Menu Container -->
<style>
a:link{color:blue;text-decoration:none}
a:hover{color:blue;image-size:150%}
a:visited{color:blue;text-decoration:none}
</style>
<center><table>
<tr>
<td>
<a href="shubh.html">
<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="php_file/n1.jpg" alt="Smiley" width="300" height="300"></a>
<br>
<h4 style="color:red">Price 100<a href="shubh.html">Shop Now</a></h4>
<td></td>
<td>
<a href="shubh.html">
<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="php_file/n2.jpg" alt="Smiley" width="300" height="300"></a>
<br>
<h4 style="color:red">Price&nbsp:&nbsp100&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="shubh.html">Shop&nbspNow</a></h4>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>
<a href="shubh.html">
<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="php_file/n3.jpg" alt="Smiley" width="300" height="300"></a>
<br>
<h4 style="color:red">Price&nbsp:&nbsp100&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="shubh.html">Shop&nbspNow</a></h4>
</td>
</tr>
</table></center>
<br>
<br>
<center><table>
<tr>
<td>
<a href="shubh.html">
<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="php_file/n4.jpg" alt="Smiley" width="300" height="300"></a>
<br>
<h4 style="color:red">Price&nbsp:&nbsp100&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="shubh.html">Shop&nbspNow</a></h4>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>
<a href="shubh.html">
<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="php_file/n5.jpg" alt="Smiley" width="300" height="300"></a>
<br>
<h4 style="color:red">Price&nbsp:&nbsp100&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="shubh.html">Shop&nbspNow</a></h4>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>
<a href="shubh.html">
<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="php_file/n1.jpg" alt="Smiley" width="300" height="300"></a>
<br>
<h4 style="color:red">Price&nbsp:&nbsp100&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="shubh.html">Shop&nbspNow</a></h4>
</td>
</tr></table></center>
  </div>
</div>

<!-- Contact/Area Container 
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p>Find us at some address at some place.</p>
    <div id="googleMap" class="w3-sepia" style="width:100%;height:400px;"></div>
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>
-->

<!-- Add Google Maps 
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<script>
function bigImg(x) {
    x.style.height = "400px";
    x.style.width = "400px";
}

function normalImg(x) {
    x.style.height = "300px";
    x.style.width = "300px";
}
</script>

<br>
<br>
<br>
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div></header>


</body>
</html>