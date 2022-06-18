<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

//        dd('Olá mundo');
        $nome = 'Matheus';
        return view('welcome',['nome'=> $nome]);

    }
}
