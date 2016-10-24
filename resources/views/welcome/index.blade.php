@extends('layouts.app')

@section('title', '| Home')

@section('content')
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Animated Background Headers | Demo 2</title>
        <meta name="description" content="AccessTech.io is a website design and website development company located in Wilmington NC, if you need a new website or just want to update a website, we develop Wordpress and Drupal sites, SEO management, an internet marketing company">
        <meta name="keywords" content="header, canvas, animated, creative, inspiration, javascript" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/css/component.css" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'>
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    </head>    
       <div class="demo-2">
            <div class="content">
                <div id="large-header" class="large-header">
                            <canvas id="demo-canvas"></canvas>
                            <h1 class="main-title text-center" onload="myFunction()">AccessTech.io</h1> 
                </div>
                <div>
                        <h4 class="title text-center" onload="myFunction()" id="build">Let Us Build An Awesome Website For You Today, Click <a href="/contact">HERE !</a></h4>
                </div>                                
            </div>            
       </div>
        <script src="js/rAF.js"></script>
        <script src="js/demo-2.js"></script>

@stop