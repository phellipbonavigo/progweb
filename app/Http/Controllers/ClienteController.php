<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Usuario;

class ClienteController extends Controller
{
    function paginaInicial(){

    	return view('pagInicial'); 

    }

     function telaFinal(Request $req){
        // verificar usuario e senha
        $email = $req->input('email');
        $senha = $req->input('senha');
        
        $u = Cliente::where('email', '=', $email)->first();
        $us = Cliente::all();
        
        if ($u && $u->senha == $senha){
            session(['login' => $email]);
            return redirect()->route('cliente_lista');
        } else {
            return view('final', [
                'resposta' => "Acesso negado",
                'tipo_resposta' => 'danger',
                'clientes' => $us
            ]);
        }
    }


    
    function novo(){
        return view('cliente_novo');
    }
    function inserir(Request $req){
        $nome = $req->input('nome');
        $email = $req->input('email');
        $senha = $req->input('senha');



        $u = new Cliente();
        $u->nome  =  $nome;
        $u->email  =  $email;
        $u->senha  =  $senha;
        $u->endereco = ""; 
        $u->cep = ""; 
        $u->estado = ""; 
        $u->cidade = ""; 
        $u->save();

        session()->flash('mensagem',"O Usuário {$u->nome} foi criado com sucesso"); 
        return redirect()->route('cliente_lista');
    }
    function alterar(Request  $req, $id){
        $u = Cliente::find($id);
        $u->nome = $req->input('nome');
        $u->email = $req->input('email');
        $u->senha = $req->input('senha');;
        $u->save();

        session()->flash('mensagem',"O Usuário {$u->nome} foi alterado com sucesso"); 


        return redirect()->route('cliente_lista');

    }
    function tela_principal(){
        if(session()->has('login')) {
            $us = Cliente::all();
            return view('final',['resposta'=>"", 'tipo_resposta' => 'success','cliente' => $us
        ]);
    }
        return redirect()->route('login');
    }

    function editar($id){
        $u =  Cliente::findOrFail($id);
        return view('cliente_editar',['u' =>$u]);
    }
    function excluir($id){
        $u = Cliente::findOrFail($id);
        $u->delete();
        return redirect()->route('cliente_lista');    

    }

    function logout(){
        session()->forget('login');
        return redirect()->route('login');
    }
}
