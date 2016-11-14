@extends('layouts.app')

@section('title', '| Pricing')

@section('content')

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inspiration for Pricing Tables | Codrops</title>
<meta name="description" content="Various styles and inspiration for responsive, flexbox-based HTML pricing tables" />
<meta name="keywords" content="pricing table, inspiration, ui, modern, responsive, flexbox, html, component" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="favicon.ico">
<link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sahitya:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/icons.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
.navbar-fixed-top {
  color: white;
}
</style>


{{-- <div class="row">
	<div class="col-md-8 col-md-offset-2 pricingcolumn">
		<div class="well" id="pricing">
			<div class="text-center">
				<h2>Transparent Pricing</h2>
				<h4>AccessTech.io</h4>
				<hr>			
				<h4>We charge $40 per hour.</h4>
				<h4>We can give you an estimate of how much time we think the work will take.</h4>
				<h6>Note - We do not charge for any time it takes to fix our mistakes (a given right?) or for researching a solution.</h6>
				<hr>				
				<a href="/solution">Why We Are The Best Solution</a><br>
				<a href="/">Home</a><br>
				<p>Start having fun by hovering on the items below. More Fun <a href="/what">Here.</a></p>
			</div>
		</div>
	</div>
</div> --}}
<section class="pricing-section bg-4">
    <h2 class="pricing-section__title">AccessTech.io</h2>
    <div class="pricing pricing--yonten">
        <div class="pricing__item">
            <div class="icon icon--bicycle"></div>
            <h3 class="pricing__title">Transparent Pricing</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>40<span class="pricing__period">/ hour</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">We do not charge</li>
                <li class="pricing__feature">to fix our mistakes</li>
                <li class="pricing__feature">or to research a solution</li>
                <li class="pricing__feature">a given, right?</li>
            </ul>
            <a href="/contact" class="pricing__action">Choose plan</a>
        </div>
        <div class="pricing__item">
            <div class="icon icon--bus"></div>
            <h3 class="pricing__title">Transparent Pricing</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>40<span class="pricing__period">/ hour</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">We do not charge</li>
                <li class="pricing__feature">to fix our mistakes</li>
                <li class="pricing__feature">or to research a solution</li>
                <li class="pricing__feature">a given, right?</li>
            </ul>
            <a href="/contact" class="pricing__action">Choose plan</a>
        </div>
        <div class="pricing__item">
            <div class="icon icon--train"></div>
            <h3 class="pricing__title">Transparent Pricing</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>40<span class="pricing__period">/ hour</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">We do not charge</li>
                <li class="pricing__feature">to fix our mistakes</li>
                <li class="pricing__feature">or to research a solution</li>
                <li class="pricing__feature">a given, right?</li>
            </ul>
            <a href="/contact" class="pricing__action">Choose plan</a>
        </div>
    </div>
</section>
<div class="row">
	<div class="col-md-3" id="logodiv">
		<img src="/images/onlinelogomaker-091016-1355-2013.png" class="logo">
	</div>

	<div class="col-md-9">
		<nav>
		  <ul>
		    <li>style 1
		      <ul class="drop-menu menu-1">
		        <li>uno</li>
		        <li>dos</li>
		        <li>tres</li>
		        <li>cuatro</li>
		        <li>cinco</li>
		        <li>seis</li>
		      </ul>
		    </li>
		    <li>style 2
		      <ul class="drop-menu menu-2">
		        <li>uno</li>
		        <li>dos</li>
		        <li>tres</li>
		        <li>cuatro</li>
		        <li>cinco</li>
		        <li>seis</li>
		      </ul>
		    </li>
		    <li>style 3
		      <ul class="drop-menu menu-3">
		        <li>uno</li>
		        <li>dos</li>
		        <li>tres</li>
		        <li>cuatro</li>
		        <li>cinco</li>
		        <li>seis</li>
		      </ul>
		    </li>
		    <li>style 4
		      <ul class="drop-menu menu-4">
		        <li>uno</li>
		        <li>dos</li>
		        <li>tres</li>
		        <li>cuatro</li>
		        <li>cinco</li>
		        <li>seis</li>
		      </ul>
		    </li>
		  </ul>
		</nav>
	</div>	
</div>
@stop
