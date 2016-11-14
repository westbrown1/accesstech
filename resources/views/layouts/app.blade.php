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

    @include('partials._footer')

	@include('partials._js')
        <script>
            $(document).ready(function() {
                $('#build').hide().fadeIn(7000);
                $('#build').fadeOut(20000);
                $('#builder').hide().fadeIn(7000);
                $('#builder').fadeOut(20000);
            });
        </script>
</body>
</html>
