<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Web Design | Circle Hover Effects with CSS Transitions</title>
    <meta name="description" content="Circle Hover Effects with CSS Transitions" />
    <meta name="keywords" content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d" />
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/circle/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/circle/common.css" />
    <link rel="stylesheet" type="text/css" href="css/circle/style6.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="js/circle/modernizr.custom.79639.js"></script> 
	<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->

	@include('partials._head')
	<style amp-custom>
		body {
			font-family: Cambria, Georgia, serif;
		}
	</style>
</head>
<body>
    <div class="container">

     @include('partials._nav')

		
		<header>
		
			<h1><strong>Circle</strong> Hover Effects</h1>
			<h2>Nice hover effects on circles with CSS Transitions</h2>
			
			<nav class="codrops-demos">
				<a href="/index">Demo 1</a>
				<a href="/index2">Demo 2</a>
				<a href="/index3">Demo 3</a>
				<a href="/index4">Demo 4</a>
				<a href="/index5">Demo 5</a>
				<a class="current-demo" href="/index6">Demo 6</a>
				<a href="/index7">Demo 7</a>
			</nav>
			
			<div class="support-note"><!-- let's check browser support with modernizr -->
				<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
				<span class="no-csstransforms">CSS transforms are not supported in your browser</span>
				<!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
				<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
				<span class="note-ie">Sorry, only modern browsers.</span>
			</div>
			
		</header>
		
		<section class="main">
		
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-1">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
									<h3>Services Image</h3>
									<p>pattern by Gumball Creative, View on Dribbble</p>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="ch-item ch-img-2">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back">
									<h3>Heart</h3>
									<p>pattern by Brian Hurst, View on Dribbble</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="ch-item ch-img-3">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back">
									<h3>Art Print</h3>
									<p>pattern by Tad Carpenter, View on Dribbble</p>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
			
		</section>
    </div>
    @include('partials._footer')   

    @include('partials._js')
    <script type="text/javascript" src="js/circle/modernizr.custom.79639.js"></script>
</body>
