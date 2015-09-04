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
                        {!! Form::open(['route' => 'user.config', 'method' => 'PUT']) !!}
                            <strong>INTERES</strong>
                            <section class="text-center">
                                <div class="form-group display-inline">
                                    <label for="">Hombres</label>
                                    @if($user->interes == 'hombre')
                                        <input type="radio" name="interes" value="hombre" checked/>
                                    @else
                                        <input type="radio" name="interes" value="hombre" />
                                    @endif

                                </div>
                                <div class="form-group display-inline">
                                    <label for="">Mujeres</label>
                                    @if($user->interes == 'mujer')
                                        <input type="radio" name="interes" value="mujer" checked/>
                                    @else
                                        <input type="radio" name="interes" value="mujer" />
                                    @endif
                                </div>
                                <div class="form-group display-inline">
                                    <label for="">Ambos</label>
                                    @if($user->interes == 'ambos')
                                        <input type="radio" name="interes" value="ambos" checked/>
                                    @else
                                        <input type="radio" name="interes" value="ambos" />
                                    @endif
                                </div>
                            </section>
                            <strong>BUSCAR POR EDAD</strong>
                            <section class="text-center">
                                <div class="form-group">
                                    <div class="form-group display-inline">
                                        <label for="">Edad minima</label>
                                        <select name="edad_min" class="form-control">
                                            @for($x = 18; $x<70; $x++)
                                                @if($user->edad_min == $x)
                                                    <option selected="selected">{{ $x }}</option>
                                                @else
                                                    <option>{{ $x }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group display-inline">
                                        <label for="">Edad maxima</label>
                                        <select name="edad_max" class="form-control">
                                            @for($x = 18; $x<70; $x++)
                                                @if($user->edad_max == $x)
                                                <option selected="selected">{{ $x }}</option>
                                                @else
                                                    <option>{{ $x }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <strong>GRADO DE EDUCACION</strong>
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