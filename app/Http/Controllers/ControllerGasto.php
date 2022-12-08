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

        $gasto->save();

        return redirect('/dashboard');

    }
}
