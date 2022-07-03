<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;

class ImovelController extends Controller
{
    public function page(){
       $nomeCidades = Cidade::all('nome');
        return view('admin/imovel', ['nomeCidades'=>$nomeCidades]);

    }

    public function salvarImovel(Request $request){
        dd($request->request);
    }
}
