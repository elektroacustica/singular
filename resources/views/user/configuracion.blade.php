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
                        {!! Form::open(['route' => 'user.config']) !!}
                            <strong>INTERES</strong>
                            <section class="text-center">
                                <div class="form-group display-inline">
                                    <label for="">Hombres</label>
                                    <input type="radio" name="interes" />
                                </div>
                                <div class="form-group display-inline">
                                    <label for="">Mujeres</label>
                                    <input type="radio" name="interes" />
                                </div>
                                <div class="form-group display-inline">
                                    <label for="">Ambos</label>
                                    <input type="radio" name="interes" />
                                </div>
                            </section>
                            <strong>BUSCAR POR EDAD</strong>
                            <section class="text-center">
                                <div class="form-group">
                                    <div class="form-group display-inline">
                                        <label for="">Edad minima</label>
                                        <select name="" class="form-control">
                                            @for($x = 18; $x<70; $x++)
                                                <option>{{ $x }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group display-inline">
                                        <label for="">Edad maxima</label>
                                        <select name="" class="form-control">
                                            @for($x = 18; $x<70; $x++)
                                                <option>{{ $x }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <strong>GRADO DE EDUCACION</strong>
                                <div class="form-group">
                                    secundaria <input type="radio" name="sex" value="male" checked>
                                    preparatoria <input type="radio" name="sex" value="female">
                                    carrera <input type="radio" name="sex" value="female">
                                    maestria <input type="radio" name="sex" value="female">
                                    doctorado <input type="radio" name="sex" value="female">
                                </div>
                                <strong>ESCRIBE UNA DESCRIPCION SOBRE TI</strong>
                                <div class="form-group">
                                    <textarea></textarea>
                                </div>
                            </section>
                            <strong>FECHA DE NACIMIENTO</strong>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="1992/04/12" required/>
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