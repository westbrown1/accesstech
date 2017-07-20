@extends('layouts.app') @section('title', '| Contact Us | Wilmington NC Web Design') @section('content')
<style amp-custom>
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
<div class=container>
    <div class=row>
        <br>
        <br>
        <div class=col-md-6>
            <!-- west -->
            <div class=well id=contactus> <img src=/images/photo.jpg alt class=img-rounded>
                <h6>West Brown</h6>
                <p><a href="tel: +19102001391"><i class="fa fa-phone" aria-hidden=true></i> (910) 200-1391</a></p>
                <p><a href=mailto:jeffreywestbrown@gmail.com><i class="fa fa-envelope"></i> Email West</a></p>
                <p>Wilmington, NC 28409</p>
                </center>
                <br>
                <p>West is available anytime Monday through Friday 9:00 am - 6:00 pm.</p> <a href=/>Home</a>
                <br> <a href=/about>About Us</a>
                <br> <a href=/pricing>Back to Pricing</a>
                <br> <a href=/index>Back to More Fun</a>
                <br>
                <br> <a href=https://www.linkedin.com/profile/preview?locale=en_US&amp;trk=prof-0-sb-preview-primary-button><i class="fa fa-linkedin-square fa-2x" aria-hidden=true></i></a> &nbsp; <a href=https://plus.google.com/110139077394291054540><i class="fa fa-google-plus fa-2x" aria-hidden=true></i></a> </div>
            <!-- / west-->
        </div>
        <div class="col-md-5 text-center">
            <div id=googleMap style=width:500px;height:500px;></div>
            <h4 class=bottom>Wilmington, NC USA</h4> </div>
    </div>
</div>
<!-- /container -->
<script src=http://maps.googleapis.com/maps/api/js?key=AIzaSyDyN-Yeyr8E6vva-bsCzpXV2QEVO00gprk&amp;callback-initMap>
</script>
<script>
    var myCenter = new google.maps.LatLng(34.193333, -77.871229);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
        });

        var infowindow = new google.maps.InfoWindow({
            content: "<div class='gmap'>AccessTech.io</div><div>website design and developement</div><div>Wilmington, NC  28409</div"
        });
        infowindow.open(map, marker);

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script> 
@stop


