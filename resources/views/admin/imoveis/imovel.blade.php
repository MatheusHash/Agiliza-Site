{{--directory layouts, archive app.blade.php--}}
@extends('layouts.admin')

@section('content')


<section class="bg-indigo-50 flex justify-center">
    
    @if($errors->any())
        @foreach($errors->any() as $e)
            <p>{{$e}}</p>
        @endforeach
        <h2 class="p-5 text-gray-600">Verifique se todos os campos foram preenchidos da maneira correta!</h2>
    @endif
        <div class="grid grid-cols-1">
            <div class="w-auto py-12" style="width: 720px">
                <h1 class="text-center text-gray-600">Cadastrar imovel</h1>

                <form class="text-gray-600" method="post" enctype="multipart/form-data">
                    @csrf

                    {{-- Titulo --}}
                    <div class="mb-4">
                        <label for="titulo" class="block text-sm font-medium text-gray-700" style="font-size: 2em; margin: 15px;">Titulo</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="titulo" id="price" value="{{  old('titulo')  }}" class=" @error('titulo') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Casa com Area de lazer">
                            @error('titulo')
                                <h1 class="text-red-600 ">* Campo obrigatório</h1>
                            @enderror
                        </div>
                    </div>
                    {{-- Valor --}}
                    <div class="mb-4">
                        <label for="valor" class="block text-sm font-medium text-gray-700 " style="font-size: 2em; margin: 15px;">Price</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="number"  step="0.01" name="valor" id="price" value="{{  old('titulo')  }}" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="1050,50">
                            @error('valor')
                                <h1 class="text-red-600 ">* Campo obrigatório</h1>
                            @enderror
                        </div>
                    </div>
                    <span style="font-size: 2em; margin: 15px;">Escolha as imagens</span>
                    <hr>
{{--                    Imagem Principal --}}
                    <div class="mb-4">
                        <label for="imagens" class="block text-sm font-medium text-gray-700" >Foto principal - Foto de Capa</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="file" name="imagem-principal" id="capa" value="{{  old('titulo')  }}" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md">
                        </div>
                        @error('imagem-principal')
                                <h1 class="text-red-600 ">* Campo obrigatório</h1>
                        @enderror
                    </div>
{{--                    Imagens --}}
                    <div class="mb-4">
                        <label for="imagens" class="block text-sm font-medium text-gray-700">Escolha as melhores imagens do Imovel</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="file" name="imagens[]" id="imagens" value="{{  old('titulo')  }}" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" multiple>
                        </div>
                    </div>
                    <br>
                    <hr>


                    {{--Endereco --}}
                    <div class="mb-4">
                        <label for="endereco" class="block text-sm font-medium text-gray-700" style="font-size: 2em; margin: 15px;">Endereço</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="endereco" id="endereco" value="{{  old('titulo')  }}" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Avenida Sabia, 1024">
                            @error('endereco')
                                <h1 class="text-red-600 ">* Campo obrigatório</h1>
                            @enderror
                        </div>
                    </div>
{{--                    Descricao --}}
                    <div class="mb-4">
                        <label for="descricao" class="block text-sm font-medium text-gray-700" style="font-size: 2em; margin: 15px;">Descricao</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea name="descricao" id="descricao" value="{{  old('titulo')  }}" class="h-20 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Breve Descrição sobre o ímovel..."></textarea>
                        </div>
                        @error('descricao')
                            <h1 class="text-red-600 ">* Campo obrigatório</h1>
                        @enderror
                    </div>
                    {{--                    Link do Google maps--}}
                    <div class="mb-4">
                        <label for="googlemaps" class="block text-sm font-medium text-gray-700" style="font-size: 2em; margin: 15px;">Cole aqui o link do Google Maps</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea name="googlemaps" id="googlemaps" value="{{  old('titulo')  }}" class="h-20 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="link"></textarea>
                        </div>
                        @error('googlemaps')
                            <h1 class="text-red-600 ">* Campo obrigatório</h1>
                        @enderror
                    </div>
                    
                    {{--                    Comodos e areas do imovel--}}
                    <div class=" container ">
                        
                        <h3 class="text-gray-600 text-center pt-8 pb-3" style="font-size: 2em;"> Comodos / Areas do imovel</h3>
                        
                        <div class="w-full ">
                            <div class="flex">
                                <div class="mr-2">
                                    <label for="quarto" class="block text-sm font-medium text-gray-700">Quartos</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="quarto" id="quarto" value="{{  old('titulo')  }}" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="3">
                                    </div>
                                    @error('quarto')
                                        <h1 class="text-red-600 ">* Campo obrigatório</h1>
                                    @enderror
                                </div>
                                <div class="mr-2">
                                    <label for="banheiro" class="block text-sm font-medium text-gray-700">Banheiros</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="banheiro" id="banheiro" value="{{  old('titulo')  }}" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="2">
                                    </div>
                                    @error('banheiro')
                                        <h1 class="text-red-600 ">* Campo obrigatório</h1>
                                    @enderror
                                </div>
                                
                                <div class="mr-2">
                                    <label for="suite" class="block text-sm font-medium text-gray-700">Suíte</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="suite" id="suite" value="{{  old('titulo')  }}" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="1">
                                    </div>
                                    @error('suite')
                                        <h1 class="text-red-600 ">* Campo obrigatório</h1>
                                    @enderror
                                </div>
                                
                                <div class="mr-2">
                                    <label for="garagem" class="block text-sm font-medium text-gray-700">Vagas - Garagem</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="garagem" id="garagem" value="{{  old('titulo')  }}" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="1">
                                    </div>
                                    @error('garagem')
                                        <h1 class="text-red-600 ">* Campo obrigatório</h1>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class=" py-4 mb-4">
                        <div class="mx-auto">
                            <p>O imovel está para</p>
                            <select name="motivo" id="motivo" class="rounded-lg" onselect="">
                                <option value="1">Alugar</option>
                                <option value="2">Vender</option>
                                <option value="3">Alugar ou Vender</option>
                            </select>
                        </div>
                        @error('motivo')
                            <h1 class="text-red-600 ">* Campo obrigatório</h1>
                        @enderror
                    </div>
                    <div class="mx-auto flex justify-between">
                        <div>
                            
                            <p>Cidade</p>
                            <select name="cidade_id" id="cidade_id" class="rounded-lg">
                                @foreach($Cidades as $cidade)
                                    <option value="{{ $cidade->id}}">{{$cidade->nome}}</option>
                                @endforeach
                            </select>
                            @error('cidade_id')
                                <h1 class="text-red-600 ">* Campo obrigatório</h1>
                            @enderror
                        </div>
                        <div>
                            
                            <p>Categoria</p>
                            <select name="categoria_id" id="categoria_id" class="rounded-lg">
                                @foreach($Categorias as $categoria)
                                    <option value="{{ $categoria->id}}">{{$categoria->nome}}</option>
                                @endforeach
                            </select>
                            @error('categoria_id')
                                <h1 class="text-red-600 ">* Campo obrigatório</h1>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mx-auto mt-6">
                        <label for="visibility">Escolha a visibilidade do imovel</label><br>
                        <select name="visibility" id="visibility" class="rounded-lg">
                            <option value="1">Visivel</option>
                            <option value="0">Oculto</option>
                        </select>
                        @error('visibility')
                            <h1 class="text-red-600 ">* Campo obrigatório</h1>
                        @enderror
                    </div>
                    {{-- Btn para submeter o formulario --}}
                    <div class="flex justify-center" >                
                        <button class="bg-gray-800 rounded-lg text-white text-center font-bold p-5 mt-6" type="submit">Cadastrar imovel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
