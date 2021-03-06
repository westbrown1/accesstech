<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPBGBZ8');</script>
<!-- End Google Tag Manager -->
	<title>Web Design | Website Design</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Web Design | Parallax Scroll</title>
		<meta name="description" content="Webpage design and development with scrolling.  Your homepage could look like this." />
		<meta name="keywords" content="on scroll, effect, slide in, layout, template, transition, javascript, website, design, development, Wilmington, NC" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/css/component.css" />
		@include('partials._modernizercustomjs')
	</head>
	<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBGBZ8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		<div class="container">
			<header class="clearfix">
				<span>Blueprint <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1>On Scroll Effect Layout</h1>
				<nav>
					<a href="http://tympanus.net/Blueprints/ResponsiveIconGrid/" class="bp-icon bp-icon-prev" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
					<a href="" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a>
					<a href="http://tympanus.net/codrops/?p=15962" class="bp-icon bp-icon-drop" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
					<a href="http://tympanus.net/codrops/category/blueprints/" class="bp-icon bp-icon-archive" data-info="Blueprints archive"><span>Go to the archive</span></a>
				</nav>
			</header>	
			<div id="cbp-so-scroller" class="cbp-so-scroller">
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2>Lemon drops</h2>
						<p>Fruitcake toffee jujubes. Topping biscuit sesame snaps jelly caramels jujubes tiramisu fruitcake. Marzipan tart lemon drops chocolate sesame snaps jelly beans.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="images/1.png" alt="img01">
					</figure>
				</section>
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="images/2.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2>Plum caramels</h2>
						<p>Lollipop powder danish sugar plum caramels liquorice sweet cookie. Gummi bears caramels gummi bears candy canes cheesecake sweet roll icing dragée. Gummies jelly-o tart. Cheesecake unerdwear.com candy canes apple pie halvah chocolate tiramisu.</p>
					</article>
				</section>
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2>Marzipan gingerbread</h2>
						<p>Soufflé bonbon jelly cotton candy liquorice dessert jelly bear claw candy canes. Pudding halvah bonbon marzipan powder. Marzipan gingerbread sweet jelly.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="images/3.png" alt="img01">
					</figure>
				</section>
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="images/4.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2>Carrot cake</h2>
						<p>Sesame snaps sweet wafer danish. Chupa chups carrot cake icing donut halvah bonbon. Chocolate cake candy marshmallow pudding dessert marzipan jujubes sugar plum.</p>
					</article>
				</section>
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2>Pudding lollipop</h2>
						<p>Chupa chups pudding lollipop gummi bears gummies cupcake pie. Cookie cotton candy caramels. Oat cake dessert applicake. Sweet roll tiramisu sweet roll sweet roll.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="images/5.png" alt="img01">
					</figure>
				</section>
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="images/6.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2>Soufflé bonbon</h2>
						<p>Cake cotton candy lollipop. Cake croissant cheesecake candy sugar plum icing apple pie wafer. Pie sugar plum tiramisu tiramisu pie fruitcake candy icing. Candy icing gummies gummies cheesecake brownie lemon drops chocolate gingerbread.</p>
					</article>
				</section>
			</div>
		</div>
		@include('partials._indexcbpScrollerjs')
		@include('partials._indexClassiejs')
		<script>
			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
		</script>
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
