@extends('layouts.app')
@include('layouts.navigation')

@section('content')

{{--    <div class="bg-indigo-50">--}}

{{--        <div class="grid grid-cols-1 md:grid-cols-2">--}}

{{--            <div class="bg-gray-800 text-white">--}}
{{--                <h3 class="text-center text-bold" >Agiliza</h3>--}}
{{--                <ul>--}}
{{--                    <li><a  href="{{route('insereImovel')}}">Cadastrar imovel</a></li>--}}
{{--                    <li ><a href="{{route('insereImovel')}}">Mostrar todos imoveis</a></li>--}}
{{--                    <li><a  href="{{route('insereImovel')}}">Cadastrar imovel</a></li>--}}
{{--                </ul>--}}

{{--            --}}{{-- Formulário para fazer o Logout--}}
{{--            <form method="post" action="{{ route('logout') }}">--}}
{{--                @csrf--}}
{{--                <button type="submit" class="bg-red-500">--}}
{{--                    Logout--}}
{{--                </button>--}}
{{--            </form>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            test--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
