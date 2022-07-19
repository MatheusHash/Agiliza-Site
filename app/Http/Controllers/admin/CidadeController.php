<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function index(){
        $cidades = Cidade::all();
        return view("admin/cidades/cidade",['cidades'=>$cidades]);
    }

    public function store(Request $request){
        Cidade::create($request->all());
        return back();
    }
}
