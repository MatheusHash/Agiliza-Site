@extends('layouts.admin')

@section('content')
    <section class="" style="width: 420px; heigth:420px; flex-direction: column; margin:auto;">
        @foreach ($imagens as $image)
            <div>
                <p>Imagem: {{$image->id}} - Imóvel: {{$image->imovel_id}}</p>
                @if($image->principal)
                 <p>Imagem de Capa</p>   
                @endif
                <img width="100%" src="{{asset('storage/'.$image->path)}}" alt="imagem {{$image->id}}">
                <div style="margin-top: 5px;" class="flex justify-center">

                    <form action="{{route('imagem.destroy', ['idImagem'=>$image->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="text" class="hidden" name="path" value="{{$image->path}}">
                        <x-button class="ml-3 mb-4 btn btn-vermelho" type="submit">
                            {{ __('Excluir') }}
                        </x-button>
                    </form>
                    
                    <form action="{{ route('imagemCapa.update', ['idImovel'=>$image->imovel_id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" class="hidden" name="idImovel" value="{{$image->imovel_id}}">
                        <input type="text" class="hidden" name="idImagem" value="{{$image->id}}">
                    
                        <x-button class="ml-3 mb-4 btn btn-azul" type="submit">
                            {{ __('Colocar na capa') }}
                        </x-button>
                    </form>

                </div>
            </div>
        @endforeach

        <div class="flex justify-end">

            <x-button class="ml-3 mb-4 btn btn-cinza" type="submit">
                {{ __('Cancelar') }}
            </x-button>
            {{-- <form action="{{route('imagem.destroy', ['idImovel'=>$imagens->imovel_id])}}" method="POST">
                @csrf
                @method('PUT')
                <x-button class="ml-3 mb-4 btn btn-vermelho" type="submit">
                    {{ __('Exluir todas') }}
                </x-button>
            </form> --}}
        </div>
    </section>
@endsection