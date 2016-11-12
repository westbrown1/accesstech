@extends('layouts.app')

@section('title', '| Blog Index')

@section('content')
<style>
	#blog {
		margin-top: 70px;
		padding-top: 0;
	}
</style>
	<!-- container -->
	<div class="container">
		<div class="well" id="blog">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center">Blog Index Page</h1><hr>
					<ol>
						<li><a href="/google">Rethinking Google after PA election error.</a></li>
						<li><a href="/tarheels">Duke Blue Devils Football Team ends UNC Tarheels Chances at ACC Football Championship.</a></li>
					</ol>
					
					
				</div>
			</div>	
		</div>	 
	</div><!-- /container -->
@stop