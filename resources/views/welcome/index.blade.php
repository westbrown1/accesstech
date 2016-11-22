<!DOCTYPE html>
<html lang="en">
<head>
        @include('partials._headForIndex')     
        @include('partials._head')
        @include('partials._cssForIndex') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha256-399DNRyfIpWIy1ZV0KmEIIuIQ5sBHdLu9MBtVHrNtt8=" crossorigin="anonymous"></script>
</head>
<body>

    @include('partials._nav')    

       <div class="demo-2">
            <div class="content">                
                <div id="large-header" class="large-header">                            
                            <canvas id="demo-canvas"></canvas>
                            <h1 class="main-title text-center" onload="myFunction()">AccessTech.io</h1> 
                </div>

                <div>
                    <h3 class="title text-center" onload="myFunction()" id="build">Let Us Build An Awesome Website For You Today.</h3>
                </div>                                
            </div>
       </div>
          
       <!-- container -->
       <div class="container">
          <div class="row">
              <div class="col-md-5 col-md-offset-1">
                <div class="wow slideInLeft">
                  <div class="img-thumbnail">
                    <img src="images/photo.jpg" alt="west" width="200" height="200"><br><br>
                    <p class="text-center">West Brown</p>
                    <p class="text-center"><i class="fa fa-phone" aria-hidden="true"></i> 910-200-1391</p>
                    <p class="text-center"><a href="mailto:lawsonsdad@gmail.com" style="color: #333"><i class="fa fa-envelope"></i> Email West</a></p>                  
               </div><!-- /img-thumbnail -->
              </div>
            </div>

            <div class="col-md-5 col-md-offset-1">
              <div class="wow slideInRight">
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
             </div>
            </div>
          </div>          
       </div><!-- /container -->       
      
<div class="jumbotron">
  <h3 class="text-center">Allow Us To Assist You With Your Web Needs.</h3>
</div><br><br>
       

@include('partials._footer')
<script>
  new WOW().init();
</script>
@include('partials._js')
@include('partials._jsForIndex')

</body>
</html>