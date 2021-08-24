@extends('principal')

@section('conteudo')

<div class="row">
    <h1>Dados do Equipamento</h1>

    <p>Id: {{ $equipamento->id }}</p>
    <p>Nome: {{ $equipamento->nome }}</p>
    <p>Última atualização: {{ $equipamento->updated_at }}</p>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-outline-danger" href="{{route('equipamentos.edit', $equipamento->id)}}">Editar</a>

        <a class="btn btn-outline-warning" href="{{route('equipamentos.index')}}">Voltar</a>
    </div>
</div>

@endsection