<?php
include("login.php");
?>
<!DOCTYPE html>
<html>
<title>Healthkraft-Better Starts Here</title>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="styling1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}

body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
}
body {margin:0;height:2000px;}

.navbar {
    overflow: hidden;
    background-color:black;
	font: 400 15px/1.8 "Lato", sans-serif;
	}

.navbar a {
    float: right;
    font-size: 18px;
    color: white;
    text-align: center;
    padding: 14px 10px;
    text-decoration: none;

}
.login {
    overflow: hidden;
    background-color: black;
	font-size=10px;

}

.login a {
    float: left;
    font-size: 18px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}



.logo {
    overflow: hidden;
    background-color: black;
	font-size=10px;

}

.logo a {
    float: left;
    font-size: 50px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 18px;    
    border: none;
    outline: none;
    color: white;
    padding: 15px 14px;
    background-color: inherit;
    margin: 0;
}

.navbar a:hover,.dropdown:hover .dropbtn {
    background-color:black;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 180px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #FF3333;
}

.dropdown:hover .dropdown-content {
    display: block;
}

* {box-sizing: border-box}
body {margin:0}
.mySlides {display: none}
img {vertical-align:middle}

/* Slideshow container */
.slideshow-container {
  max-width: 1900px;
  position: relative;
  margin: auto;
  background-size: 300px 100px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
   background-size: 300px 100px;
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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
  .prev, .next,.text {font-size: 11px}
}



</style>
</head>
<body>

<div class="logo">
  <a href="#logo" style="font-family: Book Antiqua">Healthkraft</a>
  <p></p>
  <h1></h1>
  <a href="#logo" style="font-family: Garamond; font-style: italic; font-size:25px">Better starts here.</a>
  
  </div>
<div class="navbar">
<a href="signin.php" style="color: white" name="signin">Sign In</a>
	<?php if(isset($_SESSION['success'])): ?>
		<a id="a" href="signin.php?logout='1'" style="color: white" name="logout">Logout</a>
	<!-- <?php endif ?>
	<?php if(isset($_SESSION['username'])): ?> -->
	
		<p style="float: left; padding-left: 5px;margin-top: 5px; margin-bottom: 10px;  font-size:25px; color:white; font-family: Book Antiqua">Welcome <?php echo $_SESSION['username']; ?></p>
	<?php endif; ?>
	
	<a href="About us.html">About us</a>
	<a href="fitness.html">Fitness</a>
	<a href="image.html">Food Essentials</a>
 <div class="dropdown">
    <button class="dropbtn">Healthy Recipes</button>
    <div class="dropdown-content">
	<a href="salads.html">Salad</a>
      <a href="soups.html">Soups</a>
      <a href="smoothies.html">Smoothies</a>
	</div>
</div>
<a href="bmifinal.php">BMI Calculators </a>
 <div class="dropdown">
    <button class="dropbtn">Healthy Diets</button>
    <div class="dropdown-content">
	  <a href="atkins.html">Atkins</a>
      <a href="ketogenic.html">Ketogenic</a>
      <a href="vegan.html">Vegan</a>
	  <a href="vegetarian.html">Vegetarian</a>
	  <a href="raw.html">Raw</a>
	  <a href="zone.html">Zone</a>
	</div>

</div>
<a href="#home">Home</a>
	
</div>
	
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1/6</div>
  <img src="1.jpg" style="width:100%" height="500" width="10">
</div>

<div class="mySlides fade">
  <div class="numbertext">2/6</div>
  <img src="2.jpg" style="width:100%" height="500" width="10">
</div>

<div class="mySlides fade">
  <div class="numbertext">3/6</div>
  <img src="3.jpg" style="width:100%" height="500" width="10">
</div>

<div class="mySlides fade">
  <div class="numbertext"> 4/6</div>
  <img src="0check.jpg" style="width:100%" height="500" width="10">
