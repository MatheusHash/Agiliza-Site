<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalvarAtualizarFormRequestImovel;
use App\Models\Galeria;
use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Imovel;
use Illuminate\Support\Facades\Storage;

class ImovelController extends Controller
{
    public function page(){

        // Passando as cidades para a view do formulario de adicionar Imovel
       $Cidades = Cidade::all('id','nome');
        return view('admin/imoveis/imovel', ['Cidades'=>$Cidades]);
    }

    public function store(SalvarAtualizarFormRequestImovel $request){

        $dataForm = $request->all();
        // Inserindo no banco de dados e salvando os dados da inserção na var $imovel
        $imovel = Imovel::create($request->all());

        if($request->hasFile('imagem-principal')){
            $path = 'images/' . $imovel->id;

            $image = $dataForm['imagem-principal'];
            $nameImage = uniqid(date('Ymdhis') ). '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $nameImage);

            $galeria = new Galeria();
            $galeria->$path . "/". $nameImage;
            $galeria->imovel_id = $imovel->id;
            $galeria->principal = 1;
            unset($galeria);
        }

        if($request->hasFile('imagens')){
            // $path => onde as imagens srão salvas
            // cada imovel terá suas imagens salvas na pasta do seu ID
            $path = 'images/' . $imovel->id;
            foreach( $dataForm['imagens'] as $key => $file ){
                $image = $file;
                $nameImage = uniqid(date('Ymdhis'.$key) ). '.' . $image->getClientOriginalExtension();
                $image->storeAs($path, $nameImage);

                $galeria = new Galeria();
                $galeria->imovel();
                $galeria->path = $path . "/". $nameImage;
                $galeria->imovel_id = $imovel->id;
                $galeria->save();
                  unset($galeria); // esvaziar a var
            }

        }
        return redirect()->route('imoveis.show');
    }

    public function show(){
        $imoveis = Imovel::all();
        $Galeria = Galeria::all()->where('principal',1);
        return view('admin/imoveis/listaDeImoveis', ['imoveis'=>$imoveis,'Galeria'=>$Galeria]);
    }

    public function showById($id){
        if($imovel = Imovel::find($id))
            return view('admin/imoveis/listarImovel', ['imovel'=>$imovel]);

        return redirect()->route('imoveis.show');
    }

    public function edit($id){
        if( $imovel = Imovel::where('id',$id)->first()){
            $Cidades = Cidade::all();
            return view('admin/imoveis/editarImovel', ['imovel'=>$imovel,'Cidades'=>$Cidades]);
        }
            return redirect()->route('imoveis.show');
    }

    public function update($id){
        // Imovel::all()->where($id);
        return redirect()->route('imoveis.show');
    }

    public function destroy($idImovel){

        Galeria::where('id',$idImovel)->delete();
        Imovel::where('id',$idImovel)->delete();
        Storage::disk('public')->deleteDirectory('images/'. $idImovel);
        return redirect()->route('imoveis.show')->with('msg','Imóvel deletado com sucesso!');
    }


}
