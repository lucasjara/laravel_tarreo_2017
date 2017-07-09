@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					DETALLE PUNTAJE
				</div>
				<div class="panel-body">
					<table class="table table-responsive table-bordered">
						<thead>
							<tr>
								<th>Id</th>
								<th>CATEGORIA</th>
								<th>COMPETENCIA</th>
								<th>PUNTAJE</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($datos as $dato): ?>
								<tr>
									<td><?php  echo $dato->id ?></td>
									<td><?php  echo $dato->categoria ?></td>
									<td><?php  echo $dato->nombre ?></td>
									<td><?php  echo $dato->total ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection