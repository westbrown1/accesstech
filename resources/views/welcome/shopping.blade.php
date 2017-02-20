<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Index</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	<style>
	.shop {
		margin-top: 120px;
	}
</style>
@include('partials._nav')
	<!-- container -->
	<div class="container">
		 <div class="row">
		 	<div class="col-md-8 col-md-offset-2 shop">
		 		<h2 class="text-center">Shopping Links</h2>
		 		<ol>
			 		<li><a href="/watches">Smart Watches</a></li>
			 		<li><a href="/laptops">Laptop Computers</a></li>
		 		</ol>
		 	</div>
		 </div>
	</div><!-- /container -->
	<br><hr>
@include('partials._footer')
@include('partials._js')
</body>
</html>