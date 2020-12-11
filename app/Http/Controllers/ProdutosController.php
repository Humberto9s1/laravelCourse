<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return "Página de produtos";    
    }

    public function create(){
        return "Página de inserir produto";
    }

    public function show($nome, $valor){
        if ($valor) {
            return "O nome do produto é $nome e seu valor é $valor";    
        }else{
            return "O nome do produto é $nome!";    
        } 
    }
}
