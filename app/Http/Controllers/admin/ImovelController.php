<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalvarAtualizarFormRequestImovel;
use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Imovel;

class ImovelController extends Controller
{
    public function page(){
       $Cidades = Cidade::all('id','nome');
        return view('admin/imovel', ['Cidades'=>$Cidades]);
    }

    public function salvarImovel(SalvarAtualizarFormRequestImovel $request){
        Imovel::create($request->all());

        return redirect()->route('listaDeImoveis');
    }

    public function listarImoveis(){
        $imoveis = Imovel::all();
        return view('admin/imoveis/listaDeImoveis', ['imoveis'=>$imoveis]);
 
    }

}
