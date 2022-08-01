<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeria;
use Illuminate\Support\Facades\Storage;


class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $galeria = Galeria::all()->where('imovel_id',$id);
        return view('admin/galeria/galeria', ['imagens'=>$galeria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function novaImagemCapa(Request $request, $idImovel)
    {
        $dataForm = $request->all();
        // dd($dataForm);

        $atual = Galeria::where([['imovel_id',$dataForm['idImovel']], ['principal',1]]);
        $atual->update(['principal'=>0]);

        $novaCapa = Galeria::where('id',$dataForm['idImagem']);
        $novaCapa->update(['principal'=>1]);
        // dd($request->all(), $idImovel, Galeria::where([['imovel_id',$idImovel], ['principal',1]]));

        // dd($atual);


        // // $novaCapa= Gleria::where('id', $id);
        // // $novaCapa->principal = 1;
        // $novaCapa->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $imagem = Galeria::where('id',$id)->delete();
        Storage::delete( $request->all('path') );
        return back();
    }
}