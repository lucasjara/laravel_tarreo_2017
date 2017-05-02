@extends('base')

@section('content')

@foreach($categories as $category)
	{{ $category->name }}
@endforeach
<center>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Busqueda</div>
					<div class="panel-body">
						<div class="row">
						<form class="form-inline">
							<input type="text" class="form-control">
								<select class="form-control">
									<option value="ID">ID</option>
									<option value="rut">RUT</option>
									<option value="nombre">NOMBRE</option>
								</select>
								<input type="submit" class="btn btn-primary" value="buscar">
							</form>
						</div>
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">LISTADO DE PUNTAJES</div>
					<div class="panel-body">
						<table class="table table-bordered table-responsive" style="text-decoration : none;">
							<thead>
								<tr>
									<th>ID</th>
									<th>NOMBRE</th>
									@foreach($categories as $category)
										<th>{{ $category->name }}</th>
									@endforeach
									<th>TOTAL</th>
									<th>ACCION</th>
								</tr>
							</thead>
							<tbody>
									@php
										$z = 0;
									@endphp
								@for ($i = 0; $i < 3; $i++)
									<tr>	<!-- ID|NOMBRE|CATEGORIA|TOTAL|ACCION-->
										<td>{{ $id[$i] }}</td>
										<td>{{ $nombre[$i] }}</td>
    									@for ($y = 0; $y < 2; $y++)
    										<td>{{ $puntajes[$z] }}</td>
    										@php
												$z =$z+1;
											@endphp
										@endfor
										<td>{{ $total[$i] }}</td>
										<td>ACCIÓN</td>
									</tr>
								@endfor
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</center>
	@endsection
