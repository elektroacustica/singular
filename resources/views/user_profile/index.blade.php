@extends('user/base');

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			@foreach ($person as $d)
			<figure class="thumbnail">
				<img src="{{ $d->avatar }}" class="img-avatar img-circle" width="" />
				<figcaption>{{ $d->name }}</figcaption>
				
				<div class="component-panel">
					<i class="fa fa-undo text-warning fa-2x"></i>
					<i class="fa fa-arrow-circle-o-down fa-5x text-danger"></i>
					<a href="{{ route('like', [1,3]) }}">
						<i class="fa fa-heart text-info fa-5x"></i>
					</a>

					<i class="fa fa-chevron-circle-right fa-2x text-primary"></i>
				</div>

			</figure>
				
			@endforeach
		</div>
	</div>
</div>

@stop