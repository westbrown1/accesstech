@extends('layouts.app')

@section('title', '| Dribble')

@section('content')
<body>
  <div class="container">
    <div class="website">
      <div class="header">
        <div class="logo"> </div>
        <div class="text">CSS Animation Build In</div>
      </div>
      <div class="grid">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
        <div class="item">8</div>
        <div class="item">9</div>
        <div class="item">10</div>
        <div class="item">11</div>
        <div class="item">12</div>
        <div class="item">13</div>
        <div class="item">14</div>
        <div class="item">15</div>
        <div class="item">16</div>
        <div class="item">17</div>
        <div class="item">18</div>
        <div class="item">19</div>
      </div>
    </div>
</div>
<script>

  // Masonry Grid
  $('.grid').masonry({
    itemSelector: '.item',
    columnWidth: 160,
    gutter: 10
  });


  $('.item').each(function(i){
    setTimeout(function(){
      $('.item').eq(i).addClass('is-visible');
    }, 200 * i);
  });

</script>
</body>
@stop