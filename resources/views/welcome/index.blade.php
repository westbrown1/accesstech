<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Animated Background Headers | Demo 2</title>
        <meta name="description" content="AccessTech.io is a website design, website development and software programming company located in Wilmington NC, if you need a new website or just want to update a software program, we develop Wordpress and Drupal sites, SEO management, an internet marketing company">
        <meta name="keywords" content="header, canvas, animated, creative, inspiration, javascript" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/css/component.css" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css" integrity="sha256-T2BVEQmlUCoftgGysWhy/vUjLn+SusHDt3mnXoGdPxY=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css.map">
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>            
        <![endif]-->
        @include('partials._head')
<style>
    #build {
        font-family: "Alex Brush Regular";
        text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
        position: absolute;
        text-align: center;
        font-size: 1.25em;
        margin: 0;
        padding-top: 60px;
        color: #F3C45F;
    }

    body {
      overflow-x: hidden;
    }  

    * {
      box-sizing: border-box;
    }
    .item {
      width: 200px;
      height: 200px;
      margin: 50px auto;
      padding-top: 75px;
    }
    .item span {
      display: block;
      font-size: 1rem;
    }
    .item--primary {
      position: fixed;
      top: 0;
      bottom: 0;
      margin: auto;
      right: 100px;
    }
    .item--secondary {
      position: fixed;
      top: 0;
      bottom: 0;
      margin-top: 12%;
      left: 70px;
    }
</style>
    </head>
    <body>

    <div class="container" id="nav">
     <span class="navbar-fixed-top" onclick="openNav()"><h4>&#9776; <i>AccessTech.io</i></h4></span>
     @include('partials._nav')
    </div>      

       <div class="demo-2">
            <div class="content">                
                <div id="large-header" class="large-header">                            
                            <canvas id="demo-canvas"></canvas>
                            <h1 class="main-title text-center" onload="myFunction()" id="builder">AccessTech.io</h1> 
                </div>

                <div>
                        <h4 class="title text-center" onload="myFunction()" id="build">Let Us Build An Awesome Website For You Today, Click <a href="/contact">HERE !</a></h4>
                </div>                                
            </div>            
       </div>
<!-- container -->
<div class="container">
  <div class="row">
     <div class="col-md-5 item--secondary"
      data-aos="fade-right"
      data-aos-anchor="#trigger-left"
     >
     <!-- panel panel-primary -->
      <div class="panel panel-primary" id="myPanel">
         <!-- panel-heading -->
         <div class="panel-heading">
           <h4>Contact Us</h>
         </div><!-- /panel-heading -->
        <!-- panel-body -->
        <div class="panel-body">
          <form action="{{url('contact')}} " method="POST"> 
          {{csrf_field()}}
            <label for="email" name="email">Email:</label>
            <input type="email" name="email" class="form-control">

            <label for="subject" name="subject">Subject:</label>
            <input type="text" name="subject" class="form-control">

            <label for="body" name="body">Message:</label>
            <textarea name="body" placeholder="Enter message here" class="form-control" rows="8"></textarea>      

            <button class="btn btn-primary">Send</button>
            </form>
        </div><!-- /panel-body -->
      </div><!-- /panel panel-primary -->   
     </div><!-- col-md-5 -->
     <div class="col-md-5 item--primary">
             <img src="images/photo-1443397646383-16272048780e (1).jpeg" alt="boat on beach" class="item--primary"
             width="550"
             height="360" 
             data-aos="fade-left"
             data-aos-anchor="#trigger-right">
     </div>
      <div class="item"></div>
      <div class="item" id="trigger-left"></div>
      <div class="item"></div>
      <div class="item" id="trigger-right"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
  </div><!-- /row -->
</div><!-- /container -->



@include('partials._footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js" integrity="sha256-T8PcNT5ErjZNHcDr8rQOERjKe3xFxDsChEttV/5Fi9o=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js.map"></script>
<script>
   AOS.init({
 duration: 1000
}); 
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<script>
    $(document).ready(function() {
        $('#build').hide().fadeIn(7000);
        $('#build').fadeOut(25000);
        $('#builder').hide().fadeIn(7000);
        $('#builder').fadeOut(25000);
    });
</script>

<script src="js/rAF.js"></script>
<script src="js/demo-2.js"></script>
</body>
</html>