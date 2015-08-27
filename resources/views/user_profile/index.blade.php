@extends('user/base');

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<figure class="thumbnail">
				<img src="{{ Auth::user()->avatar }}" class="img-avatar img-circle" />
				<figcaption>{{ Auth::user()->name }}</figcaption>
				

			</figure>
				<div class="component-panel">
					<i class="fa fa-undo text-warning fa-2x"></i>
					<i class="fa fa-arrow-circle-o-down fa-5x text-danger"></i>
					<i class="fa fa-heart text-info fa-5x"></i>
					<i class="fa fa-chevron-circle-right fa-2x text-primary"></i>
				</div>
		</div>
	</div>
</div>

@stop