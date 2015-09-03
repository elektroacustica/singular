@extends('user/base');

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			@foreach ($person as $d)
			<figure class="thumbnail animated fadeIn slow">
				<img src="{{ $d->avatar }}" class="img-avatar img-circle" />
				<figcaption>{{ $d->name }}</figcaption>
				
				<div class="component-panel animated slideInUp slow">

                    {!! Form::open(['route' => 'like']) !!}
						{!! Form::hidden('user_id', Auth::user()->id) !!}
						{!! Form::hidden('candidato', $d->id) !!}
						{!! Form::hidden('compatibility', 0) !!}
                    <button>
                        <i class="fa fa-arrow-circle-o-down fa-5x text-danger"></i>
                    </button>
                    {!! Form::close() !!}

					{!! Form::open(['route' => 'like']) !!}
						{!! Form::hidden('user_id', Auth::user()->id) !!}
						{!! Form::hidden('candidato', $d->id) !!}
						{!! Form::hidden('compatibility', 1) !!}
						<button>
							<i class="fa fa-heart text-info fa-5x"></i>
						</button>
					{!! Form::close() !!}
					<a href="{{ route('profile', \Auth::user()->name) }}">
						<i class="fa fa-refresh fa-5x"></i>
					</a>

				</div>

			</figure>
				
			@endforeach
		</div>
	</div>
</div>

@stop