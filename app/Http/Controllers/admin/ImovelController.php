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

        // Passando as cidades para a view do formulario de adicionar Imovel
       $Cidades = Cidade::all('id','nome');

        return view('admin/imoveis/imovel', ['Cidades'=>$Cidades]);
    }

    public function salvarImovel(SalvarAtualizarFormRequestImovel $request){
        Imovel::create($request->all());
        return redirect()->route('listaDeImoveis');
    }

    public function listarImoveis(){
        $imoveis = Imovel::all();
        return view('admin/imoveis/listaDeImoveis', ['imoveis'=>$imoveis]);
    }
    
    public function buscarPeloId($id){
        if($imovel = Imovel::find($id));
            return view('admin/imoveis/listarImovel', ['imovel'=>$imovel]);
            // dd($imovel);
            
        return redirect()->route('listaDeImoveis');
    }
    
    public function editarImovel(){
        
        if(!$imovel = Imovel::find($id))
            return redirect()->route('listaDeImoveis');
        
        return view('admin/imoveis/listaDeImoveis', ['imoveis'=>$imoveis]);
    } 

}
