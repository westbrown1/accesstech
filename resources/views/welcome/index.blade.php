@extends('layouts.app')

@section('title', '| Home')

@section('content')
<style>

#ocean {
	background-image: url("https://hd.unsplash.com/photo-1415018255745-0ec3f7aee47b");
	background-size: cover;
	height: 100vh;
	display: flex;
	flex-direction: column;
	justify-content: center;
}

</style>
<div class="container">
<body id="ocean">
<div class="row">
	<div class="col-md-4 col-md-offset-4">
				<!-- popup -->
		<center><div id="popup">
			 <h4 class="text-center" id="brand">AccessTech.io</h4>
			 <h5 class="text-center">Let Us Build An Awesome Website For You !</h5>
		</div><!-- /popup --></center>
	</div>
</div>
</div>
</body>
@stop
