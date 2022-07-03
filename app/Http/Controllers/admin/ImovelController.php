<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;

class ImovelController extends Controller
{
    public function page(){
       $Cidades = Cidade::all('nome');
        return view('admin/imovel', ['Cidades'=>$Cidades]);

    }

    public function salvarImovel(Request $request){
        dd($request->request);
    }
}
