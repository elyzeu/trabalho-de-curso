<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ControllerAgendar extends Controller
{


    public function store(Request $request){
        $id = Auth::id();
        
        $agendar = new Agendamento;
        $qtd_agendamento = Agendamento::All();
        foreach($qtd_agendamento as $qtds_agend){
            if( $qtds_agend->user_id == $id){
            $qtds_agend = $qtds_agend->qtd_agendamento + 1;
            $agendar->qtd_agendamento = $qtds_agend;
            }
        }
        
        $agendar->name = $request->nome;
        $agendar->email = $request->email;
        $agendar->horario = $request->horario;
       
        
        $agendar->user_id = $id;
   
        $agendar->save();
    
        return redirect('/dashboard');
    
    }
    public function destroy(){
        $idlog = Auth::id();

        $user_id = Agendamento::All();
        
        foreach($user_id as $user_idv){
            if( $user_idv->user_id == $idlog){
                //deleta tudo deste usuário
                $user_idv->delete();

            }
        }

        

        return redirect('/dashboard');
    }
    public function listUserAgend(){
       
       
       $id = Auth::id();
       $agendamento = Agendamento::all();
       return view('informacoes.meu-agendamento',['agendamento'=>$agendamento , 'id'=>$id]);
    }
    public function listAllAgend()
    {
        $agendamento = Agendamento::All();
        return view('informacoes.all-agendamento', ['agendamento'=>$agendamento]);
    }
}
