<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ControllerAgendar extends Controller
{


    public function verific_Cad_ReturnForm(){
        //função para verificação e retorno do formulario de agendamento

        $id = Auth::id();

        //traz todos os agendamentos
        $qtd_agendamento = Agendamento::All();


        //traz as informação para qtds_agend
        foreach($qtd_agendamento as $qtds_agend){
    }
                //verifica se o usuario tem uma visita agendada
                if($qtds_agend->user_id == $id){

                    //retorna a view de visita agendada
                    return redirect('/events/visitas-agendadas');
        
                }
                else{
                    //caso ele n tenha agendado, retorna o formulario de agendamento
                    return view('form.agendar-visita');
                }
    }

    public function store(Request $request){
        //metodo de salvamento do agendamento, relativo ao usuário
        
        $id = Auth::id();
        
        $agendar = new Agendamento;
        

        //traz todos os agendamentos do banco de dados
        $qtd_agendamento = Agendamento::All();


        //tras as informações para qtds_agend
        foreach($qtd_agendamento as $qtds_agend){
            

            //verifica se o user_id e igual o id do usuario
            if( $qtds_agend->user_id == $id){
                
            //contador para armazenar a quantidade de agendamento do banco +1 
            //para que não haja erro, por segurança
            //o valor deve ser sempre zero
            $cont = $qtds_agend->qtd_agendamento + 1;

            //define o valor do campo de agendamento como a variavel contador
            $agendar->qtd_agendamento = $cont;

            //verifica se o agendamento é igual a 0 
            //sendo zero existe 1 agendamento e retorna para a pagina de agendar para impedir o agendamento
            if($qtds_agend->qtd_agendamento == 0){
                //verifica se existe algum agendamento, caso tenha o usuario será 
                //redirecionado para a view agendar visita
                //impedindo a gravação de novo agendamento
                return redirect('/events/agendar-visita');
            }
            }
            
        }
        
        //informações que serão enviadas ao banco de dados
        $agendar->name = $request->nome;
        $agendar->email = $request->email;
        $agendar->horario = $request->horario;
       
        //define o valor chave estrangeira com o valor do usuário logado
        $agendar->user_id = $id;
   
        $agendar->save();
        //metodo para salvar as informações do request pegadas para o banco de dados

        //redireciona para as visitas agendadas do usuario logado
        return redirect('/events/visitas-agendadas');
    
    }
    public function destroy(){

        //função para deletar o agendamento na interface do usuário


        //recupera o id do usuário logado
        $idlog = Auth::id();

        //pega todos os agendamentos        
        $user_id = Agendamento::All();
        
        //trazer as informações para user_idv
        foreach($user_id as $user_idv){
            //verifica se a chave estrangeira do usuário é identica ao logado
            if( $user_idv->user_id == $idlog){
                //deleta tudo deste usuário
                $user_idv->delete();

            }
        }

        

        return redirect('/dashboard');
    }
    public function listUserAgend(){
       
        //função para listar o agendamento do usuário que está logado


       //retorna id do usuário logado
       $idv = Auth::id();

       //consulta ao banco para pegar todos os dados
       $agendvar = Agendamento::all();
       
       foreach($agendvar as $agend_list){
        //levar informação pra variavel
       }

       //verifica se o user_id estrangeiro é identico ao logado
       if($agend_list->user_id == $idv){

         //retorna a view pra mostrar informação junto com id e a variavel com os dados
        return view('informacoes.meu-agendamento',['agendvar'=>$agendvar , 'id'=>$idv]);
        
}else{
    //retorna a pagina para agendar visita
    return redirect('/events/agendar-visita');
}
            
       
    
       
    }
    public function listAllAgend()
    {
        //função listar todos os agendamentos do banco, isto para o administrador



        $agendamento = Agendamento::All();

        //retorna a view do administrador para mostrar todos os agendamentos
        return view('informacoes.all-agendamento', ['agendamento'=>$agendamento]);
    }
}
