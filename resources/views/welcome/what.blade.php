@extends('layouts.app')

@section('title', '| What We Can Do')

@section('content')
<head>
	<meta name="description" content="Circle Hover Effects with CSS Transitions" />
    <meta name="keywords" content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/style7.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
	<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>

<style>
	.close {
		color: white;
		opacity: 0.8;
	}
</style>

<!-- container -->
	<div class="container">
		 <div class="row">
			<!-- col-md-12 -->
			<div class="col-md-12">
				<h4 id="what">Let's Have Some Fun!</h4> 
			</div><!-- /col-md-12 -->		
		</div>	
		<div class="row">
				 	<div class="col-md-12">
				 		<div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="http://tympanus.net/Development/AnimatedResponsiveImageGrid/">
                    <strong>&laquo; Previous Demo: </strong>Animated Responsive Image Grid
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/08/08/circle-hover-effects-with-css-transitions/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1><strong>Circle</strong> Hover Effects</h1>
				<h2>Pretty hover effects on circles with CSS Transitions</h2>
				
				<nav class="codrops-demos">
					<a href="index.html">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
					<a href="index4.html">Demo 4</a>
					<a href="index5.html">Demo 5</a>
					<a href="index6.html">Demo 6</a>
					<a class="current-demo" href="index7.html">Demo 7</a>
				</nav>
				
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<span class="no-csstransforms">CSS transforms are not supported in your browser</span>
					<span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
					<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
			
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
									<h3>Mouse</h3>
									<p>by Alexander Shumihin <a href="http://drbl.in/eAoj">View on Dribbble</a></p>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back">
									<h3>You</h3>
									<p>by Zoe Ingram <a href="http://drbl.in/eCcV">View on Dribbble</a></p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back">
									<h3>Love</h3>
									<p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p>
								</div>
							</div>
						</div>
					</li>
				</ul>
				
			</section>
        </div>
				 	</div>
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
				  <span class="close">&times;</span>
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
		</div>		.
</div><!-- /container -->

<!-- container -->
<div class="container">	 
	<div class="row">
		<div class="col-md-12" id="bottom">
			<a href="/">Home</a> | 
			<a href="/pricing">Back To Pricing</a>
		</div>
	</div>
</div><!-- /container -->

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
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