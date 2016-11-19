<!DOCTYPE html>
<html lang="en">
<head>
        @include('partials._headForIndex')
        @include('partials._head')
        @include('partials._cssForIndex')
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


     <div class="item--secondary"
          data-aos="fade-right"
          data-aos-anchor="#trigger-left"
         >
         <!-- item--secondary -->
         <div class="item--secondary">         
           <!-- img-thumbnail -->
           <div class="img-thumbnail">
              <img src="images/photo.jpg" alt="west" width="200" height="200"><br><br>
              <p class="text-center">West Brown</p>
              <p class="text-center"><i class="fa fa-phone" aria-hidden="true"></i> 910-200-1391</p>
              <p class="text-center"><a href="mailto:lawsonsdad@gmail.com" style="color: #333"><i class="fa fa-envelope"></i> Email West</a></p>
           </div><!-- /img-thumbnail -->
         </div><!-- /item--secondary -->
     </div><!-- col-md-5 -->

     

     <div class="item--primary clearfix">
       <!-- cirtext -->
       <div class="cirtext" 
       data-aos="fade-left"
       data-aos-anchor="#trigger-right">
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
      </div><!-- /cirtext -->
     </div>
 
      <div class="item"></div>
      <div class="item" id="trigger-left"></div>
      <div class="item"></div>
      <div class="item" id="trigger-right"></div>
      <div class="item"></div>
      <div class="item"></div>

@include('partials._footer')

@include('partials._js')
@include('partials._jsForIndex')
</body>
</html>