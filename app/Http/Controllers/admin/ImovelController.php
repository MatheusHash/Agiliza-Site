<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function page(){

        return view('admin/imovel');

    }
}
