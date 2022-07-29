@extends('layouts.admin')

@section('content')


    <div class="flex justify-center align-center" style="width: 420px; heigth:420px; flex-direction: column; margin:auto;">
        @foreach ($imagens as $image)
                <img width="100%" src="{{asset('storage/'.$image->path)}}" alt="imagem {{$image->id}}">
        @endforeach
    </div>

@endsection