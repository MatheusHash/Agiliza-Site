{{--directory layouts, archive app.blade.php--}}
@extends('layouts.admin')

@section('content')
    

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif

<section class="bg-indigo-50 flex justify-center">
        
        <div class="grid grid-cols-1">
            <div class="w-auto py-12" style="width: 720px">
                <h1 class="text-center text-gray-600">Editar imovel: #{{ $imovel->id }}</h1>

                <form class="text-gray-600" method="post" action=" {{route( 'imoveis.update', $imovel->id )}} ">
                    @method('put')
                    @csrf
                    {{-- Titulo --}}
                    <div class="mb-4">
                        <label for="titulo" class="block text-sm font-medium text-gray-700">Titulo</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="titulo" id="price" value="{{  $imovel->titulo  }}" class=" @error('titulo') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Casa com Area de lazer">
                            @error('titulo')
                                <h1 class="text-red-600 ">{{ $message }}</h1>
                            @enderror
                        </div>
                    </div>
                    {{-- Valor --}}
                    <div class="mb-4">
                        <label for="valor" class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="number"  step="0.01" name="valor" id="price" value="{{ $imovel->valor }}" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="1050,50">
                        </div>
                    </div>


                    {{--Endereco --}}
                    <div class="mb-4">
                        <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="endereco" id="endereco" value="{{ $imovel->endereco }}" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Avenida Sabia, 1024">
                        </div>
                    </div>
{{--                    Descricao --}}
                    <div class="mb-4">
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Descricao</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea name="descricao" id="descricao" class="h-20 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Avenida Sabia, 1024">{{$imovel->descricao}}</textarea>
                        </div>
                    </div>
{{--                    Link do Google maps--}}
                    <div class="mb-4">
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Cole aqui o link do Google Maps</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea name="googlemaps" id="googlemaps" class="h-20 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Link google Maps">{{ $imovel->googlemaps }}</textarea>
                        </div>
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
                    <button class="bg-gray-800 rounded-lg text-white text-center font-bold p-5 mt-6" type="submit">Cadastrar imovel</button>
                </form>
            </div>
        </div>
    </section>

@endsection
