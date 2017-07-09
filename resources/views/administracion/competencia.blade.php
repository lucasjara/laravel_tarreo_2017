@extends('base')

@section('content')
<div class="row">
	<div class="col-lg-5 col-lg-offset-3">
		<h1 style="text-align: center;">Listado Competencias</h1></div><div class="col-lg-1 col-lg-offset-2"><button style="margin-top: 20px;" class="btn btn-success">AGREGAR</button></div>
	</div>
<hr>
	<div class="container">
		<div class="col-lg-12 col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading"></div>
				<div class="panel-body">
					<table class="table table-bordered table-responsive" style="text-align: center;">
						<thead>
							<tr>
								<th style="text-align: center;">ID</th>
								<th style="text-align: center;">CATEGORIA</th>
								<th style="text-align: center;">COMPETENCIA</th>
								<th style="text-align: center;">ACCIÓN</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($categories as $category): ?>
								<tr>
									<td>{{ $category->id }}</td>
									<td>{{ $category->name }}</td>
									<td>{{ $category->competencia }}</td>
									<td><button type="submit" class="btn btn-primary btn-sm">MODIFICAR</button><button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button></td>	
								</tr>
							<?php endforeach ?>

						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
	@endsection