@extends('layouts.app')

@section('title', '| Home')

@section('content')
<style>

#ocean {
	background-image: url("https://hd.unsplash.com/photo-1415018255745-0ec3f7aee47b");
	background-size: cover;
	background-repeat: no-repeat;
}
</style>
<body id="ocean">
<div class="row">
	<div class="col-md-4 col-md-offset-4">
				<!-- popup -->
		<center><div id="popup">
			 <h4 class="text-center" id="brand">AccessTech.io</h4>
			 <h5 class="text-center">We Can Build An Awesome Website for <b>You !</b></h5>
		</div><!-- /popup --></center>
	</div>
</div>
</body>
@stop
