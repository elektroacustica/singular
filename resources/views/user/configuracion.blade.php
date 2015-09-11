@extends('user/base')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.slider.min.css') }}">
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'user.config', 'method' => 'PUT']) !!}
                @foreach($user as $d)
                <p class=" text-muted">INTERES</p>
                <section class="text-center m-3">
                    <div class="form-group display-inline">
                        @if($d->interes == 'hombre')
                            <input type="radio" name="interes" value="hombre" checked/>
                        @else
                            <input type="radio" name="interes" value="hombre" />
                        @endif
                            <label for="">Hombres</label>
                    </div>
                    <div class="form-group display-inline">
                        @if($d->interes == 'mujer')
                            <input type="radio" name="interes" value="mujer" checked/>
                        @else
                            <input type="radio" name="interes" value="mujer" />
                        @endif
                            <label for="">Mujeres</label>
                    </div>
                    <div class="form-group display-inline">
                    @if($d->interes == 'ambos')
                            <input type="radio" name="interes" value="ambos" checked/>
                        @else
                            <input type="radio" name="interes" value="ambos" />
                        @endif
                        <label for="">Ambos</label>
                    </div>
                </section>
                @endforeach
                <p class="text-muted">EDAD</p>
                <section class="text-center">
                    <div class="form-group">
                        <div class="form-group">
                            <b class="margin-right">18 </b>
                            <input id="ex2" type="text" class="span2" name="edad_min" data-slider-min="18" data-slider-max="45" data-slider-step="1" data-slider-value="[21,27]"/> <b>+45</b>
                            {!! Form::hidden('edad_max', 45) !!}
                        </div>
                    </div>
                </section>
                <section>
                    <p class="text-muted">UBICACION</p>
                    <div class="form-group">
                        <select name="pais" class="form-control">
                            @foreach($user as $u)
                                @if($u->pais)
                                    <option selected readonly value="{{ $u->id }}">{{ $u->pais }}</option>
                                @else
                                    <option value="" selected disabled>Pais</option>
                                @endif
                            @endforeach
                            @foreach($pais as $d)
                                <option value="{{ $d->pais }}">{{ $d->pais }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="ciudad" class="form-control">
                            @foreach($user as $u)
                                @if($u->ciudad)
                                    <option selected readonly value="{{ $u->ciudad }}">{{ $u->ciudad }}</option>
                                @else
                                    <option value="" selected disabled>Ciudad</option>
                                @endif
                            @endforeach
                            @foreach($ciudad as $d)
                                <option value="{{ $d->ciudad }}">{{ $d->ciudad }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group text-center text-primary">
                        <button type="button" id="geolocalizacion">
                            <i class="fa fa-map-marker fa-3x"></i> Geolocalizacion
                        </button>
                        <p id="localizacion"></p>
                        {!! Form::hidden('geolocalizacion', null) !!}
                    </div>
                </section>

                <section class="tex-center">
                    <div class="form-group">
                        @foreach($user as $d)
                        <li class="list-group-item">
                            <button type="button" class="pull-right text-primary" id="biografia">
                                <i class="fa fa-angle-double-down fa-2x"></i>
                            </button>
                            Biografia
                            <input type="text" class="form-control" name="descripcion" hide="hide" value="{{ $d->descripcion }}">
                        </li>
                        <li class="list-group-item">
                            <button type="button" class="pull-right text-primary" id="estado_civil">
                                <i class="fa fa-angle-double-down fa-2x"></i>
                            </button>
                            Describe tu estado civil actual
                            <input type="text" class="form-control" name="estado_civil" hide="hide" value="{{ $d->estado_civil }}">
                        </li>
                        @endforeach
                    </div>
                </section>
                <div class="form-froup">
                    {!! Form::hidden('user_id', Auth::user()->id) !!}
                    <button class="btn btn-primary">Guardar</button>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>

@stop

@section('script')
    <script src="{{ asset('js/vendor/bootstrap.slider.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.exp&sensor=true"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@stop