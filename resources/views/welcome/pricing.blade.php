@extends('layouts.app')

@section('title', '| Pricing')

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2 pricingcolumn">
		<div class="well" id="pricing">
			<div class="text-center">
				<h2>Transparent Pricing</h2>
				<h4>AccessTech.io</h4>
				<hr>			
				<h4>We charge $40 per hour.</h4>
				<h4>We can give you an estimate of how much time we think the work will take.</h4>
				<hr>
				<h6>Note - We do not charge for any time it takes to fix our mistakes or for researching a solution.</h6>
				<a href="/solution">Why We Are The Best Solution</a><br>
				<a href="/">Home</a><br>
				<p>Start having fun by hovering on the items below. More Fun <a href="/what">Here.</a></p>
			</div>
		</div>
	</div>
</div>
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
