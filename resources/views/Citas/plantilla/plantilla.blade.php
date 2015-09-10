						
						<div class="form-group">
								
						{!! Form::label('date','Fecha') !!}
						{!! Form::date('Fecha_Cita', \Carbon\Carbon::now(),['class' => 'form-control']) !!}
						
						</div>

						<div class="form-group">
						{!! Form::label('hora', 'Hora') !!}
						<input type="time" name="Hora_Cita" class="form-control">
							
						</div>

						
						<div class="form-group">
								
						{!! Form::label('date','Estado') !!}
						{!! Form::select('Estado_Cita', array('A' => 'Asignada', 'S' => 'Suspendida', 'C' =>'Creada'), 'C',['class' => 'form-control']) !!}
						
						</div>


<<<<<<< HEAD
						{!! Form::hidden('Fk_IdAprendiz',1 , ['class' => 'form-control', 'placeholder' => 'Camiseta Blanca']) !!}
=======
						<div class="form-group">
						{!! Form::label('Nombre', 'Nombre') !!}
						{!! Form::select('Fk_IdAprendiz', $aprendiz, null,['class' => 'form-control']) !!}
												
						</div>
>>>>>>> 3bf38e7ca71592bde9ad09494c4065905245c3a5


						<div class="form-group">
						{!! Form::label('Lugar', 'Lugar') !!}
						{!! Form::select('Fk_IdLugar', $lugar, null,['class' => 'form-control']) !!}
												
						</div>


						<div class="form-group">
						{!! Form::label('Nombrea', 'Nombre del asesor') !!}
						{!! Form::select('Fk_IdAsesor', $asesor, null,['class' => 'form-control']) !!}
												
						</div>


					