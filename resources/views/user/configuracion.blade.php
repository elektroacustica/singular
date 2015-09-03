@extends('user/base');

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Configuracion
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'like']) !!}
                            <strong>INTERES</strong>
                            <section class="">
                                <div class="form-group">
                                    <label for="">Hombres</label>
                                    {!! Form::checkbox('genero', null, true) !!}
                                </div>
                                <div class="form-group">
                                    <label for="">Mujeres</label>
                                    {!! Form::checkbox('genero', null, true) !!}
                                </div>
                            </section>
                        <strong>Mostrar edades</strong>
                        <section>
                            <div class="form-group">
                                <label for="">Edad minima</label>
                                <select name="" class="form-control">
                                    @for($x = 15; $x<70; $x++)
                                        <option>{{ $x }}</option>
                                    @endfor
                                </select>
                                <label for="">Edad maxima</label>
                                <select name="" class="form-control">
                                    @for($x = 15; $x<70; $x++)
                                        <option>{{ $x }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info">Guardar</button>
                            </div>
                        </section>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@stop