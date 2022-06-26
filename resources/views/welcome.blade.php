
@extends('layouts.app')

@section('content')

    <h1>Página HOME</h1>
    {{--Para encaminhar para uma rota é necessário colocar um name para a rota no arquivo WEB--}}
    {{--<a href="{{  route('imovel')  }}">Clique aqui</a>--}}

    <div style="min-width: 900px; max-height: 500px;">
        <iframe style="width:900px " src="https://www.google.com/maps/embed?pb=!4v1655587088170!6m8!1m7!1sYR_ZlJEOElwZr8-bjYTC7g!2m2!1d-20.71237578251872!2d-46.62018653339272!3f77.45582109420434!4f-2.266971915943671!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="bg-indigo-400 grid-cols-1 lg:grid-cols-2">
        <div class="flex bg-indigo-50 text-gray-500">

            <a href="{{ route('login') }}" class="border-gray-400">Fazer login</a>
        </div>

    </section>
@endsection
