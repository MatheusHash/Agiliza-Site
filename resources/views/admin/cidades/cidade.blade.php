@extends('layouts.admin')
@include('layouts.navigation')
@include('admin.cidades.form')

@section('content')
    <section class="bg-indigo-50">

        <div class="container">
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
