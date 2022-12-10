<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saldo;

class ControllerSaldo extends Controller
{
    //
    public function store(Request $request){
        $saldo = new Saldo;

        $saldo->valor = $request->valor;

        $saldo->save();

        return redirect('/dashboard');
    }
    public function list(){

        $saldo=Saldo::All();

        if($saldo->isEmpty()){
           return view('informacoes.ver-saldo-zero');
            
        }else{
        foreach($saldo as $saldovar){
            return view('informacoes.ver-saldo', ['saldo' => $saldovar]);
        }
   

        }
    }
}
