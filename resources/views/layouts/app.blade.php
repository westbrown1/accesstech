<!DOCTYPE html>
<html lang="en">
<head>
<title>AccessTech @yield('title')</title>
    @include('partials._head')
<style>
/*#footer {
    font-family: "Alex Brush Regular";
    position: fixed;
    bottom: 7px;
    font-style: italic;
    margin-left: auto;
    margin-right: auto;
}*/
#main-footer {
    position: relative;
    font-family: "Alex Brush Regular";
    font-style: italic;
    bottom: 7px;
    margin-left: auto;
    margin-right: auto;
}
</style>

</head>

<body class="popin">
  	<div class="container" id="nav">
     <span class="navbar-fixed-top" onclick="openNav()"><h4>&#9776; <i>AccessTech.io</i></h4></span>
     @include('partials._nav')
    </div>
    
    @yield('content')

    <div id="main-footer">
        <center><p>&copy; - 2016 AccessTech.io, A website design and development company in Wilmington, NC</p></center>
    </div>
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
