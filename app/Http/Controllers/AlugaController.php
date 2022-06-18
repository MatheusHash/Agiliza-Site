<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlugaController extends Controller
{
    public function index(){

//        dd('Olá mundo');
//        $nome = 'PAGINA PARA IMOVEIS ALUGADOS';
        return view('alugar/index');

    }
}
