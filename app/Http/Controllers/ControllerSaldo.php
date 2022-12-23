<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saldo;

class ControllerSaldo extends Controller
{
    //
    public function store(Request $request){
        $saldocons = Saldo::All();

        $saldo = new Saldo;
        foreach($saldocons as $saldonew){
        if($saldonew->id == 1 ){
        Saldo::where('id', 1)->update([
    'valor' => $request->valor
    ]);
        }
        else{
         $saldo->valor = $request->saldo;

         $saldo->save();
        }
    }

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
    public function subtrair(Request $request){
        $saldo = Saldo::All();

        foreach($saldo as $saldos){
            $valor_subtraido = $saldos->valor - $request->valor;
            Saldo::where('id', 1)->update([
            'valor' => $valor_subtraido
            ]);

            return redirect('/dashboard');
        }

    }
    
}
