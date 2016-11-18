<!DOCTYPE html>
<html lang="en">
<head>
<title>AccessTech @yield('title')</title>
    @include('partials._head')
</head>

<body>
	@include('partials._nav')
    
    @yield('content')

    @include('partials._footer')

    @include('partials._js')

</body>
</html>
