@extends('base')

@section('content')
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
									<th>PC</th>
									<th>CONSOLA</th>  
									<th>TRIVIA</th>
									<th>TOTAL</th>
									<th>ACCION</th>
								</tr>
							</thead>
							<tbody>
								<tr align="center">
									<td>1</td>
									<td>LJARA</td>
									<td>70</td>
									<td>10</td>
									<td>5</td>
									<td>85</td>
									<td><input type="button" class="btn btn-primary col-md-5" name="editar" value="editar"><input type="button" name="eliminar" class="btn btn-danger col-md-5" value="eliminar"></td>
								</tr>
								<tr align="center">
									<td>2</td>
									<td>JAKESILLO</td>
									<td>100</td>
									<td>10</td>
									<td>0</td>
									<td>110</td>
									<td><input type="button" class="btn btn-primary col-md-5" name="editar" value="editar"><input type="button" name="eliminar" class="btn btn-danger col-md-5" value="eliminar"></td>
								</tr>
								<tr align="center">
									<td>3</td>
									<td>DIOS</td>
									<td>20</td>
									<td>50</td>
									<td>40</td>
									<td>110</td>
									<td><input type="button" class="btn btn-primary col-md-5" name="editar" value="editar"><input type="button" name="eliminar" class="btn btn-danger col-md-5" value="eliminar"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</center>
	@endsection