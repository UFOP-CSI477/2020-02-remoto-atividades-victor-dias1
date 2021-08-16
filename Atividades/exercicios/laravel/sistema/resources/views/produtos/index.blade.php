@extends('principal')

@section('conteudo')

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Produto</th>
            <th>Unidade de Medida</th>
        </tr>
    </thead>
    <tbody>

        @foreach($produtos as $p)
        <tr>
            <th>{{$p->id}}</th>
            <th>{{$p->nome}}</th>
            <th>{{$p->um}}</th>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection