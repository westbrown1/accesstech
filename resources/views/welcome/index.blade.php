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
        <link rel="stylesheet" type="text/css" href="css/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/css/component.css" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'>
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style>
            #build .here {
                position: absolute;
                text-align: center;
                font-size: 1.25em;
                margin: 0;
                padding-top: 60px;
                color: #E2982E;
            }
        </style>
    </head>    
       <div class="demo-2">
            <div class="content">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <h1 class="main-title" onload="myFunction()">AccessTech.io</h1>                    
                </div>                    
            </div>            
       </div>
        <div>
            <h4 class="main-title text-center" id="build">Let Us Build An Awesome Website For You Today, <a href="/contact">Click Here !</a></h4>
        </div>
        <script src="js/rAF.js"></script>
        <script src="js/demo-2.js"></script>

@stop