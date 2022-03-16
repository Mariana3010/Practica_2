<?php

namespace App\Http\Controllers;
use App\Models\Catalago;
use Illuminate\Http\Request;


class CodigosController extends Controller
{
    //
    public function mostrarCodigos()
    {
        $codigos = Catalago::all();
        return view('index', ['index'=>$codigos]);
        }
       
    
    public function buscar(Request $request){
        $codigos_post = Catalago::where('codigo', $request->codigo)->get();
        echo json_encode($codigos_post);
        return view('codigos_p', ['index'=>$codigos_post]);
    }

    public function prueba()
    {
        $codigos = Catalago::all();
        return view('pruebas', ['index'=>$codigos]);
        }
}


    

