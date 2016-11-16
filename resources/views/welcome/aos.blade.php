@extends('layouts.app')
@section('content')
<head>
	<meta charset="UTF-8">
	<title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css" integrity="sha256-T2BVEQmlUCoftgGysWhy/vUjLn+SusHDt3mnXoGdPxY=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css.map">
<style>
	body {
  overflow-x: hidden;
}

* {
  box-sizing: border-box;
}

.item {
  width: 200px;
  margin: 50px auto;
  max-height: 250px;
  padding: 75px 20px;
  text-align: center;
  color: #FFF;
  font-size: 3em;
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
  right: 200px;
  background: green;
}
.item--secondary {
  position: fixed;
  top: 0;
  bottom: 0;
  margin: auto;
  left: 200px;
  background: red;
}

</style>
</head>


	<div class="item item--secondary"
     data-aos="fade-right"
     data-aos-anchor="#trigger-left"
     data-aos-anchor-placement="top-top">
  LEFT
  <span>when top of <strong>2</strong> hits top of window</span>
</div>

<div class="item item--primary"
     data-aos="fade-left"
     data-aos-anchor="#trigger-right"
     data-aos-anchor-placement="top-center">
  RIGHT
  <span>when top of <strong>5</strong> hits center of window</span>
</div>

<div class="item"></div>
<div class="item" id="trigger-left"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item" id="trigger-right"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js" integrity="sha256-T8PcNT5ErjZNHcDr8rQOERjKe3xFxDsChEttV/5Fi9o=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js.map"></script>
<script>
   AOS.init({
 duration: 1400
}); 
</script>

@stop





	



