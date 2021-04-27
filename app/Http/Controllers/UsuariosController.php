<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    
    function exibe_Login(){

    	return view ('login'); 

    }

    function tenta_Login(Request $req){
    	$email = $req->input('email');
    	$senha = $req->input('senha');

    	$u = Usuario::where('email', '=', $email)->first(); 
    	if ($u && $u->senha ==$senha){
    		return "Acesso Concedido";

    	}else{
    		return "Acesso negado";
    	}
    }
}
