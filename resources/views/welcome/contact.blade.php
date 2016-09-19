@extends('layouts.app')

@section('title', '| Contact Us')

@section('content')
<!-- container -->
<div class="container">
	 <div class="row">
<hr>
	<div class="col-md-6">
		<!-- west -->
		<div class="well west" id="contactus">
			 <img src="/images/photo.jpg" alt="" class="img-thumbnail">
			 <h6>West Brown</h6>
			 <p>Phone/Text # <a href="tel: +19102001391"> (910) 200-1391</a></p>
			<p>Email: <a href="mailto:lawsonsdad@gmail.com">lawsonsdad@gmail.com</a></p>
			<p>Wilmington, NC  28409</p></center><br>
			<p>West is available anytime Monday through Friday 9:00 am - 6:00 pm.</p>
			<a href="/">Home</a><br><br>
			<a href="/about">About Us</a>
		</div><!-- / west-->		
	</div>
	<div class="col-md-5 text-center document">
		<!-- <div id="googleMap" style="width:500px;height:500px;"></div> -->
		<div id="map" style="width:100%;height:500px"></div>
		<h4>Wilmington, NC  USA</h4>
	</div>

</div>
</div><!-- /container -->
@stop