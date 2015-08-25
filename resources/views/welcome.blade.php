@extends('base')

@section('content')

<section id="banner">
    <article class="container">
    	<div class="row">
    		<div class="col-md-4">
    			<img src="{{ asset('img/Heart.png') }}" width="300px" />
    		</div>
    		<div class="col-md-4  col-md-offset-4 text-center">
			    @if (Auth::guest())
				<section class="social text-center">
					<a href="{{ route('provider', 'facebook') }}" class="btn btn-facebook btn-block"><i class="fa fa-facebook">
						</i>Login con Facebook
					</a>
					<a href="{{ route('provider', 'twitter') }}" class="btn btn-twitter btn-block"><i class="fa fa-twitter">
						</i>Login con twitter
					</a>
					<a href="{{ route('login') }}" class="btn btn-singular btn-block">Login con <img src="{{ asset('favicon.png') }}" width="25px" />
					</a>
					<p class="social-text">Unete con tus redes sociales </p>
					<a href="{{ route('register') }}" class="btn btn-success btn-block">Crear cuenta <img src="{{ asset('favicon.png') }}" width="25px" />
					</a>
				</section>			    	
			    @else
			    <h2>Encuentra tu media naranja aqui en <em>S1ngular</em></h2>
			    <h1>{{ Auth::user()->name }}</h1>
			    	<img src="{{ Auth::user()->avatar }}" class="img-circle" />	
			    @endif
    		</div>
    	</div>
        
    </article>
</section>

@stop