<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::paginate();
        return view('produtos.index', ['produtos' => $produtos]);    
    }

    public function create(){
        return view('produtos.create');    
    }

    public function show($id){
        $produto = Produto::find($id);
        return view('produtos.show', ['produto' => $produto]);    
    }
    
       /*if ($valor) {
            return "O nome do produto é $nome e seu valor é $valor";    
        }else{
            return "O nome do produto é $nome!";    
        }

    /*
    public function show($nome, $valor=null){
        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);    
       /*if ($valor) {
            return "O nome do produto é $nome e seu valor é $valor";    
        }else{
            return "O nome do produto é $nome!";    
        }*/ 
}
