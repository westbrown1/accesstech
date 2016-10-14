@extends('layouts.app')

@section('title', '| Contact Us')

@section('content')
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

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDyN-Yeyr8E6vva-bsCzpXV2QEVO00gprk&callback=myMap">
</script>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(34.1918230, -77.8746005);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script>
var myCenter=new google.maps.LatLng(34.1918230, -77.8746005);

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
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop