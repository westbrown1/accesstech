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
        <link rel="stylesheet" type="text/css" href="css/circle/style4.css" />
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
        font-size: 1.50em;
        margin: 0;
        padding-top: 60px;
        color: #FAB92C;
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
      float: left;
      position: fixed;
      left: 45%;
      top: 0;
      bottom: 0;
      margin-top: 10%;
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
    .clearfix {
      overflow: auto;
    }

    a {
      color: white;
    }
</style>
</head>
<body>

    @include('partials._nav')    

       <div class="demo-2">
            <div class="content">                
                <div id="large-header" class="large-header">                            
                            <canvas id="demo-canvas"></canvas>
                            <h1 class="main-title text-center" onload="myFunction()" id="builder">AccessTech.io</h1> 
                </div>

                <div>
                    <h3 class="title text-center" onload="myFunction()" id="build">Let Us Build An Awesome Website For You Today.</h3>
                </div>                                
            </div>
       </div>            

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
              <p class="text-center"><a href="mailto:lawsonsdad@gmail.com" style="color: #333">Email West</a></p>
           </div><!-- /img-thumbnail -->
         </div><!-- /item--secondary -->
     </div><!-- col-md-5 -->
    </div>
 
     
    <div class="row">
     <div class="col-md-6 item--primary clearfix">
       <!-- cirtext -->
       <div class="cirtext" 
       data-aos="fade-left"
       data-aos-anchor="#trigger-right">
       <p class="around">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat enim reprehenderit molestiae odit id saepe nisi eaque autem pariatur iusto at tempore corporis temporibus quod, iure labore nulla sit rem. Debitis veniam error nobis perferendis totam, quasi, tempore ex similique ducimus quibusdam, repellat aliquam consequuntur vel temporibus consequatur corrupti. Temporibus.</p>                 
              <ul class="ch-grid">
                <li>
                  <a href="/contact">
                    <div class="ch-item ch-img-3">
                      <div class="ch-info-wrap">
                        <div class="ch-info">
                          <div class="ch-info-front ch-img-3"></div>
                          <div class="ch-info-back">
                            <h3>Contact AccessTech.io Today</h3>
                            <p>by Dustin Leer View on Dribbble</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
       <p class="around1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa doloremque nostrum accusantium expedita molestias, repudiandae veniam aperiam sapiente! Quisquam, iste quo quam esse voluptates tempore magnam id explicabo ea suscipit delectus quos, adipisci dolores aliquam accusantium fugit aspernatur eius in praesentium eligendi temporibus. Odit maiores quis et, maxime quas?</p>           
      </div><!-- /cirtext -->
     </div>
    </div>
    </div><!-- /row -->

      <div class="item"></div>
      <div class="item" id="trigger-left"></div>
      <div class="item"></div>
      <div class="item" id="trigger-right"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>

@include('partials._footer')

@include('partials._js')
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
        $('#build').fadeOut(40000);
        $('#builder').hide().fadeIn(7000);
        $('#builder').fadeOut(40000);
    });
</script>

<script src="js/rAF.js"></script>
<script src="js/demo-2.js"></script>
</body>
</html>