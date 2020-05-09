<!doctype html>
<html lang="en">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>

<p id="demo"></p>

<div class="container">
		<!-- Carusel -->
	<div id="carousel" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
	  </ul>
	  
	  <!-- The slideshow -->
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="assets\images\test.jpg" alt="test1 " width="1100" height="400">
		</div>
		<div class="carousel-item">
		  <img src="assets\images\test2.jpg" alt="test2" width="1100" height="400">
		</div>
		<div class="carousel-item">
		  <img src="assets\images\test3.jpg" alt="test3" width="1100" height="400">
		</div>
	  </div>
	  
	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#carousel" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	  </a>
	</div>	


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 19, 2019 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>