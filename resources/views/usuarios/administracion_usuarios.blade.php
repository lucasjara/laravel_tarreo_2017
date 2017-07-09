@extends('base')

@section('content')
<center>
	<h1>Administración Usuarios</h1>
	<hr>
	<div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">Busqueda</div>
				<div class="panel-body">
					<form method="POST" class="form-inline" role="form">
						<div class="form-group">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
							<input type="text" class="form-control" name="nombre">
							<select class="form-control" name="estado">
								<option value="ID">ID</option>
								<option value="RUT">RUT</option>
								<option value="NOMBRE">NOMBRE</option>
							</select>
							<input type="submit" class="btn btn-primary" 
							value="Buscar">
						</div>
					</form>
				</div>
			</div>
			<hr>
			<div class="panel panel-primary">
				<div class="panel-heading">Administrar Usuarios</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>RUT</th>
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>CORREO</th>    
								<th>USUARIO</th>
								<th>NUMERO SOS</th>
								<th>PERSONA</th>
								<th>ACCIÓN</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->rut }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->last_name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->user }}</td>
								<td>{{ $user->number }}</td>
								<td>{{ $user->relevant_person }}</td>
								<form action="{{ route('redirect_user_edit') }}">
									<td>
										<input type="hidden" name="id" value="{{ $user->id }}">
										<input type="submit" class="btn btn-primary" value="Editar">
									</td>
								</form>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</center>

@endsection