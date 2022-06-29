{{--directory layouts, archive app.blade.php--}}
@extends('layouts.admin')
@include('layouts.navigation')

@section('content')
    <section class="bg-indigo-50 flex justify-center">

        <div class="grid grid-cols-1">
            <div class="w-auto py-12" style="width: 720px">
                <h1 class="text-center text-gray-600">Cadastrar imovel</h1>

                <form class="text-gray-600" method="post">
                    @csrf
                    {{-- Titulo --}}
                    <div class="mb-4">
                        <label for="titulo" class="block text-sm font-medium text-gray-700">Titulo</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="titulo" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Casa com Area de lazer">
                        </div>
                    </div>
                    {{-- Valor --}}
                    <div class="mb-4">
                        <label for="valor" class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="mt-1 relative rounded-md shadow-sm">

                            <input type="number" name="valor" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="1050,50">
                        </div>
                    </div>

{{--                    Imagens --}}
                    <div class="mb-4">
                        <label for="imagens" class="block text-sm font-medium text-gray-700">Escolha as melhores imagens do Imovel</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="file" name="imagens" id="imagens" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" multiple>
                        </div>
                    </div>
                    {{--Endereco --}}
                    <div class="mb-4">
                        <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="price" id="endereco" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Avenida Sabia, 1024">
                        </div>
                    </div>
{{--                    Descricao --}}
                    <div class="mb-4">
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Descricao</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea name="descricao" id="descricao" class="h-20 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Avenida Sabia, 1024"></textarea>
                        </div>
                    </div>
{{--                    Link do Google maps--}}
                    <div class="mb-4">
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Cole aqui o link do Google Maps</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea name="descricao" id="descricao" class="h-20 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Avenida Sabia, 1024"></textarea>
                        </div>
                    </div>
{{--                    Comodos e areas do imovel--}}
                    <div class=" container ">

                        <h3 class="text-gray-600 text-center pt-8 pb-3"> Comodos / Areas do imovel</h3>

                        <div class="w-full ">
                            <div class="flex">
                                <div class="mr-2">
                                    <label for="descricao" class="block text-sm font-medium text-gray-700">Quartos</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="descricao" id="descricao" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="3">
                                    </div>
                                </div>
                                <div class="mr-2">
                                    <label for="banheiros" class="block text-sm font-medium text-gray-700">Banheiros</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="banheiros" id="banheiros" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="2">
                                    </div>
                                </div>
                                <div class="mr-2">
                                    <label for="suite" class="block text-sm font-medium text-gray-700">Suíte</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="suite" id="suite" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="1">
                                    </div>
                                </div>

                                <div class="mr-2">
                                    <label for="areaLazer" class="block text-sm font-medium text-gray-700">Area de lazer</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="text" name="areaLazer" id="areaLazer" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="sim / não">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="py-4 mb-4">
                        <p>O imovel está para: </p>
                        <select name="motivo" id="motivo" class="rounded-lg" onselect="">
{{--                            <option value=""></option>--}}
                            <option value="alugar">Alugar</option>
                            <option value="vender">Vender</option>
                        </select>
                    </div>
                    {{-- Btn para submeter o formulario --}}
                    <button class="bg-gray-800 rounded-lg text-white text-center font-bold p-5 mt-6" type="submit">Cadastrar imovel</button>
                </form>
            </div>
        </div>
    </section>

@endsection
