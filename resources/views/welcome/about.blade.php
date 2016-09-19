@extends('layouts.app')

@section('title', '| About Us')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1 text-justify well" id="aboutus">
		<div class="about text-center">
			
			<img src="/images/photo.jpg" alt="West Brown" class="img-thumbnail">
			
			<h5>West Brown aka 'we', 'our', 'us'</h5>		
		<hr>
			<p>Hi, I'm West Brown and I'm the founder of Access Tech.  I'm a native of Wilmington, NC and a graduate of The University of North Carolina, Chapel Hill.  I received a degree in Economics, we'll just say a long time ago.  Not too long ago I discovered something I really love to do.  Design web applications and websites.  So, now I'm a web developer and design specialist.  It is our goal here at Access Tech to make sure your users' interface experience is clear, productive, seamless and enjoyable.  We are here to help you make sure your customers know they are being taken care of.  Everyone needs to feel and be reassured they are a very important customer.  As for me, I also enjoy spending time with my 9 year old son.  He likes to surf, play basketball, tennis, golf and is one heckava swimmer.  He enjoys his time on beautiful Wrightsville Beach as much as I do.  Please allow me to assist you in your web development needs.  I am happy to help.  You can call/text me at 910-200-1391 or {{Html::mailto('lawsonsdad@gmail.com', 'email West')}}<br><a href="/">Home</a>
		</div>
	</div>
</div>
@stop
