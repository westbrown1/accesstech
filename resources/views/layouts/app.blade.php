<!DOCTYPE html>
<html lang="en">
<head>
<title>AccessTech @yield('title')</title>
    @include('partials._head')
</head>

<body class="popin">
  	<div class="container" id="nav">
     <span class="navbar-fixed-top" onclick="openNav()"><h4>&#9776; <i>AccessTech.io</i></h4></span>
     @include('partials._nav')
    </div>
    
    @yield('content')

    <div id="footer">
        <center><p>&copy; - 2016 AccessTech.io, A website design and development company in Wilmington, NC</p></center>
    </div>
	@include('partials._js')
        <script>
            var myVar;
            function myFunction() {
                myVar = setTimeout(4000);
            }
            
            $(document).ready(function() {
                $('#build').hide().fadeIn(7000);
                $('#build').fadeOut(20000);
                $('#builder').hide().fadeIn(7000);
                $('#builder').fadeOut(20000);
            });
        </script>
</body>
</html>
