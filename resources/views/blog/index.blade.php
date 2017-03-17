@extends('layouts.app')

@section('title', '| Blog Index')

@section('content')
<style>
	#blog {
		margin-top: 120px;
		padding-top: 0;
	}
	a {
		color: #333;
	}
</style>
	<!-- container -->
	<div class="container">		
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="well" id="blog">
					<h1 class="text-center">Blog Index Page</h1><br>
					<ol>
						<li><a href="google">Rethinking Google after Pennsylvania election error.</a></li><br>
						<li><a href="tarheels">Duke Blue Devils Football Team dims UNC Tarheels  Chances at 2016 ACC Football Championship.</a></li><br>
						<li><a href="weight">How Do You Really Lose Fat?</a></li><br>
						<li><a href="appetite">The Best Way To Curb Your Appetite, Brush Your Teeth.</a></li><br>
						<li><a href="lyrics">The Best Song Lyrics I Can Think Of.</a></li><br>
						<li><a href="magnesium">Health Benefits of Magnesium.</a></li>
					</ol>				
				</div>
			</div>
		</div>			 
	</div><!-- /container -->
@stop