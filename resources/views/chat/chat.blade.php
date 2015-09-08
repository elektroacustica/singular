@extends('user/base');

@section('content')

    <div class="container">
        <div class="list-group">
            <div class="well well-sm well-gray">
                <img src="{{ $chat->avatar  }}" class="img-circle" width="50px"/>
                Hola hay alguien ahi ¬¬ ?
            </div>
        </div>
        <div id="contenido">



        </div>
    </div>
    <div id="contenido"></div>
    <div class="container-fluid" id="chat">
        <div class="form-group">
            <input type="text" class="form-control "/>
        </div>
        <div class="form-group">
            <button class="btn btn-info">Enviar</button>
        </div>
    </div>
    <script id="plantilla" type="text/x-handlebars-template">
        <div class="list-group">
            <div class="well well-sm well-gray">
                <img src="{{ $chat->avatar  }}" class="img-circle" width="50px"/>
                @{{ msg }}
            </div>
        </div>
    </script>

@stop

@section('script')
    <script src="{{ asset('js/vendor/handlebars.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script>

        var fuente = $('#plantilla').html();
        var plantilla = Handlebars.compile(fuente);

        var socket = io('http://localhost:3000');

        var id = socket.unique = $('.well img').attr('src');

        $('button').on('click', function (){
            var x = $('input').val();
            socket.emit('chat',id, x);
            $('input').val('');
        });

        socket.on(id, function (data) {
            console.log(data);
            var datos = {msg : data};
            var html = plantilla(datos);

            $('#contenido').html(html);
        });
    </script>

    <!--<script>

        $('button').on('click', function(e){
            var msg = $('input').val();
            var html = '<div class="list-group animated fadeIn slow"><div class="well well-sm well-gray"><img src="{{ \Auth::user()->avatar }}" class="img-circle" width="50px"/> '+ msg + '</div>';
            $('.container').append(html);
            $('input').val('');
        })
    </script>
    -->
@stop
