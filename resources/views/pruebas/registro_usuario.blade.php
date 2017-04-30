@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<section>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<h1 >Registro usuarios Tarreo</h1>
					</div>                    
					<div class="col-lg-6 col-md-6">
						<div align="right">
							<img src="{{ asset('img/logo-inacap.jpg') }}" class="img-rounded">
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<form>
							<div class="form-group">
								<input type="hidden" name="code" value="">
								<label for="usuario">Nombre Usuario</label>
								<input class="form-control" id="usuario" type="text" name="usuario" value="" maxlength="25">
							</div>
							<div class="form-group">    
								<label for="rut">Rut</label>
								<input class="form-control" id="rut" type="text" name="rut" value="" maxlength="11" data-inputmask="'mask': '99.999.999-9'" >
							</div>
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input class="form-control" id="nombre" type="text" name="nombre" value="" maxlength="25">
							</div>
							<div class="form-group">    
								<label for="apellido">Apellidos</label>
								<input class="form-control" id="apellido" type="text" name="apellido" value="" maxlength="50">
							</div>
							<div class="form-group">
								<label for="correo">Correo</label>
								<input class="form-control" id="correo" type="text" name="correo" value="" maxlength="50">
							</div>
							<div class="form-group">
								<label for="password">Contraseña</label>
								<input class="form-control" type="password" name="password" type="text" id="password"  maxlength="30">
							</div>
							<div class="form-group">
								<label for="rep-password">Repetir Contraseña</label>
								<input class="form-control" type="password" name="rep-password" type="text" id="rep-password" maxlength="30">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Registrar" name="registrar" >
								<input type="reset" class="btn btn-success" value="limpiar" name="limpiar">
							</div>
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@endsection