@extends('base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Editar Usuario</div>
                <div class="panel-body">
                @foreach($users as $user)
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="rut" class="col-md-3 control-label">Rut:</label>
                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control" name="rut" maxlength="15" value="{{ $user->rut }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Nombre:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="20" class="form-control" name="name" 
                                value="{{ $user->name }}" required="required" placeholder="Ingrese solamente primer nombre" autofocus >
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-3 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" data-validate-words="2" value="{{ $user->last_name }}" maxlength="30" autofocus required="required"  placeholder="Ejemplo: Jara Espinoza." >
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">Correo Electronico:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"  placeholder="Ejemplo: formato@ejemplo.com" value="{{ $user->email }}" required>
                            </div>
                        </div>

                        <input id="id_profile" type="hidden" class="form-control" name="id_profile" value="1">

                        <div class="form-group{{ $errors->has('relevant_person') ? ' has-error' : '' }}">
                            <label for="relevant_person" class="col-md-3 control-label">Persona Relevante:</label>

                            <div class="col-md-6">
                                <input id="relevant_person" type="text" class="form-control" data-validate-length-range="6" name="relevant_person" value="{{ $user->relevant_person }}" required="required" autofocus placeholder="Persona Importante">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                            <label for="number" class="col-md-3 control-label">Numero:</label>

                            <div class="col-md-6">
                                <input id="number" type="text" class="form-control" data-validate-length-range="6" name="number" value="{{ $user->number }}" required="required" autofocus placeholder="Numero de Emergencia">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Usuario:</label>

                            <div class="col-md-6">
                                <input id="user" type="text" class="form-control" maxlength="20" name="user" 
                                value="{{ $user->user }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary col-md-offset-2">
                                    Editar
                                </button>
                                <button type="submit" class="btn btn-danger pull-right col-md-offset-2" >
                                    Desabilitar
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection