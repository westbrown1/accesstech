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
        <link rel="stylesheet" type="text/css" href="css/circle/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/circle/common.css" />
        <link rel="stylesheet" type="text/css" href="css/circle/style7.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="js/circle/modernizr.custom.79639.js"></script>
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
        color: #FCDFA2;
    }

    body {
      background-color: #fff;
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
      margin-top: 7%;
      right: 100px;
    }
    .item--secondary {
      position: fixed;
      top: 0;
      bottom: 0;
      margin-top: 8%;
      left: 100px;
    }
    #contactIndex {
      padding-top: 70px;
    }
    .westPhoto {
      margin-left: 60px;
    }
    .here {
      color: #FCDFA2;
    }
    .well {
      margin-top: 0;
      padding-top: 5px;
      float: left;
    }
    .cirtext {
      clear: both;
      margin-top: 0;
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
                    <h4 class="title text-center" onload="myFunction()" id="build">Let Us Build An Awesome Website For You Today, Click <a href="/contact" class="here">Here</a></h4>
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
         <!-- item--secondary -->
         <div class="item--secondary">         
           <!-- img-thumbnail -->
           <div class="img-thumbnail">
              <img src="images/photo.jpg" alt="west" width="200" height="200"><br><br>
              <p class="text-center">West Brown</p>
              <p class="text-center">Cell: 910-200-1391</p>
              <p class="text-center"><a href="mailto:lawsonsdad@gmail.com">Email West</a></p>
           </div><!-- /img-thumbnail -->
         </div><!-- /item--secondary -->
     </div><!-- col-md-5 -->

     <div class="col-md-5 item--primary">
       <!-- cirtext -->
       <div class="cirtext" 
       data-aos="fade-left"
       data-aos-anchor="#trigger-right">
          <div class="well">There is an ongoing debate on the extent to which the writing of programs is an art form, a craft, or an engineering discipline.[3] In general, good programming is considered to be the measured application of all three.  
              <ul class="ch-grid">
                <li>
                  <a href="/contact">
                    <div class="ch-item">       
                      <div class="ch-info">
                        <div class="ch-info-front ch-img-1"></div>
                        <div class="ch-info-back">
                          <h3>Click Me</h3>
                          <p>Please Let AccessTech.io Work For You. Click Me!</p>
                        </div>  
                      </div>
                    </div>  
                  </a>
                </li>
              </ul>Because the discipline covers many areas, which may or may not include critical applications, it is debatable whether licensing is required for the profession as a whole. In most cases, the discipline is self-governed. (Wikipedia - Programming)</div>
        </div><!-- /cirtext -->
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