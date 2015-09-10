@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<section id="tablas">
		<div class="panel panel-default">
		
				<div class="panel-heading">Citas</div>
				<div class="panel-body">


					{!! Form::open(['route' => 'cita/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}

					<div class="form-group">
						<label for="exampleInputName2">Dia</label>
						{!! Form::text('fecha',null,['class' => 'form-control', 'placeholder' => 'Selecione el dia ']) !!}
					</div>

					<button type="submit" class="btn btn-primary">Buscar</button

				</div>
			{!! Form::close() !!}

	<br>

	<table class="table table-striped">
		<thead>
			<tr>

			<th>CODIGO</th>
			<th>FECHA</th>
			<th>HORA</th>
			<th>ASESOR</th>
			<th>LUGAR</th>
			<th></th>
		
			</tr>
		</thead>
	<tbody>
	@foreach($citas as $cita)
		<tr>
			<td>{{ $cita->id }}</td>
			<td>{{ $cita->Fecha }}</td>
			<td>{{ $cita->hora }}</td>
			<td>{{ $cita->Nombre_as }}</td>
			<td>{{ $cita->lugar }}</td>
			<td>


				<a class="btn btn-primary"  type="hidden" href="{{ route('cita/editar' ,['id' => $cita->id]) }}" >Asignar</a>
			
			</td>
		</tr>


	@endforeach

	
	</tbody>
		
	</table>
{!! Form::close() !!}
	 </section>
           
      
	</div>
	</div>
	</div>
	</div>
</div>
@endsection
@section('contentfin')

@endsection