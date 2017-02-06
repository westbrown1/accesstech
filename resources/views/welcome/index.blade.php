<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._headForIndex')
  @include('partials._head')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha256-399DNRyfIpWIy1ZV0KmEIIuIQ5sBHdLu9MBtVHrNtt8=" crossorigin="anonymous"></script>
  
  @include('partials._indexcss')
  <style>
    a {
      color: black;
    }
    ul.ch-grid {
      margin: 0;
    }
  </style>
</head>
<body>

  @include('partials._nav')    

<div class="demo-2">             
  <div id="large-header" class="large-header">                            
      <canvas id="demo-canvas"></canvas>
      <!-- sep -->
      <div class="sep">             
        <h1 class="main-title text-center" onload="myFunction()" id="builder">Web Design by AccessTech.io</h1> 
      </div><!-- /sep -->
        <h3 class="title text-center" onload="myFunction()" id="build">Let Us Build An Awesome Website For You Today.</h3>
  </div>                 
</div>
     <h3 class="text-center">You'll Be Glad You Selected Us!</h3>
<!-- container -->
<div class="container">
   <div class="row">
      <div class="col-md-4">
        <div class="wow slideInRight">
          <ul class="ch-grid">
            <li>
              <a href="/solution">
                <div class="ch-item ch-img-1">        
                  <div class="ch-info-wrap">
                    <div class="ch-info">
                      <div class="ch-info-front ch-img-1"></div>
                      <div class="ch-info-back">
                        <h3>Why Choose Us?</h3>
                        <p>pattern by Josh Schott, View on Dribbble</p>
                      </div>  
                    </div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="wow slideInRight">
          <ul class="ch-grid">

            <li>
              <a href="/pricing">
                <div class="ch-item ch-img-2">
                  <div class="ch-info-wrap">
                    <div class="ch-info">
                      <div class="ch-info-front ch-img-2"></div>
                      <div class="ch-info-back">
                        <h3>Go To Pricing</h3>
                        <p>pattern by Jeremy Slagle, View on Dribbble</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wow slideInRight">
          <ul class="ch-grid">
            <li>
              <a href="/contact">
                <div class="ch-item ch-img-3">
                  <div class="ch-info-wrap">
                    <div class="ch-info">
                      <div class="ch-info-front ch-img-3"></div>
                      <div class="ch-info-back">
                        <h3>Please Contact AccessTech.io Today</h3>
                        <p>Pattern by Dustin Leer, View on Dribbble</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
       </div>
      </div>
  </div>
</div><!-- /container -->
  <br>
<!-- jumbotron -->
<div class="jumbotron" id="jumbo-black"></div><!-- /jumbotron -->
<!-- wilmington -->

<div class="jumbotron">
  <p id="jumbo-p">AccessTech.io</p>
  <h3 class="text-center"><a href="/contact" id="footer-contact">Contact AccessTech.io</a>To Assist You With Your Web Design Needs.</h3>
  @include('partials._footer')
</div>
<script>
    new WOW().init();
</script>
@include('partials._js')
@include('partials._jsForIndex')
</body>
</html>