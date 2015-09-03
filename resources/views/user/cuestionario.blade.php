@extends('user/base');

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>Antes de continuar es necesario llenar el siguiente cuestionario</h2>
			<div class="panel panel-info">
				<div class="panel-heading">Cuestionario</div>
				<div class="panel-body">
					
					@include('partial/error')

					<form class="form-horizontal" role="form" method="GET" action="{{ route('profile', 1) }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre completo</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Correo electronico</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Me interesa</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Tipo de relacion</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<a href="{{ route('profile', Auth::user()->name) }}" class="btn btn-info">Continuar</a>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop