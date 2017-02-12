<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
   .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>

  
</body>
</html>

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
        <img src="{{ asset('images/photo-1432057322224-8916b9ed202a.jpeg') }}" alt="" width="460" height="345">
        <div class="carousel-caption">
          <p>Mountain Lake</p>
        </div>
      </div>

      <div class="item">
        <img src="{{ asset('images/photo-1468876132872-ad7696f484e0.jpeg') }}" alt="" width="460" height="345">
        <div class="carousel-caption">
          <p>Cliffs</p>
        </div>
      </div>
    
      <div class="item">
        <img src="{{ asset('images/photo-1433190152045-5a94184895da.jpeg') }}" alt="" width="460" height="345">
        <div class="carousel-caption">
          <p>Coastline Cliffs</p>
        </div>
      </div> 
    </div>
 </div></head>
<body>
