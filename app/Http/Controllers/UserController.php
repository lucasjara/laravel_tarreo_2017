<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // Desplegamos todo el contenido de la tabla users
        $users = DB::table('users')->get();
        return view('usuarios/administracion_usuarios', ['users'=> $users, 'usuario'=>'GET']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Request $request)
    {
        // Busqueda de Usuarios
        $nombre = $request->input("nombre");
        $estado = $request->input("estado");

        switch ($estado) {
            case 'ID':
                $users = DB::table('users')->where('id', $nombre)->get();
                break;
            case 'RUT':
                $users = DB::table('users')->where('rut', $nombre)->get();
                break;
            case 'NOMBRE':
                $users = DB::table('users')->where('name', $nombre)->get();
                break;
        }

        if($nombre ==""){
            $users = User::all();
        }

        return view('usuarios/administracion_usuarios', ['users'=> $users, 'usuario'=>'POST']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //Modificaremos los datos del Usuario
        return view('usuarios/edit_user', ['users'=> '$users', 'usuario'=>'GET']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit_redirect(Request $request, User $user)
    {
        return view('usuarios/edit_user', ['users'=> '$users', 'usuario'=>'GET']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //Desabilitaremos el usuario no lo eliminaremos ya que causaria una inconsistencia
    }
}
