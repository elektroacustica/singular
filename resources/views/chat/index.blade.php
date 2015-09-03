@extends('user/base');

@section('content')

    <div class="container">
        <div class="list-group">
            @foreach($data as $d)
                <a href="{{ route('chat', $d->id) }}" class="list-group-item">
                    <img src="{{ $d->avatar  }}" class="img-circle" width="50px"/>
                    <span class="pull-right">{{ $d->name }}</span><i class="fa fa-power-off text-primary pull-right"></i>
                </a>
            @endforeach

        </div>
    </div>

@stop