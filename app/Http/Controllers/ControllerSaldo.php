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
}
