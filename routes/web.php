<?php
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//--------- Rutas de Authenticacion por defecto----
Auth::routes();
//-------------------------------------------------

//-----------------ADMINISTRACION--------------
Route::get('/competencias','ScoreController@puntajes')->name('administrar_competencias');

Route::get('administracion/puntaje','ScoreController@index')->name('administrar_puntaje');

Route::get('administracion/registro', function() {return view('administracion/registro');})->name('registro_admin');
Route::get('administracion/detalle/{id}','ScoreController@detalle')->where(['id' => '[0-9]+'])->name('administrar');
//---------------------------------------------


//---------------ADMINISTRADOR----------------
Route::get('admin/crear', function(){
	return view('admin/crear');
})->name('registrar_administradores');
//-------------------------------------------


//-------------ADMINISTRAR USUARIOS ------------------//

Route::get('usuarios/administrar','UserController@show')->name('administrar_usuarios');

Route::get('usuarios/editar',function(Request $request){

	$id = $request->input("id");

	$users = DB::table('users')->where('id', $id)->get();
	
	return view('usuarios/edit_user', ['users'=> $users, 'id'=>$id]);

})->name('redirect_user_edit');

Route::post('usuarios/editar','UserController@update')->name('edit_user');

Route::post('usuarios/administrar','UserController@edit')->name('administrar_usuarios_editar');
//----------------------------------------------------//


//----------------PUNTAJES--------------------



//--------------------------------------------
//----------PLANTILLA BASE-------------------- 
Route::get('/', function(){
	return view('base');
})->middleware('auth');

Route::get('/home', function(){
	return view('base');
})->middleware('auth');
//--------------------------------------------