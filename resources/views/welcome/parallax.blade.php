@extends('layouts.app') @section('title', '| Website Builder | Parallax Homepage') @section('content') <style amp-custom> a {
    color: #fff;
}

.navbar-fixed-top {
    color: white;
}

body,
html {
    height: 100%;
    margin: 0;
    font: 400 15px/1.8 "Lato", sans-serif;
    color: #777;
}

.bgimg-1,
.bgimg-2,
.bgimg-3 {
    position: relative;
    opacity: 1;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bgimg-1 {
    background-image: url("https://images.unsplash.com/photo-1455264646464-fb8b45ab4c57?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&s=4e9aa5741e8a1b7ae3909cc5f89fd7f3");
    min-height: 100%;
}

.bgimg-2 {
    background-image: url("https://hd.unsplash.com/photo-1444658293155-105ae40f8278");
    min-height: 400px;
}

.bgimg-3 {
    background-image: url("https://hd.unsplash.com/photo-1452390211826-8d50e8ee0b62");
    min-height: 400px;
}

.caption {
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    color: #000;
}

.caption span.border {
    color: black;
    font-size: 25px;
    letter-spacing: 10px;
}

h3 {
    letter-spacing: 5px;
    text-transform: uppercase;
    font: 20px "Lato", sans-serif;
    color: #111;
}

</style> 
</head> 
<body> 
<div class=bgimg-1> <div class=caption> <span class=border>SCROLL DOWN</span> </div> </div> <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;"> <h3 style=text-align:center;
>Parallax Demo</h3> <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis,
lectus nec libero turpis nunc at,
sed posuere mollis ullamcorper libero ante lectus,
blandit pellentesque a,
magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi,
morbi sociis. Condimentum dui ipsum consequat morbi,
curabitur aliquam pede,
nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor,
nunc nisl dapibus vestibulum at,
sodales tincidunt mauris ullamcorper,
dapibus pulvinar,
in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend,
aenean maecenas vulputate,
non id vehicula lorem mattis,
ratione interdum sociis ornare. Suscipit proin magna cras vel,
non sit platea sit,
maecenas ante augue etiam maecenas,
porta porttitor placerat leo.</p> </div> <div class=bgimg-2> <div class=caption> <span class=border style="background-color:transparent;font-size:25px;color: #f7f7f7;">LESS HEIGHT</span> </div> </div> <div style=position:relative;
> <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p> </div> </div> <div class=bgimg-3> <div class=caption> <span class=border style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span> </div> </div> <div style=position:relative;
> <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p> </div> </div> <div class=bgimg-1> <div class=caption> <span class=border>COOL!</span> </div> </div> @stop