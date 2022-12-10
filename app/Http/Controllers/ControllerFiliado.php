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
        $filiado->data_nascimento= $request->data_nascimento;
        $filiado->admissao= $request->admissao;
        $filiado->cargo= $request->cargo;
        $filiado->lotacao= $request->lotacao;
        $filiado->rg= $request->rg;
        $filiado->decreto_de_nomeacao= $request->decreto_de_nomeacao;
        $filiado->matricula= $request->matricula;
        $filiado->email= $request->email;
        $filiado->status = $request->status;
        

        $filiado -> save();

        return redirect('/dashboard');
    }

    public function listAll(){

        $filiados = Filiado::All();

        if($filiados->isEmpty()){
            $zero = "nenhum filiado existente";
            return view('informacoes.zero-filiado-adm',['zero'=>$zero]);
        }else{

        return view('informacoes.all-filiado', ['filiados'=>$filiados]);

        }
    }
    public function destroyFiliado($id){
        Filiado::findOrFail($id)->delete();

        return redirect('/dashboard');
    }
    public function busca(Request $request){

        $var = $request->email;

        $filiados = Filiado::All();
        if($filiados->isEmpty()){
            $zero = "nenhum filiado cadastrado";
            return view('informacoes.zero-filiado-adm',['zero'=>$zero]);
        }
        else{
        foreach($filiados as $filiado){
            if($filiado->email == $var){
                return view('informacoes.mostrar-filiado-busca', ['filiados'=>$filiados, 'var'=>$var]);
            }
            else{
                $zero = "nenhum filiado com esse email";
            return view('informacoes.zero-filiado-adm',['zero'=>$zero]);
            }
        }
    }
           
     
            
        

        
    }
}
