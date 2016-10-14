@extends('layouts.app')

@section('title', '| Contact Us')

@section('content')
<style>
	#map-canvas {
	margin: 0;
	padding: 0;
	height: 400px;
	max-width: none;
}
#map-canvas img {
	max-width: none !important;
}
.gm-style-iw {
	width: 350px !important;
	top: 15px !important;
	left: 0px !important;
	background-color: #fff;
	box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
	border: 1px solid rgba(72, 181, 233, 0.6);
	border-radius: 2px 2px 10px 10px;
}
#iw-container {
	margin-bottom: 10px;
}
#iw-container .iw-title {
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 22px;
	font-weight: 400;
	padding: 10px;
	background-color: #48b5e9;
	color: white;
	margin: 0;
	border-radius: 2px 2px 0 0;
}
#iw-container .iw-content {
	font-size: 13px;
	line-height: 18px;
	font-weight: 400;
	margin-right: 1px;
	padding: 15px 5px 20px 15px;
	max-height: 140px;
	overflow-y: auto;
	overflow-x: hidden;
}
.iw-content img {
	float: right;
	margin: 0 5px 5px 10px;	
}
.iw-subTitle {
	font-size: 16px;
	font-weight: 700;
	padding: 5px 0;
}
.iw-bottom-gradient {
	position: absolute;
	width: 326px;
	height: 25px;
	bottom: 10px;
	right: 18px;
	background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
	background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
	background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
	background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
}
</style>
<!-- container -->
<div class="container">
	 <div class="row">
<hr>
	<div class="col-md-6">
		<!-- west -->
		<div class="well" id="contactus">
			 <img src="/images/photo.jpg" alt="" class="img-thumbnail">
			 <h6>West Brown</h6>
			 <p>Phone/Text # <a href="tel: +19102001391"> (910) 200-1391</a></p>
			<p>Email: <a href="mailto:lawsonsdad@gmail.com">lawsonsdad@gmail.com</a></p>
			<p>Wilmington, NC  28409</p></center><br>
			<p>West is available anytime Monday through Friday 9:00 am - 6:00 pm.</p>
			<a href="/">Home</a><br>
			<a href="/about">About Us</a><br><br>
			<a href="https://www.linkedin.com/profile/preview?locale=en_US&trk=prof-0-sb-preview-primary-button"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a> &nbsp;  
			<a href="https://plus.google.com/109928388980385474816/photos"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
</a>			
		</div><!-- / west-->		
	</div>
	<div class="col-md-5 text-center">
		<div id="googleMap" style="width:500px;height:500px;"></div>		
		<h4>Wilmington, NC  USA</h4>
	</div>

  </div>
</div><!-- /container -->

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDyN-Yeyr8E6vva-bsCzpXV2QEVO00gprk&callback-initMap">
</script>

<script>
var myCenter=new google.maps.LatLng(34.193333, -77.871229);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:11,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
content: "<p class='gmap'>AccessTech.io</p>website design and development<p>Wilmington NC, 28409</p>"
});
infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop