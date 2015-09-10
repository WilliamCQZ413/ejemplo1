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

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('cita.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('cita.create') }}" class="btn btn-success">Crear Cita</a>
				<a href="{{ route('lugar.index') }}" class="btn btn-info">Sitios</a>
				<a href="{{ route('cita.show') }}" class="btn btn-danger">Citas suspendidas</a>

				
				


				</div>
		{!! Form::close() !!}
		
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>ID</th>
			<th>FECHA</th>
			<th>ESTADO</th>
			<th>HORA</th>
			<th>APRENDIZ</th>
			<th>DOCUMENTO</th>
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
			<td>{{ $cita->Estado }}</td>
			<td>{{ $cita->hora }}</td>
			<td>{{ $cita->Nombre_apr }}</td>
			<td>{{ $cita->Documento }}</td>
			<td>{{ $cita->Nombre_as }}</td>
			<td>{{ $cita->lugar }}</td>
			<td>
				<a class="btn btn-primary" href="{{ route('cita.edit' , ['id' => $cita->id]) }}" >Editar</a>
				<a class="btn btn-danger" href="{{ route('cita/destroy', ['id' => $cita->id]) }}" >Eliminar</a>
			</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	     {!! $citas->render()!!}
	 </section>
      
      
	</div>
	</div>
	</div>
	</div>
</div>
@endsection
@section('contentfin')

