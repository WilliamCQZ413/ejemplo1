@extends('app')
@section('content')
		<div class="container">
			<div class="row">
			<section id="tablas">
				<div class="col‐md‐10 col‐md‐offset‐1">

<<<<<<< HEAD
				<div class="panel panel-default">
				<div class="panel-heading">CREAR SITIO	 </div>
=======
<div class="container">
	<div class="row">
	<div class="col‐md‐10 col‐md‐offset‐1">

	<div class="panel panel-default">
<<<<<<< HEAD
				<div class="panel-heading">Crear Nuevo Lugar</div>
>>>>>>> 3bf38e7ca71592bde9ad09494c4065905245c3a5
				<div class="panel-body">
					@include('Plantilla.validacion')
					{!! Form::open(['route' => 'lugar.store', 'method' => 'post', 'novalidate']) !!}
					

							@include('lugares.plantilla.plantilla')
			
						<div class="form‐group">
						{!! Form::submit('Enviar', ['class' => 'btn btn‐success ' ] ) !!}
						</div>
				{!! Form::close() !!}
				</div>
<<<<<<< HEAD
				</div>
				</div>
				</section>
			</div>
		</div>
@endsection
=======
	</div>
	</div>
=======
				<div class="panel-heading">Nuevo Lugar</div>
				<div class="panel-body">

				@include('Plantilla.validacion')
	{!! Form::open(['route' => 'lugar.store', 'method' => 'post', 'novalidate']) !!}
			
				@include('lugares.plantilla.plantilla')

			<div class="form‐group">
					{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
			</div>
	{!! Form::close() !!}

		</div>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	</div>
</div>
@endsection
>>>>>>> 3bf38e7ca71592bde9ad09494c4065905245c3a5
