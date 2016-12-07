@extends('layouts.app')

@section('title', '| Contact Us')

@section('content')
<style>
	#myPanel {
		margin-top: 100px;
	}
	#googleMap {
		margin-top: 60px;
	}
	.bottom {
		padding-bottom: 50px;
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
			 <p><a href="tel: +19102001391"><i class="fa fa-phone" aria-hidden="true"></i> (910) 200-1391</a></p>
			<p><a href="mailto:jeffreywestbrown@gmail.com"><i class="fa fa-envelope"></i> Email West</a></p>
			<p>Wilmington, NC  28409</p></center><br>
			<p>West is available anytime Monday through Friday 9:00 am - 6:00 pm.</p>
			<a href="/">Home</a><br>
			<a href="/about">About Us</a><br>
			<a href="/pricing">Back to Pricing</a><br>
			<a href="/index">Back to More Fun</a><br><br>
			<a href="https://www.linkedin.com/profile/preview?locale=en_US&trk=prof-0-sb-preview-primary-button"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a> &nbsp;  
			<a href="https://plus.google.com/109928388980385474816/photos"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>			
		</div><!-- / west-->		
	</div>
	<div class="col-md-5 text-center">
		<div id="googleMap" style="width:500px;height:500px;"></div>		
		<h4 class="bottom">Wilmington, NC  USA</h4>
	</div>
  </div>
</div><!-- /container -->

{{-- <div class="row">
	 <div class="col-md-8 col-md-offset-2">
	 <!-- panel panel-primary -->
	 	<div class="panel panel-primary" id="myPanel">
	 		 <!-- panel-heading -->
	 		 <div class="panel-heading">
	 		 	 <h4>Contact Us</h>
	 		 </div><!-- /panel-heading -->
			<!-- panel-body -->
			<div class="panel-body">
 				<form action="{{url('contact')}} " method="POST"> 
 				{{csrf_field()}}
					<label for="email" name="email">Email:</label>
					<input type="email" name="email" class="form-control">

					<label for="subject" name="subject">Subject:</label>
					<input type="text" name="subject" class="form-control">

					<label for="body" name="body">Message:</label>
					<textarea name="body" placeholder="Enter message here" class="form-control" rows="8"></textarea>			

					<button class="btn btn-primary">Send</button>
    			</form>
			</div><!-- /panel-body -->
	 	</div><!-- /panel panel-primary -->		
	 </div><!-- col-md-7 -->
</div><!-- /row --> --}}

<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDyN-Yeyr8E6vva-bsCzpXV2QEVO00gprk&callback-initMap">
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

  var infowindow = new google.maps.InfoWindow({
    content: "<div class='gmap'>AccessTech.io</div><div>website design and developement</div><div>Wilmington, NC  28409</div"
  });
  infowindow.open(map,marker);

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop