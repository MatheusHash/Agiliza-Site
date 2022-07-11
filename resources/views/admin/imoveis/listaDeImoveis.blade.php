@extends('layouts.admin')

@section('content')

<section  class="bg-indigo-100">
    {{-- {{$imoveis}} --}}
    
    {{-- @php   
        dd($Galeria);
    @endphp --}}

    <div class="container ">
        <table class="mt-6 mx-auto table">
            <thead>
            <tr>
                <th class="border-b border-indigo-400 bg-gray-100 text-center p-2" scope="col">Cod</th>
                <th class="border-b border-indigo-400 bg-gray-100 text-center p-2" scope="col">Nome</th>
                <th class="border-b border-indigo-400 bg-gray-100 text-center p-2" scope="col">Valor</th>
                <th class="border-b border-indigo-400 bg-gray-100 text-center p-2" scope="col">descricao</th>
                <th class="border-b border-indigo-400 bg-gray-100 text-center p-2" scope="col">Codigo da cidade</th>
                <th class="border-b border-indigo-400 bg-gray-100 text-center p-2" scope="col">GoogleMaps</th>
                <th class="border-b border-indigo-400 bg-gray-100 text-center p-2" scope="col">ação</th>
            </tr>
            </thead>
            <tbody>
                @if($imoveis)
                    @foreach($imoveis as $imovel )
                        @if($imovel->oculto)

                            <tr class="col mt-3">
                                @foreach($Galeria as $image)
                                    @if($imovel->id == $image->imovel_id)
                                        <td class="border p-2">
                                            <div class="">
                                                <img src="{{url('storage/'.$image->path)}}" alt=" Alt Test " width="100px" height="150px">
                                                <hr>
                                            </div>
                                        </td>
                                    @endif
                                @endforeach
                                <td class="border p-2">{{$imovel->id}}</td>
                                <td class="border p-2">{{$imovel->titulo}}</td>
                                <td class="border p-2">R$ {{$imovel->valor}}</td>
                                <td class="border p-2">{{$imovel->descricao}}</td>
                                <td class="border p-2">{{$imovel->cidade_id}}</td>
                                <td class="border p-2">
                                    <a href="{{$imovel->googlemaps}}" target="__blank">link - GoogleMaps</a>                        
                                </td>                        
                                <td class="border p-2">
                                    <a href="{{ route('imoveis.edit', $imovel->id) }}" class="ml-3">
                                       Editar
                                    </a>
                                    <x-button class="ml-3">
                                        {{ __('Excluir') }}
                                    </x-button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            </tbody>
        </table>
        </table>
    </div>
    </tbody>

</section>

@endsection