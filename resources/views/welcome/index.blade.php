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
       <div class="container demo-2">
            <div class="content">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <h1 class="main-title">Spirit</span></h1>
                </div>
            </div>
            <!-- Related demos -->
            <section class="related">
                <p>If you enjoyed this demo you might also like:</p>
                <a href="http://tympanus.net/Development/HeaderEffects/">
                    <img src="http://codropspz.tympanus.netdna-cdn.com/codrops/wp-content/uploads/2013/07/HeaderEffects-300x162.jpg" />
                    <h3>On Scroll Header Effects</h3>
                </a>
                <a href="http://tympanus.net/Development/ArticleIntroEffects/">
                    <img src="http://codropspz.tympanus.netdna-cdn.com/codrops/wp-content/uploads/2014/05/ArticleIntroEffects-300x162.png" />
                    <h3>Inspiration for Article Intro Effects</h3>
                </a>
            </section>
            <p class="ref">Image from <a href="http://unsplash.com/">Unsplash</a>. Ornament made with the <a href="http://pixelbuddha.net/freebie/sable-kit-free">Free Sable Kit</a> from Pixel Buddha.</p>
        </div><!-- /container -->
        <script src="js/rAF.js"></script>
        <script src="js/demo-2.js"></script>

@stop