@extends('base')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<form class="form-horizontal form-label-left" novalidate method="POST">
			<span class="section">Informacion Personal</span>

			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre<span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12 form-label-left">
					<input class="form-control col-md-7 col-xs-12" data-validate-length-range="3" maxlength="20" name="nombre"   required="required" type="text">
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellido<span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  maxlength="20" name="apellido" required="required" type="text">
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Rut<span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99.999.999-*'" numericInput="true" data-validate-length-range="8" name="rut" required="required" type="text">
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Correo<span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="email"  name="correo" required="required" class="form-control col-md-7 col-xs-12" maxlength="20" >
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Numero de Emergencia<span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="numero" required="required" class="form-control col-md-7 col-xs-12" maxlength="20" >
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Persona<span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="persona" required="required" type="text" maxlength="20" >
				</div>
			</div>
			<div class="item form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Usuario<span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="usuario" required="required" type="text" maxlength="20" >
				</div>
			</div>
			<div class="item form-group">
				<label for="password" class="control-label col-md-3">Contraseña</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="password" name="password" data-validate-length="6,20" class="form-control col-md-7 col-xs-12" required="required" maxlength="20" >
				</div>
			</div>
			<div class="item form-group">
				<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirmar Contraseña</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input  type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required" maxlength="20" >
				</div>
			</div>
			<div class="ln_solid"></div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-3">
					<button type="submit" class="btn btn-primary">Cancel</button>
					<button id="enviado" type="submit" class="btn btn-success">Enviar</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
@section('javascript')
<script src="{{ asset('gentelella/vendors/validator/validator.js') }}"></script>
<script src="{{ asset('gentelella//vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
@endsection