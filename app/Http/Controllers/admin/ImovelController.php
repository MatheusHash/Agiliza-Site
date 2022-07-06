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

    public function store(SalvarAtualizarFormRequestImovel $request){
        Imovel::create($request->all());
        return redirect()->route('listaDeImoveis');
    }

    public function show(){
        $imoveis = Imovel::all();
        return view('admin/imoveis/listaDeImoveis', ['imoveis'=>$imoveis]);
    }
    
    public function showById($id){
        if($imovel = Imovel::find($id))
            return view('admin/imoveis/listarImovel', ['imovel'=>$imovel]);
            // dd($imovel);
            
        return redirect()->route('listaDeImoveis');
    }
    
    public function edit($id){
        if( $imovel = Imovel::where('id',$id)->first()){
            // dd($imovel);
            $Cidades = Cidade::all();
            return view('admin/imoveis/editarImovel', ['imovel'=>$imovel,'Cidades'=>$Cidades]);
        }
            return redirect()->route('imoveis.show');
    }

    public function update($id){
        // Imovel::all()->where($id);
        return redirect()->route('imoveis.show');
    } 

}
