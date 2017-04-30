<?php
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//--------- Rutas de Authenticacion por defecto----
Auth::routes();
//-------------------------------------------------

//-----------------ADMINISTRACION--------------
Route::get('/competencias', function(){
	return view('administracion/competencia');
})->name('administrar_competencias');

Route::get('/competencias/administrar', function(){
	return view('administracion/puntaje');
})->name('administrar_puntaje');
//---------------------------------------------


//---------------ADMINISTRADOR----------------
Route::get('admin/crear', function(){
	return view('admin/crear');
})->name('registrar_administradores');
//-------------------------------------------


//-------------ADMINISTRAR USUARIOS ------------------//

Route::get('usuarios/administrar','UserController@show')->name('administrar_usuarios');

Route::get('usuarios/editar/',function(Request $request){

	$users = DB::table('users')->where('id', $request->input("id"))->get();
	
	return view('usuarios/edit_user', ['users'=> $users, 'usuario'=>'GET']);
})->name('redirect_user_edit');


Route::post('usuarios/administrar','UserController@edit')->name('administrar_usuarios_editar');
//----------------------------------------------------//

//----------PLANTILLA BASE-------------------- 
Route::get('/', function(){
	return view('base');
})->middleware('auth');

Route::get('/home', function(){
	return view('base');
})->middleware('auth');
//--------------------------------------------