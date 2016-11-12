@extends('layouts.app')

@section('title', '| Blog Index')

@section('content')
<style>
	#blog {
		margin-top: 50px;
		padding-top: 10px;
	}
</style>
	<!-- container -->
	<div class="container">
		<div class="well" id="blog">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1>Here Rests our blogs Index Page</h1>
					<a href="/google">Rethinking Google after PA election error</a>
					<a href="/tarheels">Tarheel Football loses to Duke</a>
				</div>
			</div>	
		</div>	 
	</div><!-- /container -->
@stop