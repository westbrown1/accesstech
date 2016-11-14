@extends('layouts.app')

@section('title', '| Blog Index')

@section('content')
<style>
	#blog {
		margin-top: 90px;
		padding-top: 0;
	}
	a {
		color: #00BCD4;
	}
</style>
	<!-- container -->
	<div class="container">		
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="well" id="blog">
					<h1 class="text-center">Blog Index Page</h1>
					<ol>
						<li><a href="google">Rethinking Google after Pennsylvania election error.</a></li>
						<li><a href="tarheels">Duke Blue Devils Football Team dims UNC Tarheels  Chances at 2016 ACC Football Championship.</a></li> 
					</ol>
				
				</div>
			</div>
		</div>			 
	</div><!-- /container -->
@stop