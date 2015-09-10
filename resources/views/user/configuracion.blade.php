@extends('user/base')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.slider.min.css') }}">
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                    <div class="panel-body">
                        {!! Form::open(['route' => 'user.config', 'method' => 'PUT']) !!}
                            <p class=" text-muted">INTERES</p>
                            <section class="text-center">
                                <div class="form-group display-inline">
                                    @if($user->interes == 'hombre')
                                        <input type="radio" name="interes" value="hombre" checked/>
                                    @else
                                        <input type="radio" name="interes" value="hombre" />
                                    @endif
                                        <label for="">Hombres</label>

                                </div>
                                <div class="form-group display-inline">
                                    @if($user->interes == 'mujer')
                                        <input type="radio" name="interes" value="mujer" checked/>
                                    @else
                                        <input type="radio" name="interes" value="mujer" />
                                    @endif
                                        <label for="">Mujeres</label>
                                </div>
                                <div class="form-group display-inline">
                                    @if($user->interes == 'ambos')
                                        <input type="radio" name="interes" value="ambos" checked/>
                                    @else
                                        <input type="radio" name="interes" value="ambos" />
                                    @endif
                                        <label for="">Ambos</label>
                                </div>
                            </section>
                            <p class="text-muted">EDAD</p>
                            <section class="text-center">
                                <div class="form-group">
                                    <div class="form-group">
                                        <b class="margin-right">18 </b>
                                        <input id="ex2" type="text" class="span2" value="" data-slider-min="18" data-slider-max="45" data-slider-step="1" data-slider-value="[18,25]"/> <b>+45</b>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <p class="text-muted">UBICACION</p>
                                <div class="form-group">
                                    <select name="" class="form-control">
                                        <option value="" selected disabled>Pais</option>
                                        <option value=""></option>
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <select name="" class="form-control">
                                        <option selected disabled>ciudad</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group text-center">
                                    <i class="fa fa-map-marker fa-2x text-primary"></i> localizar
                                    <p id="localizacion"></p>
                                </div>
                            </section>
                            <strong>FECHA DE NACIMIENTO</strong>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="1992-04-12" value="{{ $user->fecha_nacimiento }}" name="fecha_nacimiento"/>
                                    {!! Form::hidden('user_id',\Auth::user()->id ) !!}
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info">Guardar</button>
                                </div>


                        {!! Form::close() !!}
                    </div>

            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ asset('js/vendor/bootstrap.slider.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.exp&sensor=true"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@stop