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
        $gasto->mes = $request->mes;
        $gasto->ano = $request->ano;
       $gasto->data = $request->data;

       $gasto->save();

        return redirect('/dashboard');

    }

    public function list(Request $request){

        $gasto = Gasto::All();
        $mes = $request->mes;
        $ano = $request->ano;

        $total = 0;
        foreach($gasto as $valores){

        if($valores->mes == $mes && $valores->ano == $ano){
            
            $total = $total + $valores->valor;
            return view('informacoes.ver-gasto', ['gasto' => $gasto, 'mes'=> $mes, 'ano'=>$ano, 'total'=>$total]);
        }
        else{
            $erro = "nada encontrado";
            return view('informacoes.gasto-vazio',['erro' => $erro] );
        }
    }

       
 
    }
    public function ListAllGasto(){
        $gasto = Gasto::All();
        $total = 0;
        if($gasto->isEmpty()){

            $erro = "nada encontrado";
            return view('informacoes.gasto-vazio',['erro' => $erro] );
        }
        else{
        foreach($gasto as $valores){
            $total = $total + $valores->valor;
           
            
            return view('informacoes.ver-all-gasto', ['gasto'=>$gasto , 'total'=>$total]);
            }
        }
    

    }
    public function destroyGasto($id){


        //pega todos os agendamentos        
        Gasto::findOrFail($id)->delete();
   
      return redirect('/dashboard')->with('msg', 'agendamento excluido com sucesso');
    }
    public function destroyGastoBusca($id){

        Gasto::findOrFail($id)->delete();

        return redirect('/dashboard');
    }
}
