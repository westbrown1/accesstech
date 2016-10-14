@extends('layouts.app')

@section('title', '| What We Can Do')

@section('content')
<head>
	<meta name="description" content="Adding elasticity with SVG shape animations" />
	<meta name="keywords" content="svg, morph, snap.svg, effect, animation, css, shape" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css') }} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('circledemo/demo.css') }} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/circlemenu.css') }} " />
	<script src="{{ asset('js/snap.svg-min.js') }} "></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<!-- container -->
	<div class="container">
		 <div class="row">
			<!-- col-md-12 -->
			<div class="col-md-12">
				<h4 id="what">Let's Have Some Fun!</h4> 
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
			<div class="col-md-8">
				<nav id="menu" class="menu">
					<span class="morph-shape" data-morph-active="M251,150c0,93.5-29.203,143-101,143S49,243.5,49,150C49,52.5,78.203,7,150,7S251,51.5,251,150z">
						<svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
							<path d="M281,150c0,71.797-59.203,131-131,131S19,221.797,19,150S78.203,19,150,19S281,78.203,281,150z"/>
						</svg>
					</span>
					<button class="trigger"><i class="fa fa-fw fa-share"></i><span>Share This</span></button>
					<ul class="menu__items">
						<li><a href="https://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-fw fa-facebook"></i><span>Codrops on Facebook</span></a></li>
						<li><a href="http://feeds2.feedburner.com/tympanus"><i class="fa fa-fw fa-rss"></i><span>Codrops RSS Feed</span></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-fw fa-twitter"></i><span>Codrops on Twitter</span></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-fw fa-google-plus"></i><span>Codrops on Google+</span></a></li>
						<li><a href="https://github.com/codrops"><i class="fa fa-fw fa-github"></i><span>Codrops on GitHub</span></a></li>
						<li><a href="http://www.pinterest.com/codrops/codrops/"><i class="fa fa-fw fa-pinterest"></i><span>Codrops on Pinterest</span></a></li>
						<li><a href="https://www.tumblr.com/tagged/codrops"><i class="fa fa-fw fa-tumblr"></i><span>Codrops on Tumblr</span></a></li>
						<li><a href="http://feedburner.google.com/fb/a/mailverify?uri=tympanus&loc=en_US"><i class="fa fa-fw fa-envelope"></i><span>Codrops RSS as Mail</span></a></li>
					</ul>
				</nav>
			</div>
			
		</div>
		.
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
<script src="{{ asset('js/classie.js') }} "></script>
<script>
	(function() {

		function SVGMenu( el, options ) {
			this.el = el;
			this.init();
		}

		SVGMenu.prototype.init = function() {
			this.trigger = this.el.querySelector( 'button.trigger' );
			this.shapeEl = this.el.querySelector( 'span.morph-shape' );

			var s = Snap( this.shapeEl.querySelector( 'svg' ) );
			this.pathEl = s.select( 'path' );
			this.paths = {
				reset : this.pathEl.attr( 'd' ),
				active : this.shapeEl.getAttribute( 'data-morph-active' )
			};

			this.isOpen = false;

			this.initEvents();
		};

		SVGMenu.prototype.initEvents = function() {
			this.trigger.addEventListener( 'click', this.toggle.bind(this) );
		};

		SVGMenu.prototype.toggle = function() {
			var self = this;

			if( this.isOpen ) {
				classie.remove( this.el, 'menu--open' );
			}
			else {
				setTimeout( function() { classie.add( self.el, 'menu--open' ); }, 175 );
			}
			
			this.pathEl.stop().animate( { 'path' : this.paths.active }, 150, mina.easein, function() {
				self.pathEl.stop().animate( { 'path' : self.paths.reset }, 800, mina.elastic );
			} );

			this.isOpen = !this.isOpen;
		};

		new SVGMenu( document.getElementById( 'menu' ) );

	})();
</script>
@stop