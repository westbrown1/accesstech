@extends('layouts.app')

@section('title', '| Shop')

@section('content')
<style>
	.shop {
		margin-top: 120px;
	}
</style>
<!-- container -->
<div class="container shop">
<h2 class="text-center">Laptop Computers</h2><hr>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
				 <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=westbrown1962-20&marketplace=amazon&region=US&placement=B01K1IO3QW&asins=B01K1IO3QW&linkId=6b11ee59da0a35c0b7a48f697e08d3f6&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066C0&bg_color=FFFFFF">
    </iframe>
		</div>
	</div>

</div><!-- /container -->

@stop