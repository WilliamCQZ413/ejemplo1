@extends('app')

@section('content')

<div class="container">
	<div class="row">
	<section id="tablas">
	<div class="col‐md‐10 col‐md‐offset‐1">

	<div class="panel panel-default">
				<div class="panel-heading">Crear Nuevo Evento</div>
				<div class="panel-body">

						
					@include('Plantilla.validacion')
					{!! Form::open(['route' => 'evento.store', 'method' => 'post', 'novalidate']) !!}
			
						@include('eventos.plantilla.plantilla')

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
