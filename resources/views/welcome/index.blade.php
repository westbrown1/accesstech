<!DOCTYPE html>
<html lang="en">
<head>
        @include('partials._headForIndex')     
        @include('partials._head')
        @include('partials._cssForIndex') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha256-399DNRyfIpWIy1ZV0KmEIIuIQ5sBHdLu9MBtVHrNtt8=" crossorigin="anonymous"></script>
        <style>
          .jumbotron {
            margin-bottom: 0;
            padding-bottom: 70px;
          }
          .jumbotron p {
            font-size: 15px;
          }
          #jumbo-black {
            padding: 10px 0 10px 0;
            background-color: black;
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
        <hr>
       <!-- container -->
       <div class="container">
          <div class="row">
            <div class="col-md-2">              
            </div>
              <div class="col-md-4">
                <div class="wow rotateIn">                
                  <div class="img-thumbnail">
                  <a href="/contact">
                    <img src="images/photo.jpg" alt="west" width="200" height="200"></a><br><br>
                    <p class="text-center">West Brown</p>
                    <p class="text-center"><i class="fa fa-phone" aria-hidden="true"></i> 910-200-1391</p>
                    <p class="text-center"><a href="mailto:lawsonsdad@gmail.com" style="color: #333"><i class="fa fa-envelope"></i> Email West</a></p>                                   
                  </div><!-- /img-thumbnail -->               
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
                              <p>Pattern by Dustin Leer View on Dribbble</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
             </div>
             <!-- col-md-2 -->
             <div class="col-md-2">   
             </div><!-- /col-md-2 -->
            </div>
          </div>          
       </div><!-- /container -->       

<!-- jumbotron -->
<div class="jumbotron" id="jumbo-black"></div><!-- /jumbotron -->

<div class="jumbotron">
  <h3 class="text-center"><a href="/contact" id="footer-contact">Contact AccessTech.io</a>To Assist You With Your Web Needs.</h3> 
  @include('partials._footer')
</div>

<script>
  new WOW().init();
</script>

@include('partials._js')
@include('partials._jsForIndex')

</body>
</html>