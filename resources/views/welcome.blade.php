@extends('base')

@section('content')

<section id="banner">
    <article class="container">
    	<div class="row">
    		<div class="col-md-4">
    			<img src="{{ asset('img/Heart.png') }}" width="300px" />
    		</div>
    		<div class="col-md-8 text-center">
			    @if (Auth::guest())
			    	
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