@extends('layouts.admin')

@section('content')

<section  class="bg-indigo-100">
    {{-- {{$imoveis}} --}}

    {{-- @php
         dd($imoveis);
    @endphp --}}


    <section class="section-lista-imoveis" >


        @if(count($imoveis))

             @foreach($imoveis as $imovel)
                <div class="container p-5">
                    <div>
                        <div class="flex">
                            <h1 class="titulo-imovel">{{$imovel->titulo}} </h1>
                            <span class="ml-3">#Cod: {{$imovel->id}}</span>
                        </div>
                        <hr class="w-full mb-4">
                    </div>

                    <div class="space-around ">
                        <div class="imagem-principal">
                            @foreach ($Galeria as $image)
                                @if($imovel->id == $image->imovel_id)
                                    <img class="imagem-do-imovel" src="{{url('storage/'.$image->path)}}" alt="{{$imovel->titulo}}">
                                @endif
                            @endforeach
                        </div>

                        <div class="ml-3 detalhes-imovel">
                            <div>
                                <h3 class="mb-4">Valor:</h3>
                                <span class="text-white">R$ {{$imovel->valor}}</span>
                            </div>
                            <hr class="w-full mb-4">
                            <div >
                                <h3 >Descrição:</h3>
                                <span class="text-white">
                                    {{$imovel->descricao}}
                                </span>
                            </div>
                            <hr class="w-full mb-4">
                            <div>
                                <h3 >Endereço:</h3>
                                <span class="text-white">{{$imovel->endereco}}</span>
                            </div>
                        </div>

                        <div class="botoes-acao grid">
                            <a href="https://facebook.com" target="_blank">
                                <x-button class="ml-3 mb-4 btn btn-azul">
                                    {{__('Google Maps')}}
                                </x-button>
                            </a>
                            <a href="{{route('imoveis.edit', $imovel->id)}}">
                                <x-button class="ml-3 mb-4 btn btn-amarelo">
                                    {{__('Editar')}}
                                </x-button>
                            </a>

                            <a href="{{route('imoveis.visibility',$imovel->id)}}">
                                <x-button class="ml-3 mb-4 btn btn-cinza">
                                    {{ __('Ocultar') }}
                                </x-button>
                            </a>


                            <form action="{{route('imoveis.destroy', ['id'=>$imovel->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <x-button class="ml-3 mb-4 btn btn-vermelho" type="submit">
                                    {{ __('Excluir') }}
                                </x-button>
                            </form>

                        </div>
                    </div>

                </div>
                <hr style="padding: 5px">
            @endforeach

        @else
            <p class="text-white m-auto p-5">
                Nenhum imóvel cadastrado!!
            </p>
        @endif

    </section>

@endsection
