<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentariosControllerWeb extends Controller
{
    //
    public function index(){

        $comentarios =Comentario::all();
        return view('archivo', ['comentarios' => $comentarios]);
    }

    public function borrar($id){

        Comentario::find($id)->delete();
        return redirect()->route('texto');
    }
}
