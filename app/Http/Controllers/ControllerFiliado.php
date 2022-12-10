<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiado;


class ControllerFiliado extends Controller
{
    //

    public function store(Request $request){
        $filiado = new Filiado;
        
       $cpf =  $request->validate([
            'field_name' => ['cpf'],
        ]);

        $filiado->nome = $request->nome;
        $filiado->cpf= $cpf;
        $filiado->data_nascimento= $request->data_nascimento;
        $filiado->admissao= $request->admissao;
        $filiado->cargo= $request->cargo;
        $filiado->lotacao= $request->lotacao;
        $filiado->rg= $request->rg;
        $filiado->decreto_de_nomeacao= $request->decreto_de_nomeacao;
        $filiado->matricula= $request->matricula;
        $filiado->email= $request->email;
        $filiado->status= $request->status;

        $filiado -> save();

        return redirect('/dashboard');
    }
}
