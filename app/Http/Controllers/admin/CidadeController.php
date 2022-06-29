<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function cidades(){
//
        $cidades = Cidade::all();
//        dd($cidades);
        return view("admin/cidades/cidade",['cidades'=>$cidades]);
    }

    public function formAdicionar(){
        return view("admin/cidades/form");
    }

    public function salvarCidade(Request $request){
//        $cidade = new Cidade();
//        $cidade = $request->nome;
//        $cidade->save($cidade); // Salvar no banco de dados
        Cidade::create($request->all());
        return redirect()->route('cidades');
//            dd($request);
    }
}
