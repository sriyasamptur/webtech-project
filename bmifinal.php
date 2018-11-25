<?php

function CBMI($HEIGHT,$WEIGHT)
{
	$HEIGHT = $HEIGHT/100;
	$HEIGHT = $HEIGHT * $HEIGHT;
	$BMI = $WEIGHT / $HEIGHT;
	$BMI = round($BMI,2);
	return $BMI;
}
function PRINTBMI($BMI)
{
	$result = '';
	if($BMI < 15){$result = 'Very severely underweight';}
	if(15 <= $BMI && $BMI < 16){$result = 'Severely underweight';}
	if(16 <= $BMI && $BMI < 18.5){$result = 'Underweight';}
	if(18.5 <= $BMI && $BMI < 25){$result = 'Normal (healthy weight)';}
	if(25 <= $BMI && $BMI < 30 ){$result = 'Overweight';}
	if(30 <= $BMI && $BMI < 35 ){$result = 'Obese Class I (Moderately obese)';}
	if(35 <= $BMI && $BMI < 40 ){$result = 'Obese Class II (Severely obese)';}
	if($BMI >= 40){$result = 'Obese Class III (Very severely obese)';}	
	return $result;
}
?>
<html>
<head>
	<title>Calculate Your BMI - Standard BMI Calculator</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-20" />
	<meta name="description" content="Calculate Your BMI" />
	<meta name="keywords" content="Body Max Index, BMI, Quetelet index, height, weight, Calculator, healthy" />
<style>
	th, td {
    padding: 25px;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>



.container {
    position: relative;
    text-align: center;
    color: white;
}
.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}




html,body { height: 100%; width: 100%; background-color: black; }
canvas { position: absolute; }
.container {
    position: relative;
    text-align: center;
    color: white;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 0px;
}
</style>
</head>
<body>


<div style="color: #777;background-color:black;text-align:center;;text-align: justify;">
<H1><font size="32"> WHAT IS BMI</font></H1>
<p><font size="4.5" color="white">
Body mass index, or BMI, is a measure of body size. It combines a person's weight with their height. The results of a BMI measurement can give an idea about whether a person has the correct weight for their height.
BMI is a screening tool that can indicate whether a person is underweight or if they have a healthy weight, excess weight, or obesity. If a person's BMI is outside of the healthy range, their health risks may increase significantly.

Carrying too much weight can lead to a variety of health conditions, such as type 2 diabetes, high blood pressure, and cardiovascular problems.

A weigh that is too low can increase the risk of malnutrition, osteoporosis, and anemia. The doctor will make suitable recommendations.

BMI does not measure body fat directly, and it does not account for age, sex, ethnicity, or muscle mass in adults.

However, it uses standard weight status categories that can help doctors to track weight status across populations and identify potential issues in individuals.
</font></p>

<canvas id="canvas"></canvas>
<canvas id="canvas"></canvas>
<script>
window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

var canvas = document.getElementById('canvas'),
	context = canvas.getContext('2d'),
	width = canvas.width = document.body.offsetWidth,
	height = canvas.height = document.body.offsetHeight,
	ball = {
		x: 0,
		y: height / 2,
	},
	point = {
		x: 0,
		y: ball.y
	},
	current_point = 0;

var points = [
		{y:0,x:20},
		{y:0,x:1},
        {y:3,x:1},
	    {y:-10,x:2},
		{y:10,x:2},
	    {y:-12,x:3},
	    {y:35,x:5},
	    {y:-25,x:4},
	    {y:14,x:3},
	    {y:5,x:2},
		{y:0,x:1},
		{y:0,x:20}
	];

context.fillStyle = "rgba(255, 0, 0, 1)";
render();
function animateTo() {
	function dist(x1,x2,y1,y2) {
		var dx = x1 - x2,
			dy = y1 - y2;
		return {
			d: Math.sqrt(dx*dx + dy*dy),
			dx: dx,
			dy: dy
		};
	}
	var dis = dist(ball.x, point.x+points[current_point].x,ball.y, point.y+points[current_point].y);
	if( dis.d > 1 ) {
		var s = Math.abs(dis.dy) > 13 ? 2 : 1;
		ball.x += -( dis.dx / dis.d )*s;
		ball.y += -( dis.dy / dis.d )*s;
	} else {
		ball.x = point.x+points[current_point].x;
		ball.y = point.y+points[current_point].y;
		point.x += points[current_point].x;
		current_point++;
		if( current_point >= points.length || ball.x > width ) {
			current_point = 0;
			if( ball.x > width ) {
				point.x = ball.x = 0;
			}
		}
	}
}
function render() {
	requestAnimFrame(render);
	animateTo();
	context.fillStyle = "rgba(0, 0, 0, .01)";
	context.fillRect(0,0,width,height);
	context.fillStyle = "rgba(255, 0, 0, 1)";
	context.beginPath();
	context.arc(ball.x, ball.y, 1, 0, 2*Math.PI, true);
	context.closePath();
	context.fill();
}
</script>
<div class="container">
 <div class="top-left"><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	<script>
	$(document).ready(function(){
	  $(".BMI").submit(function (e){
		if ($("#HEIGHT").val() == ""){
		  $("#HEIGHT").css('box-shadow', '0px 0px 2px red');
		  alert('Please input your height');
		  e.preventDefault(); 
		}
		if ($("#WEIGHT").val() == ""){
		  $("#WEIGHT").css('box-shadow', '0px 0px 2px red');
		  alert('Please input you weight');
		  e.preventDefault(); 
		}
	  });
	});
	</script>
	<p align="center"><span style="font-size:60px">CALCULATE YOUR BMI</span></p>
	<div align="left" style="padding-left:35%;">
	<form method="post" class="BMI">
		<table border="2" bordercolor="white">
			<tr>
				<td><label for="HEIGHT"><font color="white">Your Height (cm):</font></label></td>
				<td><input type="text" name="HEIGHT" id="HEIGHT" value=""></td>
			</tr>
			<tr>
				<td><label for="WEIGHT"><font color="white">Your Weight (kg):<font></label></td>
				<td><input type="text" name="WEIGHT" id="WEIGHT" value=""></td>		
			</tr>
			<tr>
				<td></td>
				<td align="right"><input type="submit" value="COMPUTE BMI"></td>
			</tr>
		</table>
	</form>
	</div>
	<?php
		if (isset($_POST['HEIGHT'])){
			$HEIGHT = $_POST['HEIGHT'];
			$WEIGHT = $_POST['WEIGHT'];
			$BMI = CBMI($HEIGHT,$WEIGHT);
			$A = PRINTBMI($BMI);
			echo "<div align='left' style='padding-left:25%; padding-bottom:30px;'>";
echo "<p> <font color=white size='10pt'>YOUR BMI :</font> <font color=white size='20pt'>$BMI</font></p>";			echo "<br>";
echo "<p> <font color=white size='20pt'>CONDITION OF YOUR BODY  :</font> <font color=white size='20pt'>$A</font></p>";			echo "<br>";
			echo"<p><font color=white size='10px'>The normal BMI is between 18.5 to 25</font></p>";
			echo "</div>";
		}

	?></div>
</body>
</html>