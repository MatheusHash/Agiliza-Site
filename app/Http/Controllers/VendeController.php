<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendeController extends Controller
{
    public function index(){

//        dd('Olá mundo');
        $nome = 'VENDA - rota para imoveis a venda';
        return view('listImoveis',['nome'=> $nome]);

    }}
