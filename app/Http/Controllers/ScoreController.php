<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Score;
use App\User;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sql = 'SELECT DISTINCT categories.name FROM categories';
        //LISTADO CATEGORIAS [CONSOLA,PC,ETC..]
        $categories = DB::select($sql);

        $sql = 'SELECT DISTINCT users.id, users.name, users.last_name FROM users';
        //LISTADO USUARIOS
        $users = DB::select($sql);
        $numero=0;
        $cantidad=0;
        foreach ($users as $user) {
            $acumulado=0;
            foreach ($categories as $category) {
                $sql = 'SELECT SUM(scores.points)as puntos FROM scores, categories where scores.id_user='.$user->id.' AND categories.name="'.$category->name.'" AND categories.id=scores.id_category';
                $points = DB::SELECT($sql);
                foreach ($points as $point) {
                    if ($point->puntos == NULL) {
                        $puntajes[$cantidad] = "0";
                    }else{
                        $puntajes[$cantidad] = $point->puntos;
                    }
                    $acumulado=$puntajes[$cantidad]+$acumulado;
                    $cantidad++;
                }
            }
            //posiciones arreglo
            $id[$numero] = $user->id;
            $nombre[$numero] = $user->name;
            $apellido[$numero] = $user->last_name;
            $total[$numero] = $acumulado;
            $numero++;
        }
         return view('administracion/puntaje',['categories'=>$categories, 'id'=>$id,'nombre'=>$nombre,'apellido'=> $apellido ,'total'=>$total,'puntajes'=>$puntajes,'numero'=>$numero]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
