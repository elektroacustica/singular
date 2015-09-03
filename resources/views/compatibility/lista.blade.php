@extends('user/base');

@section('content')

    <div class="container">
        <div class="row">
               @foreach($lista as $d)
                   <section class="col-md-4 col-sm-4">
                       <figure class="thumbnail">
                           <img src="{{ $d->avatar }}" class="img-avatar img-circle animated fadeIn slow" />
                           <figcaption class="text-center">
                               <p>{{ $d->name }}</p>
                               <p>{{ $d->local }}</p>
                           </figcaption>
                           <div class="component-panel animated fadeIn text-center">
                               <a href="{{ route('chat', $d->id) }}">
                                   <i class="fa fa-weixin fa-2x text-success"></i>
                               </a>
                           </div>
                       </figure>
                   </section>
               @endforeach
            </div>
        </div>
    </div>

@stop