#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}



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