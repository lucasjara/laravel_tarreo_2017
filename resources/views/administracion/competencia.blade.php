@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-md-offset-1 col-lg-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">CATEGORIAS</div>
				<div class="panel-body">
					<div class="row">
						<form class="form-inline col-lg-12">
							<input type="text" class="form-control col-lg-8 col-md-8" name="crear">
							<button class="btn btn-primary col-lg-4 col-md-4 col-md-offset-1" type="submit">Crear</button>
						</form>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<table class="table table-bordered table-responsive" style="text-decoration : none;">
								<thead>
									<tr>
										<th>LISTADO DE CATEGORIAS</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="radio" name="juego" value="" 
											style="margin-left:auto; margin-right:auto;">PC</td>
											
										</tr>
										<tr>
											<td><input type="radio" name="juego" value="" 
												style="margin-left:auto; margin-right:auto;">CONSOLAS</td>
											
										</tr>
										<tr>
											<td><input type="radio" name="juego" value="" 
													style="margin-left:auto; margin-right:auto;">TRIVIA</td>
											
										</tr>
								</tbody>
							</table>
							<button type="submit" class="btn btn-danger col-md-offset-2">Eliminar</button><button class="btn btn-success col-md-offset-2" type="submit">Limpiar</button>
						</div>
					</div>
								
					</div>
				</div>
			</div>
		<div class="col-lg-4 col-md-4 col-md-offset-2 col-lg-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">TORNEOS</div>
				<div class="panel-body">
					<div class="row">
						<form class="form-inline col-lg-12">
							<input type="text" class="form-control col-lg-8 col-md-8" name="crear">
							<button class="btn btn-primary col-lg-4 col-md-4 col-md-offset-1" type="submit">Crear</button>
						</form>
					</div>
					<div class="row"> 
						<div class="col-md-10 col-md-offset-1">
							<table class="table table-bordered table-responsive" style="text-decoration : none;">
								<thead>
									<tr>
										<th>LISTADO DE JUEGOS</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="radio" name="juego" value="" 
											style="margin-left:auto; margin-right:auto;">SMASH BROS</td>
											
										</tr>
										<tr>
											<td><input type="radio" name="juego" value="" 
												style="margin-left:auto; margin-right:auto;">MORTAL KOMBAT</td>
											
										</tr>
										<tr>
											<td><input type="radio" name="juego" value="" 
													style="margin-left:auto; margin-right:auto;">KILLER INSTICT</td>
											
										</tr>
								</tbody>
							</table>
							<button type="submit" class="btn btn-danger col-md-offset-2">Eliminar</button><button class="btn btn-success col-md-offset-2" type="submit">Limpiar</button>
						</div>
					</div>
								
					</div>
				</div>
			</div>
		</div>
	</div>
			@endsection