</div>
<div class="mySlides fade">
  <div class="numbertext"> 5/6</div>
  <img src="5.jpg" style="width:100%" height="500" width="10">
</div>

<div class="mySlides fade">
  <div class="numbertext"> 6/6</div>
  <img src="5check.jpg" style="width:100%" height="500" width="10">
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
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

 
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="lifestyle.jpeg" alt="Sandwich" style="width:100%">
      <h3><a href="https://thriveglobal.com/stories/7-helpful-tips-for-a-healthy-lifestyle-in-2018/">How To Improve Your Lifestyle in 2018</a></h3>
      <p>Just some tips, improve your lifestyle.</p>
    </div>
    <div class="w3-quarter">
      <img src="mentalhealth.jpeg" alt="Steak" style="width:100%">
      <h3><a href="https://thriveglobal.com/stories/7-helpful-tips-for-a-healthy-lifestyle-in-2018/">Ways to Improve Your Mental Health Today</a></h3>
      <p>Once again, some tips to help you deal with everyday stress, anxiety etc.</p>
    </div>
    <div class="w3-quarter">
      <img src="run.jpg" alt="Cherries" style="width:100%">
      <h3><a href="https://thriveglobal.com/stories/7-helpful-tips-for-a-healthy-lifestyle-in-2018/">Benefits of Running</a></h3>
      <p>Tips on how to begin running and nutrition for the same.</p>
      <p>What else?</p>
    </div>
    <div class="w3-quarter">
      <img src="cardiovascular.jpeg" alt="Pasta and Wine" style="width:100%">
      <h3><a href="https://thriveglobal.com/stories/7-helpful-tips-for-a-healthy-lifestyle-in-2018/">CardioVascular Health</a></h3>
      <p>how to keep your heart healthy and happy.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="skin.jpg" alt="Popsicle" style="width:100%">
      <h3><a href="https://thriveglobal.com/stories/7-helpful-tips-for-a-healthy-lifestyle-in-2018/">5 Ways To Improve Your Skin Through Your Diet</a> </h3>
      <p>tips to improve ypur skin and look younger.</p>
    </div>
    <div class="w3-quarter">
      <img src="cancer.jpg" alt="Salmon" style="width:100%">
      <h3><a href="https://thriveglobal.com/stories/7-helpful-tips-for-a-healthy-lifestyle-in-2018/">Ways To Prevent Cancer In 2018</a></h3>
      <p>foods to avoid and include in your diet along with some workouts.</p>
    </div>
    <div class="w3-quarter">
      <img src="aromatherapy.jpg" alt="Sandwich" style="width:100%">
      <h3><a href="https://thriveglobal.com/stories/7-helpful-tips-for-a-healthy-lifestyle-in-2018/">Aromatherapy Benefits</a></h3>
      <p>how to start with aromatherapy and advantages.</p>
    </div>
    <div class="w3-quarter">
      <img src="pilates.jpg" alt="Croissant" style="width:100%">
      <h3><a href="https://thriveglobal.com/stories/7-helpful-tips-for-a-healthy-lifestyle-in-2018/">Pilates: The Trending Excercise</a></h3>
      <p>about the workout and beginners tips and tricks.</p>
    </div>
  </div>

  
  <hr id="about">


  
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>OUR AIM</h3>
      <p>Aim to incorporate aerobic fitness, strength training, core exercises, balance training, and flexibility and stretching into your exercise plan. It isn't necessary to fit each of these elements into every fitness session, but factoring them into your regular routine can help you promote fitness for life.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Healthkraft-Better Starts Here</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <span class="w3-large">Fitness in 2018</span><br>
          <span>Excercises you must try </span>
        </li>
        <li class="w3-padding-16">
          <span class="w3-large">Veganism</span><br>
          <span>Pros and cons</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Health</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Gym</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salads</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Diets</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">VeganProtein</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Skin</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">MentalHealth</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

</body>
</html> 
