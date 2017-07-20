<!DOCTYPE html>
<html lang=en >

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPBGBZ8');</script>
<!-- End Google Tag Manager -->

    <title>AccessTech @yield('title')</title>     
    @include('partials._head')
    @include('partials._headForIndex')
    @include('partials._indexcss') 

<script>
  (function(e,t,n,c,r){c=e.createElement(t),c.async=1,c.src=n,
  r=e.getElementsByTagName(t)[0],r.parentNode.insertBefore(c,r)})
  (document,"script","https://cdn.quicksprout.com/qs.js");
</script>
<!-- End Quick Sprout -->
</head>

<body> 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBGBZ8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@include('partials._nav')

@yield('content') 

@include('partials._footer') 
@include('partials._js')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91759296-1', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>