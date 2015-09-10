@extends('app')
@section('content')
		<div class="container">
			<div class="row">
			<section id="tablas">
				<div class="col‐md‐10 col‐md‐offset‐1">

				<div class="panel panel-default">
				<div class="panel-heading">Confirmar </div>
				<div class="panel-body">
						
						@include('Plantilla.validacion')
					{!! Form::model($citas, ['route' => 'cita.update', 'method' => 'put', 'novalidate']) !!}
				

					
						{!! Form::hidden('id', $citas->id) !!}

					
							
								
						{!! Form::label('date','Fecha') !!}
						{!! Form::text('Fecha_Cita', null,['class' => 'no-seleccionable', 'placeholder' => 'Bazar']) !!}
					

		
						{!! Form::label('hora', 'Hora') !!}
						{!! Form::text('Hora_Cita', null,['class' => 'no-seleccionable', 'placeholder' => 'Bazar']) !!}
					
							
					

					
						{!! Form::hidden('Estado_Cita', null,['class' => 'form-control', 'placeholder' => 'Bazar']) !!}

						
						{!! Form::hidden('Fk_IdAprendiz', Auth::user()->id,['class' => 'form-control', 'placeholder' => 'Bazar']) !!}
												
						{!! Form::hidden('Fk_IdLugar', null,['class' => 'form-control', 'placeholder' => 'Bazar']) !!}
						
						{!! Form::hidden('Fk_IdAsesor', null,['class' => 'form-control', 'placeholder' => 'Bazar']) !!}
						
					
						<div class="form‐group">
							{!! Form::submit('Enviar', ['class' => 'btn btn‐success ' ] ) !!}
						</div>
			
					
					{!! Form::close() !!}
			</div>
			</div>
			</div>
			</section>
		</div>
	</div>
@endsection

