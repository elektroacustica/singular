@extends('user/base');

@section('content')

    <div class="container">
        <div class="row">
               @foreach($lista as $d)
                   <section class="col-md-4">
                       <figure class="thumbnail">
                           <img src="{{ $d->avatar }}" class="img-avatar img-circle" />
                           <figcaption class="text-center">
                               <p>{{ $d->name }}</p>
                               <p>{{ $d->local }}</p>
                           </figcaption>
                       </figure>
                   </section>
               @endforeach
            </div>
        </div>
    </div>

@stop