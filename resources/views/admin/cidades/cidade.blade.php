@extends('layouts.admin')
@include('layouts.navigation')

@section('content')

    <section class="bg-indigo-50">

        <div class="container">
        <a href="{{route('formAdicionarCidade')}}" class="btn btn-primary btn-lg ">Cadastrar Cidade</a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Nome</th>
                </tr>
                </thead>
                <tbody>
                @if($cidades)
                    @foreach($cidades as $cidade )
                        <tr class="col">
                            <td>{{$cidade->id}}</td>
                            <td>{{$cidade->nome}}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm">excluir</button>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            </table>
        </div>


        </tbody>

    </section>

@endsection
