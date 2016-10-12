@extends('layouts.app')

@section('title', '| Home')

@section('content')
	<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Animated Background Headers | Demo 2</title>
        <meta name="description" content="Examples for creative website header animations using Canvas and JavaScript" />
        <meta name="keywords" content="header, canvas, animated, creative, inspiration, javascript" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'>
        <!--[if IE]>
        	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	</head>
	<body>
		<div class="container demo-2">
			<div class="content">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <h1 class="main-title">Spirit</span></h1>
                </div>
                <div class="codrops-top clearfix">
                    <a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/OffCanvasMenuEffects/"><span>Previous Demo</span></a>
                    <a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=20153"><span>Back to the Codrops Article</span></a>
                </div>
                <div class="codrops-header">
                    <h1>Animated Background Headers <span>Examples for creative website headers</span></h1>
                    <nav class="codrops-demos">
                        <a href="index.html">Demo 1</a>
                        <a class="current-demo" href="index2.html">Demo 2</a>
                        <a href="index3.html">Demo 3</a>
                        <a href="index4.html">Demo 4</a>
                    </nav>
                </div>
            </div>
        </div><!-- /container -->
        <script src="js/rAF.js"></script>
        <script src="js/demo-2.js"></script>
@stop