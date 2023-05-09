<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = Produto::all();

        return view('home', ['data'=> $data]);
    }

    public function categoria($idCategoria = 0){
        $listaProdutos = Produto::limit(4);

        if($idCategoria !== 0){
            $listaProdutos->where('categoria_id', $idCategoria);
        }

        return view('categoria', [
            'categorias'=>Categoria::all(),
            'produtos'=>$listaProdutos->get(),
            'idCategoria'=>$idCategoria
        ]);
    }

    public function showProduto($id){
        return view('_produtos', [
            'data'=>$data = Produto::find($id)
        ]);
    }
}
