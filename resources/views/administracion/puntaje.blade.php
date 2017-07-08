@extends('base')

@section('content')
<center>
	<h1>Administración Puntajes</h1>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">Busqueda</div>
					<div class="panel-body">
						<form class="form-inline">
							<input type="text" class="form-control">
							<select class="form-control">
								<option value="ID">ID</option>
								<option value="RUT">RUT</option>
								<option value="NOMBRE">NOMBRE</option>
							</select>
							<input type="submit" class="btn btn-primary" value="Buscar">
						</form>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-success">
						<div class="panel-heading">LISTADO DE PUNTAJES</div>
						<div class="panel-body">
							<table class="table table-bordered table-responsive">
								<thead>
									<tr>
										<th>ID</th>
										<th>NOMBRE</th>
										<th>APELLIDO</th>
										<?php foreach ($categories as $category): ?>
											<th>{{ $category->name }}</th>
										<?php endforeach ?>
										<th>TOTAL</th>
										<th>ACCION</th>
									</tr>
								</thead>
								<tbody>
										@php
											$z=0;
											$contador=0;
										@endphp
									@for($i = 0;$i < $numero; $i++)
									<tr>
										<td>{{ $id[0] }}</td>
										<td>{{ $nombre[0] }}</td>
										<td>{{ $apellido[0] }}</td>
										@for ($y = 0; $y < 2; $y++)
										<td>{{ $puntajes[$y] }}</td>
										@endfor
										<td>{{ $total[$contador] }}</td>
										<td><button class="btn btn-primary">Editar</button><button class="btn btn-danger">Eliminar</button></td>
									</tr>
										@php
											$contador++;
										@endphp
									@endfor
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</center>
@endsection