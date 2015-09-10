@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<section id="tablas">
		<div class="panel panel-default">
		
				<div class="panel-heading">Citas</div>
				<div class="panel-body">
		{!! Form::open(['route' => 'cita.show', 'method' => 'post', 'novalidate', 'class' => 'form‐inline' ,'role' => 'search']) !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>CODIGO</th>
			<th>FECHA</th>
			<th>HORA</th>

			<th>ASESOR</th>
			<th>LUGAR</th>
		
			</tr>
		</thead>
	<tbody>
	@foreach($citas as $cita)
		<tr>
			<td>{{ $cita->Codigo }}</td>
			<td>{{ $cita->Fecha }}</td>
			<td>{{ $cita->hora }}</td>

			<td>{{ $cita->Nombre_as }}</td>
			<td>{{ $cita->lugar }}</td>
			<td>
				<a class="btn btn-primary" name="asignar" type="hidden" id="asignar" href="{{ route('cita/editar' , ['Codigo' => $cita->Codigo]) }}" >Asignar</a>
			
			</td>
		</tr>


	@endforeach

	
	</tbody>
		
	</table>

	 </section>
           
      
	</div>
	</div>
	</div>
	</div>
</div>
@endsection
@section('contentfin')

@endsection