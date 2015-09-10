@extends('user/base')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.slider.min.css') }}">
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Configuracion
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'user.config', 'method' => 'PUT']) !!}
                            <strong class=" text-muted">INTERES</strong>
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
                            <strong class="text-muted">EDAD</strong>
                            <section class="text-center">
                                <div class="form-group">
                                    <div class="form-group">
                                        <b class="margin-right">18 </b>
                                        <input id="ex2" type="text" class="span2" value="" data-slider-min="18" data-slider-max="45" data-slider-step="1" data-slider-value="[18,25]"/> <b>+45</b>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <strong>Ubicacion</strong>
                                <div class="form-group">
                                    @if($user->educacion == 'secundaria')
                                        secundaria <input type="radio" name="educacion" value="secundaria" checked/>
                                    @else
                                        secundaria <input type="radio" name="educacion" value="secundaria" />
                                    @endif

                                    @if($user->educacion == 'preparatoria')
                                        preparatoria <input type="radio" name="educacion" value="preparatoria" checked/>
                                    @else
                                        preparatoria <input type="radio" name="educacion" value="preparatoria" />
                                    @endif

                                    @if($user->educacion == 'carrera')
                                        carrera <input type="radio" name="educacion" value="carrera" checked/>
                                    @else
                                        carrera <input type="radio" name="educacion" value="carrera" />
                                    @endif

                                    @if($user->educacion == 'maestria')
                                        maestria <input type="radio" name="educacion" value="maestria" checked/>
                                    @else
                                        maestria <input type="radio" name="educacion" value="maestria" />
                                    @endif

                                    @if($user->educacion == 'doctorado')
                                        doctorado <input type="radio" name="educacion" value="doctorado" checked/>
                                    @else
                                        doctorado <input type="radio" name="educacion" value="doctorado" />
                                    @endif
                                </div>
                                <strong>ESCRIBE UNA DESCRIPCION SOBRE TI</strong>
                                <div class="form-group">
                                    <textarea name="descripcion">
                                        {{ $user->descripcion }}
                                    </textarea>
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
    </div>
    </div>

@stop

@section('script')
    <script src="{{ asset('js/vendor/bootstrap.slider.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@stop