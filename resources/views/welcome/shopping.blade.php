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
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPBGBZ8');</script>
<!-- End Google Tag Manager -->
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-91759296-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>