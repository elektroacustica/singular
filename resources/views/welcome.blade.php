@extends('base')

@section('content')

<section id="banner">
    <article class="container">
    	<div class="row">
        <h1 class="text-center">The social network for meeting new people</h1>
            <div class="col-md-4 tex-center">
                <img src="{{ asset('img/heart.png') }}" class="img-responsive" />
            </div>
            <div class="col-md-4 text-center">
                @include('partial/redes')                   
            </div>
            <div class="col-md-4">
                @foreach ($user as $d)
                    <img src="{{ $d->avatar }}" class="img-home img-circle" />
                @endforeach
            </div>
    	</div>
        
    </article>
</section>

@stop