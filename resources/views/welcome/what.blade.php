@extends('layouts.app')

@section('title', '| What We Can Do With Website Design')

@section('content')
<head>
<style>
    .close {
        color: white;
        opacity: 0.8;
    }
    #circlehead {
        padding-top: 0;
        margin-top: 0;
    }
    .secondrow {
        padding-top: 30px;
        margin-top: 30px;
    }
    a {
        color: green;
    }

    a:hover {
        color: #85c34a;
    }
    #last {
        margin-top: 400px;
    }
    #dev {
        padding-left: 0;
    }
</style>

</head>
    <div class="row">
            <!-- col-md-12 -->
            <div class="col-md-12">
                <h4 id="what" class="text-center">Let's Have Some Fun!</h4> 
            </div><!-- /col-md-12 -->       
    </div>
    <div class="row">
        <div class="col-md-12"> 
            <header>            
                <h1 class="text-center" id="circlehead"><strong>Circle</strong> Hover Effects</h1>
                <h2 class="text-center">Nice hover effects on circles (These are links) with CSS Transitions</h2>
                
                <div class="support-note"><!-- let's check browser support with modernizr -->
                    <!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
                    <span class="no-csstransforms">CSS transforms are not supported in your browser</span>
                    <span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
                    <span class="no-csstransitions">CSS transitions are not supported in your browser</span>
                    <span class="note-ie">Sorry, only modern browsers.</span>
                </div>              
            </header>
            
                
        </div>
    </div>

  <br>
  <div class="row">
      <div class="col-md-4 col-md-offset-2">         

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <div class="item active">
                <img src="/images/photo-1468876132872-ad7696f484e0.jpeg" alt="" width="300" height="220">
                <div class="carousel-caption">
                  <p>Mountain Scene</p>
                </div>
              </div>

              <div class="item">
                <img src="/images/photo-1432057322224-8916b9ed202a.jpeg" alt="" width="300" height="220">
                <div class="carousel-caption">
                    <p>Mountain Lake</p>
                </div>
              </div>
            
              <div class="item">
                <img src="/images/photo-1433190152045-5a94184895da.jpeg" alt="" width="300" height="220">
                <div class="carousel-caption">
                    <p>Coast</p>
                </div>
              </div>
              <p class="text-center">Carousel</p>
            </div>

    </div>
</div>

            <div class="col-md-4">
                <center><img src="https://hd.unsplash.com/uploads/14135798609283698b7f3/a1364128" alt="bird in flight" id="myImg" height="200" width="300">         
                <!-- The Modal -->
                <div id="myModal" class="modal">
                  <span class="close">&times;</span>
                  <img class="modal-content" id="img01">
                  <h4 id="caption"></h4>
                </div>  
                <p>click on the image (modal)</p></center>           
                </div>
            </div>
        </div>
        <div class="row secondrow">
            <div class="col-md-4 col-md-offset-2">
                <h4>Animated Accordion</h4>    

                <button class="accordion">Section 1</button>
                <div class="slider">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="slider">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>

                <button class="accordion">Section 3</button>
                <div id="foo" class="slider">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>

            </div>
            <div class="col-md-4">
                <div>
                    <img src="/images/basketball-309539_640.png" alt="" class="basketball">                   
                </div>      
                
                <div>
                    <img src="/images/B2Ped.png" alt="" id="pedestal" height="150" width="100"><br>
                    <h5>hover over the basketball</h5>
                </div>                          
            </div>              
        </div>
        <div class="row secondrow" id="bottom1">
            <div class="col-md-3 col-md-offset-2">
                <img src="/images/google-chrome-icon-2.png" alt="google chrome icon" class="google"><h5 id="googtext">hover over Google Chrome icon</h5>
            </div>          
        </div>  .

    <div class="row secondrow">     

        <h4 class="text-center">Hover over items below.</h4>

        <div class="col-md-4 col-md-offset-1" id="logodiv">
            <img src="/images/onlinelogomaker-091016-1355-2013.png" class="logo">
        </div>

        <div class="col-md-6">
            
            <nav>
              <ul>
                <li>style 1
                  <ul class="drop-menu menu-1">
                    <li>uno</li>
                    <li>dos</li>
                    <li>tres</li>
                    <li>cuatro</li>
                    <li>cinco</li>
                    <li>seis</li>
                  </ul>
                </li>
                <li>style 2
                  <ul class="drop-menu menu-2">
                    <li>uno</li>
                    <li>dos</li>
                    <li>tres</li>
                    <li>cuatro</li>
                    <li>cinco</li>
                    <li>seis</li>
                  </ul>
                </li>
                <li>style 3
                  <ul class="drop-menu menu-3">
                    <li>uno</li>
                    <li>dos</li>
                    <li>tres</li>
                    <li>cuatro</li>
                    <li>cinco</li>
                    <li>seis</li>
                  </ul>
                </li>
                <li>style 4
                  <ul class="drop-menu menu-4">
                    <li>uno</li>
                    <li>dos</li>
                    <li>tres</li>
                    <li>cuatro</li>
                    <li>cinco</li>
                    <li>seis</li>
                  </ul>
                </li>
              </ul>
            </nav>          
        </div>
    </div>
</div><!-- /container -->
<!-- container -->
<div class="container" id="last">    
    <div class="row secondrow">
        <div class="col-md-12" id="bottom">
            <a href="/">Home</a> | 
            <a href="/pricing">Back To Pricing</a> |
            <a href="/about">About Us</a> |
            <a href="/contact">Contact Us</a>
        </div>
    </div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
@stop