@extends('base')
@section('content')
<div class="container">
	<div class="col-lg-4 col-lg-offset-4">
		<div class="panel panel-primary">
			<div class="panel-heading">REGISTRAR COMPETENCIAS</div>
			<div class="panel-body">
				<form role="form" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" class="form-control" name="name" placeholder="Ingrese nombre de la competencia">
					</div>
					<div class="form-group">
						<label>Categoria:</label>
						<select class="form-control" name="category_name">
						<?php foreach ($categories as $category): ?>
							<option name="category_name">{{ $category->name }}</option>
						<?php endforeach ?>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection