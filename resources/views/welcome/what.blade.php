@extends('layouts.app')

@section('title', '| What We Can Do')

@section('content')
<!-- container -->
	<div class="container">
		 <div class="row">
			<!-- col-md-12 -->
			<div class="col-md-12">
				<h4 id="what">Let's Have Some Fun! (page is still under construction)</h4> 
			</div><!-- /col-md-12 -->		
		</div>			 

		 <div class="row">
		 	<div class="col-md-4">
		 		<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">

			      <div class="item active">
			      	<img src="/images/photo-1468876132872-ad7696f484e0.jpeg" alt="" height="200" width="300">
			        <div class="carousel-caption">			          
			          <p>Mountain Scene</p>
			        </div>
			      </div>

			      <div class="item">
			      	<img src="/images/photo-1432057322224-8916b9ed202a.jpeg" alt="" height="200" width="300">
			        <div class="carousel-caption">			          
			          <p>Mountain Lake</p>
			        </div>
			      </div>

			      <div class="item">
			      	<img src="/images/photo-1433190152045-5a94184895da.jpeg" alt="" height="200" width="300">
			        <div class="carousel-caption">
			          <p>Coast</p>			         
			        </div>
			      </div>
			  		<p>Carousel</p>
			    </div>			  
			</div>
		</div>
	
			<div class="col-md-7">
				<center><img src="https://hd.unsplash.com/uploads/14135798609283698b7f3/a1364128" alt="bird in flight" id="myImg" height="200" width="300">			
				<!-- The Modal -->
				<div id="myModal" class="modal">
				  <span class="close">×</span>
				  <img class="modal-content" id="img01">
				  <h4 id="caption"></h4>
				</div>	
				<p>click on the image (modal)</p></center>			 
				</div>
			</div>
		<div class="row">
			<div class="col-md-5">
				<h4>Animated Accordion</h4>

				<button class="accordion">Section 1</button>
				<div class="slider">
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>

				<button class="accordion">Section 2</button>
				<div class="slider">
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				</div>

				<button class="accordion">Section 3</button>
				<div id="foo" class="slider">
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				</div>

			</div>
				<div class="col-md-6">
					<div>
						<img src="/images/basketball-309539_640.png" alt="" class="basketball">					  
					</div>		
					
					<div>
						<img src="/images/B2Ped.png" alt="" id="pedestal" height="150" width="100"><br>
						<h5>hover over the basketball</h5>
					</div>
				</div>				
			</div>				
		</div>
		<div class="row" id="bottom1">
			<div class="col-md-3">
				<img src="/images/google-chrome-icon-2.png" alt="google chrome icon" class="google"><h5 id="googtext">hover over Google Chrome icon</h5>
			</div>
			<div class="col-md-8" id="light">
				
				<h2 style="text-align:center">Lightbox</h2>

				<div class="row">
				  <div class="column">
				    <img src="/images/photo-1471922694854-ff1b63b20054.jpeg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
				    <img src="/images/photo-1465152251391-e94453ee3f5a.jpeg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
				    <img src="/images/photo-1461770354136-8f58567b617a.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
				    <img src="/images/photo-1433567212640-211efabc03e1 (1).jpeg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
				  </div>
				</div>

				<div id="myModal" class="modal">
				  <span class="close cursor" onclick="closeModal()">&times;</span>
				  <div class="modal-content">

				    <div class="mySlides">
				      <div class="numbertext">1 / 4</div>
				      <img src="/images/photo-1471922694854-ff1b63b20054.jpeg" style="width:100%">
				    </div>

				    <div class="mySlides">
				      <div class="numbertext">2 / 4</div>
				      <img src="/images/photo-1465152251391-e94453ee3f5a.jpeg" style="width:100%">
				    </div>

				    <div class="mySlides">
				      <div class="numbertext">3 / 4</div>
				      <img src="/images/photo-1461770354136-8f58567b617a.jpeg" style="width:100%">
				    </div>
				    
				    <div class="mySlides">
				      <div class="numbertext">4 / 4</div>
				      <img src="/images/photo-1433567212640-211efabc03e1 (1).jpeg" style="width:100%">
				    </div>
				    
				    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				    <a class="next" onclick="plusSlides(1)">&#10095;</a>

				    <div class="caption-container">
				      <p id="caption"></p>
				    </div>


				    <div class="column">
				      <img class="demo cursor" src="/images/photo-1471922694854-ff1b63b20054.jpeg" style="width:100%" onclick="currentSlide(1)" alt="Ocean at Dawn">
				    </div>
				    <div class="column">
				      <img class="demo cursor" src="/images/photo-1465152251391-e94453ee3f5a.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Surfer">
				    </div>
				    <div class="column">
				      <img class="demo cursor" src="/images/photo-1461770354136-8f58567b617a.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Ocean at Sunset">
				    </div>
				    <div class="column">
				      <img class="demo cursor" src="/images/photo-1433567212640-211efabc03e1 (1).jpeg" style="width:100%" onclick="currentSlide(4)" alt="Rocky Coast">
				    </div>
				  </div>
				</div>
			
			</div>
		</div>
	</div><!-- /container -->

<!-- container -->
<div class="container">	 
	<div class="row">
		<center><div class="col-md-12">
			<a href="/">Home</a> | 
			<a href="/pricing">Back To Pricing</a>
		</div></center>
	</div>
</div><!-- /container -->

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>

@stop