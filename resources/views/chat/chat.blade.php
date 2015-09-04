@extends('user/base');

@section('content')

    <div class="container">
        <div class="list-group">
            <div class="well well-sm well-gray">
                <img src="{{ $chat->avatar  }}" class="img-circle" width="50px"/>
                Hola hay alguien ahi ¬¬ ?
            </div>
        </div>
    </div>

    <div class="container-fluid" id="chat">
        <div class="form-group">
            <input type="text" class="form-control "/>
        </div>
        <div class="form-group">
            <button class="btn btn-info">Enviar</button>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script>

        $('button').on('click', function(e){
            var msg = $('input').val();
            var html = '<div class="list-group animated fadeIn slow"><div class="well well-sm well-gray"><img src="{{ \Auth::user()->avatar }}" class="img-circle" width="50px"/> '+ msg + '</div>';
            $('.container').append(html);
            $('input').val('');
        })
    </script>
@stop
