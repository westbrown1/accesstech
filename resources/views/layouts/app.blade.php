<!DOCTYPE html>
<html lang=en >

<head>
    <title>AccessTech @yield('title')</title>     @include('partials._head')
    @include('partials._headForIndex')
    @include('partials._indexcss')
 
</head>

<body> @include('partials._nav')

@yield('content') 

@include('partials._footer') 
@include('partials._js') 

</body>

</html>