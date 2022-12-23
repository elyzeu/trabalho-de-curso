<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiado;


class ControllerFiliado extends Controller
{
    //

    public function store(Request $request){
        $filiado = new Filiado;
        
     

        $filiado->nome = $request->nome;
        $filiado->data_nascimento= $request->data_nascimento;
        $filiado->admissao= $request->admissao;
        $filiado->cargo= $request->cargo;
        $filiado->lotacao= $request->lotacao;
        $filiado->rg= $request->rg;
        $filiado->decreto_de_nomeacao= $request->decreto_de_nomeacao;
        $filiado->matricula= $request->matricula;
        $filiado->email= $request->email;
        $filiado->cpf= $request->cpf;
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
    public function edit(Request $request){

        $filiado = Filiado::All();

        foreach($filiado as $filiados){
            if($filiados->cpf == $request->cpf_para_alterar){
                Filiado::where('cpf', $request->cpf_para_alterar)->update([
                    'nome' => $request->nome,
                    'cpf'=>$request->cpf,
                    'data_nascimento'=>$request->data_nascimento,
                    'admissao'=>$request->admissao,
                    'cargo'=>$request->cargo,
                    'lotacao'=>$request->lotacao,
                    'rg'=>$request->rg,
                    'decreto_de_nomeacao'=>$request->decreto_de_nomeacao,
                    'matricula'=>$request->matricula,
                    'email'=>$request->email,
                    'status'=>$request->status
                ]);
                return redirect('/dashboard');
            }else{
                $filiados->save();
            }
        }

    }
}
