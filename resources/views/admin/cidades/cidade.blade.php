@extends('layouts.admin')

@section('content')
@include('admin.cidades.form')
    <section class="bg-indigo-50 ">
        <div class="border-indigo-500 ml-12" style="justify-content:center;">
            @if($cidades)
                @foreach($cidades as $cidade )
                        <span class="border-indigo-500 p-2">{{$cidade->id}} |</span>
                        <span class="border-indigo-500 p-2">{{$cidade->nome}}</span>
                        <hr>
                        <br>
                @endforeach
            @endif
        </div>

    </section>

@endsection
