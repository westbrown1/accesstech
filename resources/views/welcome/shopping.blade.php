<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Index</title>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="We have the best technology deals available.  Enter here to shop for all computer related technology">
	<meta name="keywords" content="computer, tech, technology, deals, deal, smart, best, lowest, price, laptops, watch, watches, laptop">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
	.shop {
		margin-top: 120px;
	}
	</style>
</head>
<body>
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