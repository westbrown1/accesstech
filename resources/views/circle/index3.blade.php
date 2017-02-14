<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPBGBZ8');</script>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content=IE=edge,chrome=1>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <title>Web Design | Circle Hover Effects with CSS Transitions</title>
    <meta name=description content="Circle Hover Effects with CSS Transitions">
    <meta name=keywords content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d">
    <link rel="shortcut icon" href=../favicon.ico>
    <link rel=stylesheet type=text/css href=css/circle/demo.css>
    <link rel=stylesheet type=text/css href=css/circle/common.css>
    <link rel=stylesheet type=text/css href=css/circle/style3.css>
    <link href=http://fonts.googleapis.com/css?family=Open+Sans:300,700 rel=stylesheet type=text/css>
    <script async type=text/javascript src=js/circle/modernizr.custom.79639.js></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->@include('partials._head')
    <style amp-custom>
        body {
            font-family: Cambria, Georgia, serif;
        }
    </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBGBZ8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class=container> @include('partials._nav')
        <header>
            <h1><strong>Circle</strong> Hover Effects</h1>
            <h2>Nice hover effects on circles with CSS Transitions</h2>
            <nav class=codrops-demos> <a href=/index>Demo 1</a> <a href=/index2>Demo 2</a> <a class=current-demo href=/index3>Demo 3</a> <a href=/index4>Demo 4</a> <a href=/index5>Demo 5</a> <a href=/index6>Demo 6</a> <a href=/index7>Demo 7</a> </nav>
            <div class=support-note>
                <!-- let's check browser support with modernizr -->
                <!--span class="no-cssanimations">CSS animations are not supported in your browser</span--><span class=no-csstransforms>CSS transforms are not supported in your browser</span>
                <!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span--><span class=no-csstransitions>CSS transitions are not supported in your browser</span> <span class=note-ie>Sorry, only modern browsers.</span> </div>
        </header>
        <section class=main>
            <ul class=ch-grid>
                <li>
                    <div class=ch-item>
                        <div class=ch-info>
                            <h3>Music To My Ears</h3>
                            <p>Pattern by Jonathan Quintin, View on Dribbble</p>
                        </div>
                        <div class="ch-thumb ch-img-1"></div>
                    </div>
                </li>
                <li>
                    <div class=ch-item>
                        <div class=ch-info>
                            <h3>Make Wise Decisions</h3>
                            <p>Pattern by Jon Gerlach, View on Dribbble</p>
                        </div>
                        <div class="ch-thumb ch-img-2"></div>
                    </div>
                </li>
                <li>
                    <div class=ch-item>
                        <div class=ch-info>
                            <h3>Insert Your Info</h3>
                            <p>Pattern by Kawal Oberoi, View on Dribbble</p>
                        </div>
                        <div class="ch-thumb ch-img-3"></div>
                    </div>
                </li>
            </ul>
        </section>
    </div> @include('partials._footer') @include('partials._js')
    <script async type=text/javascript src=js/circle/modernizr.custom.79639.js></script>
</body>