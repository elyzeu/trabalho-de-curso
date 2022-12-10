<?php

namespace App\Http\Controllers;
use App\Models\Gasto;

use Illuminate\Http\Request;

class ControllerGasto extends Controller
{
    //
    public function store(Request $request){

        $gasto = new Gasto;

        $gasto->valor = $request->valor;
        $gasto->descricao = $request->descricao;
        $gasto->data = $request->data;
        $gasto->mes = $request->mes;

        $gasto->save();

        return redirect('/dashboard');

    }

    public function list(Request $request){

        $gasto = Gasto::All();
        $mes = $request->mes;

       
    return view('informacoes.ver-gasto', ['gasto' => $gasto, 'mes'=> $mes]);
    }
    public function ListAllGasto(){
        $gasto = Gasto::All();

        return view('informacoes.ver-all-gasto', ['gasto'=>$gasto]);
    }
}
