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
				<div class="col-md-8 col-md-offset-2">
					<h1>Here Rests our blogs Index Page</h1>
					<ol>
						<li><a href="/google">Rethinking Google after PA election error</a></li><br>
						<li><a href="/tarheels">Tarheel Football loses to Duke</a></li>
					</ol>
					
					
				</div>
			</div>	
		</div>	 
	</div><!-- /container -->
@stop