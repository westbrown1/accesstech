<!DOCTYPE html>
<html lang="en">
<head>
<title>AccessTech @yield('title')</title>
    @include('partials._head')
</head>

<body>
  	<div class="container" id="nav">
     <span class="navbar-fixed-top" onclick="openNav()"><h4>&#9776; <i>AccessTech.io</i></h4></span>
     @include('partials._nav')
    </div>

    
    @yield('content')

    <div id="footer">
        <hr>
        <center><p class="footer1">&copy; - 2016 AccessTech.io, Wilmington NC</p></center>
    </div>
@include('partials._js')
</body>
</html>
