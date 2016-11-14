<!DOCTYPE html>
<html lang="en">
<head>
<title>AccessTech @yield('title')</title>
    @include('partials._head')
<style>
#main-footer {
    position: fixed;
    bottom: 7px;
    margin-left: auto;
    margin-right: auto;
}
</style>

</head>

<body>
  	<div class="container" id="nav">
     <span class="navbar-fixed-top" onclick="openNav()"><h4>&#9776; <i>AccessTech.io</i></h4></span>
     @include('partials._nav')
    </div>
    
    @yield('content')

    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div id="main-footer">
                    <p class="text-center">&copy; - 2016 AccessTech.io, A website design and development company in Wilmington, NC</p>
                </div> 
            </div>
        </div>
    </div><!-- /container -->

  

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
