@extends('app')

@section('content')
<div class="container">
			<div class="row">
			<section id="tablas">
				<div class="col‐md‐10 col‐md‐offset‐1">

				<div class="panel panel-default">
				<div class="panel-heading">CREAR CITA </div>
				<div class="panel-body">


						@include('Plantilla.validacion')
					{!! Form::open(['route' => 'cita.store', 'method' => 'post', 'novalidate']) !!}
			
							@include('Citas.plantilla.plantilla')

						<div class="form‐group">
							{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
						</div>

					{!! Form::close() !!}

		</div>
				</div>
				</div>
				</section>
			</div>
		</div>

@endsection
