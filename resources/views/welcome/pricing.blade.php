@extends('layouts.app')

@section('title', '| Website Builder Pricing')

@section('content')

<title>Web Design | Our Pricing Table</title>
<meta name="description" content="Various styles and inspiration for responsive, flexbox-based HTML pricing tables" />
<link rel="shortcut icon" href="favicon.ico">
<link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sahitya:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/icons.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
.navbar-fixed-top {
  color: white;
}
#main-footer {
    color: white;
}
.bg-4 {
    background-color: #000000;
}
</style>

<section class="pricing-section bg-4">
    <h2 class="pricing-section__title">AccessTech.io</h2>
    <h4 id="yarden-pricing">We Can Give You A Free Estimate Today!</h4>
    <div class="pricing pricing--yonten">
        <div class="pricing__item">
            <div class="icon icon--bicycle"></div>
            <h3 class="pricing__title">Transparent Pricing</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>50<span class="pricing__period">/ hour</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">We do not charge</li>
                <li class="pricing__feature">to fix our mistakes</li>
                <li class="pricing__feature">or to research a solution</li>
                <li class="pricing__feature">a given, right?</li>
            </ul>
            <a href="/contact" class="pricing__action">Choose plan</a>
        </div>
        <div class="pricing__item">
            <div class="icon icon--bus"></div>
            <h3 class="pricing__title">Transparent Pricing</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>50<span class="pricing__period">/ hour</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">We do not charge</li>
                <li class="pricing__feature">to fix our mistakes</li>
                <li class="pricing__feature">or to research a solution</li>
                <li class="pricing__feature">a given, right?</li>
            </ul>
            <a href="/contact" class="pricing__action">Choose plan</a>
        </div>
        <div class="pricing__item">
            <div class="icon icon--train"></div>
            <h3 class="pricing__title">Transparent Pricing</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>50<span class="pricing__period">/ hour</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">We do not charge</li>
                <li class="pricing__feature">to fix our mistakes</li>
                <li class="pricing__feature">or to research a solution</li>
                <li class="pricing__feature">a given, right?</li>
            </ul>
            <a href="/contact" class="pricing__action">Choose plan</a>
        </div>
    </div>
</section>
@stop
