@extends('user/base');

@section('content')

    <div class="container">
        <div class="list-group">
            <div class="well well-sm">
                <img src="{{ $chat->avatar  }}" class="img-circle" width="50px"/>
                Look, I'm in a small well!
            </div>
        </div>
    </div>

@stop