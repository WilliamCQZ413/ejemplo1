@extends('app')
	@section('content')
		<div class="container">
			<div class="row">
			<section id="tablas">
			{!! Form::open(['route' => 'evidencia.index', 'method' => 'GET', 'novalidate', 'class' => 'form‐inline' ]) !!}
				<div class="navbar-form navbar-left">
					<label for="exampleInputName2">Nombre</label>
				<div class="panel panel-default">
				<div class="panel-heading">Evidencias</div>
				<div class="panel-body">
					{!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Documento']) !!}
					
							

					<button type="submit" class="btn btn-primary">Buscar</button>
					<a href="{{ route('evidencia.index') }}" class="btn btn-success">Todo</a>
					<a href="{{ route('evidencia.create') }}" class="btn btn-success">Subir evidencia</a>
					</div>
			{!! Form::close() !!}
		<br>
		
		<table class="table table-striped">
			<thead>
				<tr>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Descripcion</th>
			
				</tr>
			</thead>
		<tbody>
		@foreach($evidencias as $evidencia)
			<tr>
				<td>{{ $evidencia->Nombre_Lugar }}</td>
				<td>{{ $evidencia->Tipo_Lugar }}</td>
				<td>{{	$evidencia->Descripcion }}</td>
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