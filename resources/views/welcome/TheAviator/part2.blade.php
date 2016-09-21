@extends('layouts.app')

@section('title', '| The Aviator')

@section('content')
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Aviator: Part 2 | Codrops</title>
		<meta name="description" content="Demo of part 2: The Making of 'The Aviator': Animating a Basic 3D Scene with Three.js" />
		<meta name="keywords" content="three.js, webgl, tutorial, game, 3d, animation, airplane, web development, javascript" />
		<meta name="author" content="Karim Maaloul for Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<script type="text/javascript" src="js/three.min.js"></script>
		<script type="text/javascript" src="js/main_step2.js"/></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<style>
			body #cdawrap { background: none; border: 1px solid #d1b790; top: auto; bottom: 12px; left: 12px; right: auto; }
		</style>


		<div class="world" id="world"></div>
		<nav class="meta">
			<a class="demo-link" href="part1.html">Part 1</a>
			<a class="demo-link demo-link--current" href="part2.html">Part 2</a>
			<a class="demo-link" href="index.html">Game</a>
		</nav>

@stop

