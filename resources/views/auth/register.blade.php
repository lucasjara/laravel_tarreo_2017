@extends('layouts.registro')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Rut:</label>

                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control" name="rut" maxlength="15" required="required" autofocus>

                                @if ($errors->has('rut'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rut') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" minlength="3" maxlength="20" class="form-control" name="name" value="{{ old('name') }}" required="required" autofocus >
                            </div>
                        </div>

                        <div class="item form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-3 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" data-validate-words="2" value="{{ old('last_name') }}" maxlength="30" autofocus required="required"  placeholder="Ejemplo: Jara Espinoza." >
                            </div>
                        </div>

                        <div class="item form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">Correo Electronico:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <input id="id_profile" type="hidden" class="form-control" name="id_profile" value="1">


                        <div class="form-group{{ $errors->has('relevant_person') ? ' has-error' : '' }}">
                            <label for="relevant_person" class="col-md-3 control-label">Persona Relevante:</label>

                            <div class="col-md-6">
                                <input id="relevant_person" type="text" class="form-control" data-validate-length-range="6" name="relevant_person" 
                                value="{{ old('relevant_person') }}" required="required" autofocus>

                                @if ($errors->has('relevant_person'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('relevant_person') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                            <label for="number" class="col-md-3 control-label">Numero:</label>

                            <div class="col-md-6">
                                <input id="number" type="text" class="form-control" data-validate-length-range="6" name="number" 
                                value="{{ old('user') }}" required="required" autofocus>

                                @if ($errors->has('number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Usuario:</label>

                            <div class="col-md-6">
                                <input id="user" type="text" class="form-control" data-validate-length-range="6" name="user" 
                                value="{{ old('user') }}" required="required" autofocus>

                                @if ($errors->has('user'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-3 control-label">Confirmar Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                                <!--<button type="reset" class="btn btn-success col-md-offset-2">
                                    Limpiar
                                </button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
