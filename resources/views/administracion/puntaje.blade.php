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
										<td>{{ $id[$i] }}</td>
										<td>{{ $nombre[$i] }}</td>
										<td>{{ $apellido[$i] }}</td>
										@for ($y = 0; $y < 2; $y++)
										<td>{{ $puntajes[$z] }}</td>
											@php
												$z++;
											@endphp
										@endfor
										<td>{{ $total[$contador] }}</td>
										<td><a href="{{ route('administrar', $id[$i]) }}"><button class="btn btn-primary">Ver Detalle</button></a></td>
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