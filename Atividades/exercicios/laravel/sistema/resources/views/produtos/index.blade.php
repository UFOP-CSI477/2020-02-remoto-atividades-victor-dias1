@extends('principal')

@section('conteudo')

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Produto</th>
            <th>Unidade de Medida</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>

        @foreach($produtos as $p)
        <tr>
            <th>{{$p->id}}</th>
            <th>{{$p->nome}}</th>
            <th>{{$p->um}}</th>
            <td><a href="{{route('produtos.show', $p->id)}}" class="btn btn-outline-info">Exibir</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('produtos.create') }}" class="btn btn-outline-primary">Cadastrar</a>

@endsection