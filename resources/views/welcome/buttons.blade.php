@extends('layouts.app')

@section('title', '| Buttons')

@section('content')
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Button Styles Inspiration</title>
	<meta name="description" content="Some ideas for modern button styles and effects" />
	<meta name="keywords" content="button, effect, hover, style, inspiration, web design" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/vicons-font.css" />
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/buttons.css" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

		<header class="codrops-header">
			<h1>Button Styles Inspiration <span>Some fresh styles &amp; hover effects for the modern button by Codrops</span></h1>
			<div class="support" id="support-note">Please note that (mobile) Safari's behavior is very buggy and only some effects will work properly.</div>
		</header>
		<section class="content">
			<h2>Winona</h2>
			<div class="box bg-1">
				<button class="button button--winona button--border-thin button--round-s" data-text="Open Project"><span>Open Project</span></button>
				<button class="button button--winona button--border-thin button--round-s" data-text="Create New"><span>Create New</span></button>
				<button class="button button--winona button--border-thin button--round-s" data-text="Publish"><span>Publish</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--winona button--border-thick button--round-l button--text-upper button--size-s button--text-thick" data-text="Open Project"><span>Open Project</span></button>
				<button class="button button--winona button--border-thick button--round-l button--text-upper button--size-s button--text-thick" data-text="Create New"><span>Create New</span></button>
				<button class="button button--winona button--border-thick button--round-l button--text-upper button--size-s button--text-thick" data-text="Publish"><span>Publish</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--winona button--border-thin button--text-thick button--inverted" data-text="Open Project"><span>Open Project</span></button>
				<button class="button button--winona button--border-thin button--text-thick button--inverted" data-text="Create New"><span>Create New</span></button>
				<button class="button button--winona button--border-thin button--text-thick button--inverted" data-text="Publish"><span>Publish</span></button>
			</div>
		</section>
		<section class="content">
			<h2>Ujarak</h2>
			<div class="box bg-1">
				<button class="button button--ujarak button--border-thin button--text-thick">Publish</button>
				<button class="button button--ujarak button--border-thin button--text-thick">Vote</button>
				<button class="button button--ujarak button--border-thin button--text-thick">Delete</button>
			</div>
			<div class="box bg-2">
				<button class="button button--ujarak button--border-medium button--round-s button--text-thick">Publish</button>
				<button class="button button--ujarak button--border-medium button--round-s button--text-thick">Vote</button>
				<button class="button button--ujarak button--border-medium button--round-s button--text-thick">Delete</button>
			</div>
			<div class="box bg-3">
				<button class="button button--ujarak button--border-thick button--text-upper button--size-s button--inverted button--text-thick">Publish</button>
				<button class="button button--ujarak button--border-thick button--text-upper button--size-s button--inverted button--text-thick">Vote</button>
				<button class="button button--ujarak button--border-thick button--text-upper button--size-s button--inverted button--text-thick">Delete</button>
			</div>
		</section>
		<section class="content">
			<h2>Wayra</h2>
			<div class="box bg-1">
				<button class="button button--wayra button--border-thick button--text-upper button--size-s">Remove</button>
				<button class="button button--wayra button--border-thick button--text-upper button--size-s">Open Project</button>
				<button class="button button--wayra button--border-thick button--text-upper button--size-s">Buy Now</button>
			</div>
			<div class="box bg-2">
				<button class="button button--wayra button--border-thin button--round-s">Remove</button>
				<button class="button button--wayra button--border-thin button--round-s">Open Project</button>
				<button class="button button--wayra button--border-thin button--round-s">Buy Now</button>
			</div>
			<div class="box bg-3">
				<button class="button button--wayra button--border-medium button--text-upper button--size-s button--text-thick button--inverted">Remove</button>
				<button class="button button--wayra button--border-medium button--text-upper button--size-s button--text-thick button--inverted">Open Project</button>
				<button class="button button--wayra button--border-medium button--text-upper button--size-s button--text-thick button--inverted">Buy Now</button>
			</div>
		</section>
		<section class="content">
			<h2>Rayen</h2>
			<div class="box bg-1">
				<button class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Send Message"><span>Send Message</span></button>
				<button class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Request a Quote"><span>Request a Quote</span></button>
				<button class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Publish Comment"><span>Publish Comment</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--rayen button--border-medium button--text-thin button--size-l button--inverted" data-text="Send Message"><span>Send Message</span></button>
				<button class="button button--rayen button--border-medium button--text-thin button--size-l button--inverted" data-text="Request a Quote"><span>Request a Quote</span></button>
				<button class="button button--rayen button--border-medium button--text-thin button--size-l button--inverted" data-text="Publish Comment"><span>Publish Comment</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--rayen button--border-thick button--text-thick" data-text="Send Message"><span>Send Message</span></button>
				<button class="button button--rayen button--border-thick button--text-thick" data-text="Request a Quote"><span>Request a Quote</span></button>
				<button class="button button--rayen button--border-thick button--text-thick" data-text="Publish Comment"><span>Publish Comment</span></button>
			</div>
		</section>
		<section class="content">
			<h2>Pipaluk</h2>
			<div class="box bg-1">
				<button class="button button--pipaluk button--text-thick">Add to Cart</button>
				<button class="button button--pipaluk button--text-thick">Cancel</button>
				<button class="button button--pipaluk button--text-thick">Reset</button>
			</div>
			<div class="box bg-2">
				<button class="button button--pipaluk button--inverted button--round-l button--text-thick button--text-upper">Add to Cart</button>
				<button class="button button--pipaluk button--inverted button--round-l button--text-thick button--text-upper">Cancel</button>
				<button class="button button--pipaluk button--inverted button--round-l button--text-thick button--text-upper">Reset</button>
			</div>
			<div class="box bg-3">
				<button class="button button--pipaluk button--inverted  button--round-s button--text-thick">Add to Cart</button>
				<button class="button button--pipaluk button--inverted  button--round-s button--text-thick">Cancel</button>
				<button class="button button--pipaluk button--inverted  button--round-s button--text-thick">Reset</button>
			</div>
		</section>
		<section class="content">
			<h2>Moema</h2>
			<p>Based on the "Add New Location" button concept by Charles Patterson. Better as a click effect than on hover.</p>
			<div class="box bg-1">
				<button class="button button--moema button--text-thick button--text-upper button--size-s">Make it so</button>
				<button class="button button--moema button--text-thick button--text-upper button--size-s">Add to cart</button>
				<button class="button button--moema button--text-thick button--text-upper button--size-s">Send now</button>
			</div>
			<div class="box bg-2">
				<button class="button button--moema button--border-thick button--size-s">Make it so</button>
				<button class="button button--moema button--border-thick button--size-s">Add to cart</button>
				<button class="button button--moema button--border-thick button--size-s">Send now</button>
			</div>
			<div class="box bg-3">
				<button class="button button--moema button--inverted button--text-thick button--size-s">Make it so</button>
				<button class="button button--moema button--inverted button--text-thick button--size-s">Add to cart</button>
				<button class="button button--moema button--inverted button--text-thick button--size-s">Send now</button>
			</div>
		</section>
		<section class="content">
			<h2>Isi</h2>
			<div class="box bg-1">
				<button class="button button--isi button--text-thick button--text-upper button--size-s"><i class="button__icon icon icon-box"></i><span>Archive</span></button>
				<button class="button button--isi button--text-thick button--text-upper button--size-s"><i class="button__icon icon icon-forward"></i><span>Forward</span></button>
				<button class="button button--isi button--text-thick button--text-upper button--size-s"><i class="button__icon icon icon-reply"></i><span>Reply</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--isi button--border-thin button--size-s button--round-s"><i class="button__icon icon icon-box"></i><span>Archive</span></button>
				<button class="button button--isi button--border-thin button--size-s button--round-s"><i class="button__icon icon icon-forward"></i><span>Forward</span></button>
				<button class="button button--isi button--border-thin button--size-s button--round-s"><i class="button__icon icon icon-reply"></i><span>Reply</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--isi button--border-thick button--round-l button--size-s"><i class="button__icon icon icon-box"></i><span>Archive</span></button>
				<button class="button button--isi button--border-thick button--round-l button--size-s"><i class="button__icon icon icon-forward"></i><span>Forward</span></button>
				<button class="button button--isi button--border-thick button--round-l button--size-s"><i class="button__icon icon icon-reply"></i><span>Reply</span></button>
			</div>
		</section>
		<section class="content">
			<h2>Aylen</h2>
			<div class="box bg-1">
				<button class="button button--aylen button--round-l button--text-thick">Next Song</button>
				<button class="button button--aylen button--round-l button--text-thick">Hold</button>
				<button class="button button--aylen button--round-l button--text-thick">Previous Song</button>
			</div>
			<div class="box bg-2">
				<button class="button button--aylen button--border-thin button--round-s">Next Song</button>
				<button class="button button--aylen button--border-thin button--round-s">Hold</button>
				<button class="button button--aylen button--border-thin button--round-s">Previous Song</button>
			</div>
			<div class="box bg-3">
				<button class="button button--aylen button--border-thick button--inverted button--text-upper button--size-s">Next Song</button>
				<button class="button button--aylen button--border-thick button--inverted button--text-upper button--size-s">Hold</button>
				<button class="button button--aylen button--border-thick button--inverted button--text-upper button--size-s">Previous Song</button>
			</div>
		</section>
		<section class="content">
			<h2>Saqui</h2>
			<div class="box bg-1">
				<button class="button button--saqui button--round-l button--text-thick" data-text="Add Issue">Add Issue</button>
				<button class="button button--saqui button--round-l button--text-thick" data-text="Send Message">Send Message</button>
				<button class="button button--saqui button--round-l button--text-thick" data-text="Follow">Follow</button>
			</div>
			<div class="box bg-2">
				<button class="button button--saqui button--inverted button--border-thin button--round-s" data-text="Add Issue">Add Issue</button>
				<button class="button button--saqui button--inverted button--border-thin button--round-s" data-text="Send Message">Send Message</button>
				<button class="button button--saqui button--inverted button--border-thin button--round-s" data-text="Follow">Follow</button>
			</div>
			<div class="box bg-3">
				<button class="button button--saqui button--inverted button--text-thick button--text-upper button--size-s" data-text="Add Issue">Add Issue</button>
				<button class="button button--saqui button--inverted button--text-thick button--text-upper button--size-s" data-text="Send Message">Send Message</button>
				<button class="button button--saqui button--inverted button--text-thick button--text-upper button--size-s" data-text="Follow">Follow</button>
			</div>
		</section>
		<section class="content">
			<h2>Wapasha</h2>
			<div class="box bg-1">
				<button class="button button--wapasha button--round-s">Hide</button>
				<button class="button button--wapasha button--round-s">Add to Cart</button>
				<button class="button button--wapasha button--round-s">Send Request</button>
			</div>
			<div class="box bg-2">
				<button class="button button--wapasha button--text-thick button--text-upper button--size-s">Hide</button>
				<button class="button button--wapasha button--text-thick button--text-upper button--size-s">Add to Cart</button>
				<button class="button button--wapasha button--text-thick button--text-upper button--size-s">Send Request</button>
			</div>
			<div class="box bg-3">
				<button class="button button--wapasha button--round-l button--text-thick button--inverted">Hide</button>
				<button class="button button--wapasha button--round-l button--text-thick button--inverted">Add to Cart</button>
				<button class="button button--wapasha button--round-l button--text-thick button--inverted">Send Request</button>
			</div>
		</section>
		<section class="content">
			<h2>Nina</h2>
			<div class="box bg-1">
				<button class="button button--nina button--text-thick button--text-upper button--size-s" data-text="Filter">
					<span>F</span><span>i</span><span>l</span><span>t</span><span>e</span><span>r</span>
				</button>
				<button class="button button--nina button--text-thick button--text-upper button--size-s" data-text="Create">
					<span>C</span><span>r</span><span>e</span><span>a</span><span>t</span><span>e</span>
				</button>
				<button class="button button--nina button--text-thick button--text-upper button--size-s" data-text="Send Mail">
					<span>S</span><span>e</span><span>n</span><span>d</span> <span>M</span><span>a</span><span>i</span><span>l</span>
				</button>
			</div>
			<div class="box bg-2">
				<button class="button button--nina button--round-l button--text-thick button--inverted" data-text="Filter">
					<span>F</span><span>i</span><span>l</span><span>t</span><span>e</span><span>r</span>
				</button>
				<button class="button button--nina button--round-l button--text-thick button--inverted" data-text="Create">
					<span>C</span><span>r</span><span>e</span><span>a</span><span>t</span><span>e</span>
				</button>
				<button class="button button--nina button--round-l button--text-thick button--inverted" data-text="Send Mail">
					<span>S</span><span>e</span><span>n</span><span>d</span> <span>M</span><span>a</span><span>i</span><span>l</span>
				</button>
			</div>
			<div class="box bg-3">
				<button class="button button--nina button--border-thin button--round-s" data-text="Filter">
					<span>F</span><span>i</span><span>l</span><span>t</span><span>e</span><span>r</span>
				</button>
				<button class="button button--nina button--border-thin button--round-s" data-text="Create">
					<span>C</span><span>r</span><span>e</span><span>a</span><span>t</span><span>e</span>
				</button>
				<button class="button button--nina button--border-thin button--round-s" data-text="Send Mail">
					<span>S</span><span>e</span><span>n</span><span>d</span> <span>M</span><span>a</span><span>i</span><span>l</span>
				</button>
			</div>
		</section>
		<section class="content">
			<h2>Nanuk</h2>
			<div class="box bg-1">
				<button class="button button--nanuk button--text-thick button--text-upper button--size-s button--border-thick">
					<span>F</span><span>i</span><span>l</span><span>t</span><span>e</span><span>r</span>
				</button>
				<button class="button button--nanuk button--text-thick button--text-upper button--size-s button--border-thick">
					<span>C</span><span>r</span><span>e</span><span>a</span><span>t</span><span>e</span>
				</button>
				<button class="button button--nanuk button--text-thick button--text-upper button--size-s button--border-thick">
					<span>S</span><span>e</span><span>n</span><span>d</span> <span>M</span><span>a</span><span>i</span><span>l</span>
				</button>
			</div>
			<div class="box bg-2">
				<button class="button button--nanuk button--round-l button--text-thick button--inverted">
					<span>F</span><span>i</span><span>l</span><span>t</span><span>e</span><span>r</span>
				</button>
				<button class="button button--nanuk button--round-l button--text-thick button--inverted">
					<span>C</span><span>r</span><span>e</span><span>a</span><span>t</span><span>e</span>
				</button>
				<button class="button button--nanuk button--round-l button--text-thick button--inverted">
					<span>S</span><span>e</span><span>n</span><span>d</span> <span>M</span><span>a</span><span>i</span><span>l</span>
				</button>
			</div>
			<div class="box bg-3">
				<button class="button button--nanuk button--border-thin button--round-s">
					<span>F</span><span>i</span><span>l</span><span>t</span><span>e</span><span>r</span>
				</button>
				<button class="button button--nanuk button--border-thin button--round-s">
					<span>C</span><span>r</span><span>e</span><span>a</span><span>t</span><span>e</span>
				</button>
				<button class="button button--nanuk button--border-thin button--round-s">
					<span>S</span><span>e</span><span>n</span><span>d</span> <span>M</span><span>a</span><span>i</span><span>l</span>
				</button>
			</div>
		</section>
		<section class="content">
			<h2>Nuka</h2>
			<div class="box bg-1">
				<button class="button button--nuka button--round-s button--text-thick">Add to Cart</button>
				<button class="button button--nuka button--round-s button--text-thick">Subscribe</button>
				<button class="button button--nuka button--round-s button--text-thick">Submit Order</button>
			</div>
			<div class="box bg-2">
				<button class="button button--nuka button--round-l button--inverted button--text-thick button--text-upper button--size-s">Add to Cart</button>
				<button class="button button--nuka button--round-l button--inverted button--text-thick button--text-upper button--size-s">Subscribe</button>
				<button class="button button--nuka button--round-l button--inverted button--text-thick button--text-upper button--size-s">Submit Order</button>
			</div>
			<div class="box bg-3">
				<button class="button button--nuka">Add to Cart</button>
				<button class="button button--nuka">Subscribe</button>
				<button class="button button--nuka">Submit Order</button>
			</div>
		</section>
		<section class="content">
			<h2>Antiman</h2>
			<div class="box bg-1">
				<button class="button button--antiman button--round-l button--text-medium"><i class="button__icon icon icon-plus"></i><span>Add New</span></button>
				<button class="button button--antiman button--round-l button--text-medium"><i class="button__icon icon icon-map-marker"></i><span>Locate</span></button>
				<button class="button button--antiman button--round-l button--text-medium"><i class="button__icon icon icon-clock"></i><span>Schedule</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--antiman button--text-thick button--text-upper button--size-s button--inverted-alt button--round-s button--border-thick"><i class="button__icon icon icon-plus"></i><span>Add New</span></button>
				<button class="button button--antiman button--text-thick button--text-upper button--size-s button--inverted-alt button--round-s button--border-thick"><i class="button__icon icon icon-map-marker"></i><span>Locate</span></button>
				<button class="button button--antiman button--text-thick button--text-upper button--size-s button--inverted-alt button--round-s button--border-thick"><i class="button__icon icon icon-clock"></i><span>Schedule</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--antiman button--inverted button--border-thin button--text-thick button--size-m"><i class="button__icon icon icon-plus"></i><span>Add New</span></button>
				<button class="button button--antiman button--inverted button--border-thin button--text-thick button--size-m"><i class="button__icon icon icon-map-marker"></i><span>Locate</span></button>
				<button class="button button--antiman button--inverted button--border-thin button--text-thick button--size-m"><i class="button__icon icon icon-clock"></i><span>Schedule</span></button>
			</div>
		</section>
		<section class="content">
			<h2>Itzel</h2>
			<svg class="hidden">
				<defs>
					<clipPath id="clipBox" clipPathUnits="objectBoundingBox">
						<polygon points="0,0 0,1 0.35,1 0.35,0.6 0.65,0.6 0.65,1 1,1 1,0" />
					</clipPath>
				</defs>
			</svg>
			<div class="box bg-1">
				<button class="button button--itzel button--text-thick"><i class="button__icon icon icon-cart"></i><span>Express Checkout</span></button>
				<button class="button button--itzel button--text-thick"><i class="button__icon icon icon-envelope"></i><span>Send Message</span></button>
				<button class="button button--itzel button--text-thick"><i class="button__icon icon icon-trash"></i><span>Delete Article</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--itzel button--text-thick button--text-upper button--border-thick button--size-s"><i class="button__icon icon icon-cart"></i><span>Express Checkout</span></button>
				<button class="button button--itzel button--text-thick button--text-upper button--border-thick button--size-s"><i class="button__icon icon icon-envelope"></i><span>Send Message</span></button>
				<button class="button button--itzel button--text-thick button--text-upper button--border-thick button--size-s"><i class="button__icon icon icon-trash"></i><span>Delete Article</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--itzel button--size-l button--border-thin button--text-thin"><i class="button__icon icon icon-cart"></i><span>Express Checkout</span></button>
				<button class="button button--itzel button--size-l button--border-thin button--text-thin"><i class="button__icon icon icon-envelope"></i><span>Send Message</span></button>
				<button class="button button--itzel button--size-l button--border-thin button--text-thin"><i class="button__icon icon icon-trash"></i><span>Delete Article</span></button>
			</div>
			<p>clip-path does not work in IE, so you'll see the line under the icon.</p>
		</section>
		<section class="content">
			<h2>Naira</h2>
			<div class="box bg-1">
				<button class="button button--naira button--round-s button--border-thin"><i class="button__icon icon icon-download"></i><span>Download</span></button>
				<button class="button button--naira button--round-s button--border-thin button--naira-up"><i class="button__icon icon icon-upload"></i><span>Upload</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--naira button--border-thick button--text-thick button--text-upper button--size-s"><i class="button__icon icon icon-download"></i><span>Download</span></button>
				<button class="button button--naira button--border-thick button--text-thick button--text-upper button--size-s button--naira-up"><i class="button__icon icon icon-upload"></i><span>Upload</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--naira button--border-medium button--round-l button--text-thick button--inverted"><i class="button__icon icon icon-download"></i><span>Download</span></button>
				<button class="button button--naira button--border-medium button--round-l button--text-thick button--inverted button--naira-up"><i class="button__icon icon icon-upload"></i><span>Upload</span></button>
			</div>
		</section>
		<section class="content">
			<h2>Quidel</h2>
			<div class="box bg-1">
				<button class="button button--quidel button--round-s"><i class="button__icon icon icon-cross"></i><span>Delete</span></button>
				<button class="button button--quidel button--round-s"><i class="button__icon icon icon-flag"></i><span>Flag</span></button>
				<button class="button button--quidel button--round-s"><i class="button__icon icon icon-search"></i><span>Search</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--quidel button--inverted button--text-thick button--text-upper button--size-s"><i class="button__icon icon icon-cross"></i><span>Delete</span></button>
				<button class="button button--quidel button--inverted button--text-thick button--text-upper button--size-s"><i class="button__icon icon icon-flag"></i><span>Flag</span></button>
				<button class="button button--quidel button--inverted button--text-thick button--text-upper button--size-s"><i class="button__icon icon icon-search"></i><span>Search</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--quidel button--inverted"><i class="button__icon icon icon-cross"></i><span>Delete</span></button>
				<button class="button button--quidel button--inverted"><i class="button__icon icon icon-flag"></i><span>Flag</span></button>
				<button class="button button--quidel button--inverted"><i class="button__icon icon icon-search"></i><span>Search</span></button>
			</div>
		</section>
		<section class="content">
			<h2>Sacnite</h2>
			<div class="box bg-1">
				<button class="button button--sacnite"><i class="button__icon icon icon-user"></i><span>User</span></button>
				<button class="button button--sacnite"><i class="button__icon icon icon-bookmark"></i><span>Bookmark</span></button>
				<button class="button button--sacnite"><i class="button__icon icon icon-bell"></i><span>Alert</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--sacnite button--round-l"><i class="button__icon icon icon-user"></i><span>User</span></button>
				<button class="button button--sacnite button--round-l"><i class="button__icon icon icon-bookmark"></i><span>Bookmark</span></button>
				<button class="button button--sacnite button--round-l"><i class="button__icon icon icon-bell"></i><span>Alert</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--sacnite button--round-s button--inverted"><i class="button__icon icon icon-user"></i><span>User</span></button>
				<button class="button button--sacnite button--round-s button--inverted"><i class="button__icon icon icon-bookmark"></i><span>Bookmark</span></button>
				<button class="button button--sacnite button--round-s button--inverted"><i class="button__icon icon icon-bell"></i><span>Alert</span></button>
			</div>
		</section>
		<section class="content">
			<h2>Shikoba</h2>
			<p>Based on Portfolio Update! by Dennis Flinsenberg</p>
			<div class="box bg-1">
				<button class="button button--shikoba button--round-s button--border-thin"><i class="button__icon icon icon-microphone"></i><span>Start Recording</span></button>
				<button class="button button--shikoba button--round-s button--border-thin"><i class="button__icon icon icon-next"></i><span>Next Song</span></button>
				<button class="button button--shikoba button--round-s button--border-thin"><i class="button__icon icon icon-camera"></i><span>Take picture</span></button>
			</div>
			<div class="box bg-2">
				<button class="button button--shikoba button--text-thick button--border-medium button--text-upper button--size-s"><i class="button__icon icon icon-microphone"></i><span>Start Recording</span></button>
				<button class="button button--shikoba button--text-thick button--border-medium button--text-upper button--size-s"><i class="button__icon icon icon-next"></i><span>Next Song</span></button>
				<button class="button button--shikoba button--text-thick button--border-medium button--text-upper button--size-s"><i class="button__icon icon icon-camera"></i><span>Take picture</span></button>
			</div>
			<div class="box bg-3">
				<button class="button button--shikoba button--text-medium button--round-l button--inverted"><i class="button__icon icon icon-microphone"></i><span>Start Recording</span></button>
				<button class="button button--shikoba button--text-medium button--round-l button--inverted"><i class="button__icon icon icon-next"></i><span>Next Song</span></button>
				<button class="button button--shikoba button--text-medium button--round-l button--inverted"><i class="button__icon icon icon-camera"></i><span>Take picture</span></button>
			</div>
		</section>

	<script>
		(function() {
			var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
			if(isSafari) {
				document.getElementById('support-note').style.display = 'block';
			}
		})();
	</script>
@stop