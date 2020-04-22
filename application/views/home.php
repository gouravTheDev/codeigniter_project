<h1 class="text-center">College Attandance System</h1>
<div class="slideshow-container">
	<div class="mySlides fade">
	  <img src="images/attendance.jpg" style="width:100%; height: 500px;">
	</div>

	<div class="mySlides fade">
	  <img src="images/attendance2.jpg" style="width:100%; height: 500px;">
	</div>

	<div class="mySlides fade">
	  <img src="images/attendance3.jpg" style="width:100%; height: 500px;">
	</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="card">
				<div class="card-body text-center">
					<div class="card-text">
						<h4 class="font-weight-bold">Students Enrolled</h4>
						<h5 class="font-weight-bold">2000</h5>
					</div>
				</div>
			</div>
		</div>	
		<div class="col-md-4 col-sm-12">
			<div class="card">
				<div class="card-body text-center">
					<div class="card-text">
						<h4 class="font-weight-bold">Lecturer</h4>
						<h5 class="font-weight-bold">100</h5>
					</div>
				</div>
			</div>
		</div>	
		<div class="col-md-4 col-sm-12">
			<div class="card">
				<div class="card-body text-center">
					<div class="card-text">
						<h4 class="font-weight-bold">Classrooms</h4>
						<h5 class="font-weight-bold">250</h5>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<br><br>

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
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>