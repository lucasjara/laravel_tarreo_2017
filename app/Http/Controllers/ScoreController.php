<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Score;
use App\User;
use App\Competition;

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

    public function puntajes(){
        //TRAEMOS TODAS LAS CATEGORIAS 
        $sql = 'SELECT c.id, c.name, com.name as competencia from categories c, competitions com WHERE c.id_competition=com.id';
        $categories = DB::select($sql);
        return view('administracion/competencia',['categories'=>$categories]);
    }
    public function detalle($id){
        $sql ="SELECT scores.id,categories.name as categoria ,competitions.name as nombre,scores.points as total FROM `scores`, categories, competitions WHERE scores.id_user='$id' AND scores.id_category=categories.id AND categories.id_competition=competitions.id;";
        $datos = DB::select($sql);

        return view('administracion/detalle',['datos'=>$datos]);
    }
}
