<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Imovel;

class ImovelController extends Controller
{
    public function page(){
       $Cidades = Cidade::all('id','nome');
        return view('admin/imovel', ['Cidades'=>$Cidades]);
    }

    public function salvarImovel(Request $request){
        Imovel::create($request->all());
        // dd($request->all());
        return redirect()->route('dashboard');
    }

    public function listarImoveis(){
        $imoveis = Imovel::all();
        return redirect()->route('listaImoveis');
 
    }
}
